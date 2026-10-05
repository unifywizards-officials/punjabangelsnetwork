<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Blog;
use App\Models\Category;
use App\Models\BlogCategory;
use App\Models\StaticPageSeoManage;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;

class PressReleaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog=Blog::with(['blog_category.category_name'])->where('type','press-release')->orderBy('updated_at', 'desc')->get();
        

        // return $blog = Blog::with(['blog_category.category_name' => function ($query) {
        //     $query->where('is_active', 1);
        // }])->orderBy('created_at', 'desc')->get();
        return view('admin.press-release.index',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category=Category::where('is_active','1')->get();
        return view('admin.press-release.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'heading' => 'required|unique:blogs,heading',
            'image' => 'image|mimes:jpg,jpeg,png|max:200',
            'short_description' => 'required',
            'long_description' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keyword' => 'required',
            'blog_category' => 'required',
        ]);

        DB::beginTransaction();
        try {

        $blog = new Blog;
        $blog->heading=$request->heading;
        $blog->type='press-release';
        $blog->slug=Str::slug($request->heading,'-');
        if($request->file('image')){
            $file= $request->file('image');
            $filename= uploadImage($file,'blogImages');
            $blog->image= $filename;
            // $blog->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $blog->image_alt=$request->image_alt;
        $blog->short_description=$request->short_description;
        $blog->long_description=$request->long_description;
        $blog->publish_date=$request->publish_date;
        $blog->meta_title=$request->meta_title;
        $blog->meta_description=$request->meta_description;
        $blog->meta_keyword=$request->meta_keyword;
        $blog->save();

        foreach ($request->input('blog_category', []) as $category) {
            
            $blog_Category=new BlogCategory;
            $blog_Category->blogs_id=$blog->id;
            $blog_Category->blog_categories_id=$category;
            $blog_Category->save();
        }
        DB::commit();
        Session::flash('success', 'Press Release Created Successfully');
        return redirect()->route('manage-press-release.index');

     } catch (\Throwable $th) {
         // Rollback and return with Error
         DB::rollBack();
         return redirect()->back()->withInput()->with('error', $th->getMessage());
     }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request,string $id)
    {
        // dd($request->all());
        $blog=Blog::find($id);
        $blog->is_active=$request->status;
        $blog->save();
        return response()->json(['success' => 'Record status changed successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $blog = Blog::with(['blog_category'])->where('slug',$slug)->first();
        $category=Category::where('is_active','1')->get();
        $selectedCategory = $blog->blog_category->pluck('blog_categories_id')->toArray();
        return view('admin.press-release.edit',compact('blog','category','selectedCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request->all();
        $request->validate([
            'heading' => 'required|unique:blogs,heading,'.$id,
            'image' => 'image|mimes:jpg,jpeg,png|max:200',
            'short_description' => 'required',
            'long_description' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keyword' => 'required',
            'blog_category' => 'required',
        ]);
      
        DB::beginTransaction();
        try {

        $blog = Blog::find($id);
        $blog->type='press-release';
        $blog->heading=$request->heading;
        $blog->slug=Str::slug($request->slug,'-');
        if($request->file('image')){
            $file= $request->file('image');
            $filename= uploadImage($file,'blogImages');
            $blog->image= $filename;
            // $blog->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $blog->image_alt=$request->image_alt;
        $blog->short_description=$request->short_description;
        $blog->long_description=$request->long_description;
        $blog->publish_date=$request->publish_date;
        $blog->meta_title=$request->meta_title;
        $blog->meta_description=$request->meta_description;
        $blog->meta_keyword=$request->meta_keyword;
        $blog->save();

        BlogCategory::where('blogs_id', $blog->id)->delete();

        foreach ($request->input('blog_category', []) as $category) {
            
            $blog_Category=new BlogCategory;
            $blog_Category->blogs_id=$blog->id;
            $blog_Category->blog_categories_id=$category;
            $blog_Category->save();
        }
        // $blog->blog_category()->sync($request->input('blog_category'));

        DB::commit();
        Session::flash('success', 'Press Release Updated Successfully');
        return redirect()->route('manage-press-release.index');

     } catch (\Throwable $th) {
         // Rollback and return with Error
         DB::rollBack();
         return redirect()->back()->withInput()->with('error', $th->getMessage());
     }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::find($id)->update(['is_active' => $request->status]);
        return response()->json(['success' => 'Status changed successfully!']);
    }


    public function bloglist()
    {
        $data = Blog::where('type','press-release')->paginate(10); // Change the number of items per page as needed
        $MetaOg=StaticPageSeoManage::where('id',1)->first()->blog_meta_og;
        return view('data.index', compact('data','MetaOg'));
    }

    public function searchData(Request $request)
    {
        $query = $request->input('query');
        $data = Blog::where('column_name', 'like', '%' . $query . '%')->where('type','press-release')->paginate(10);
        return view('data.partial', compact('data'));
    }


    public function blogDetail(Request $request, string $slug)
    {
        $blog = Blog::with(['blog_category.category_name'])->where('slug',$slug)->first();
        $pageData = Blog::with(['blog_category.category_name'])->where('slug',$slug)->first();
        return view('guest.blog.detail',compact('blog','pageData'));
    }
}
