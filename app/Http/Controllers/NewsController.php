<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\News;
use App\Models\Category;
use App\Models\NewsCategory;
use App\Models\StaticPageSeoManage;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = News::with(['news_category.category_name'])->orderBy('updated_at', 'desc')->get();
        // return $blog = Blog::with(['blog_category.category_name' => function ($query) {
        //     $query->where('is_active', 1);
        // }])->orderBy('created_at', 'desc')->get();
        return view('admin.news.index', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::where('is_active', '1')->get();
        return view('admin.news.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'heading' => 'required|unique:news,heading',
            'slug' => 'required|unique:news,slug',
            'image' => 'image|mimes:jpg,jpeg,png|max:200|dimensions:min_width=365,min_height=280,max_width=370,max_height=288',
            'short_description' => 'required',
            'long_description' => 'required',
            'written_by' => 'required',
            'publish_date' => 'required',
            'meta_description' => 'required',
            'meta_keyword' => 'required',
            'meta_og' => 'required',
            // 'blog_category' => 'required',
        ]);

        DB::beginTransaction();
        try {

            $blog = new News;
            $blog->heading = $request->heading;
            // $blog->type='blog';
            $blog->slug = Str::slug($request->slug, '-');
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = uploadImage($file, 'blogImages');
                $blog->image = $filename;
                // $blog->image= $filename;
                // $blog->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            }
            $blog->image_alt = $request->image_alt;
            $blog->short_description = $request->short_description;
            $blog->long_description = $request->long_description;
            $blog->written_by = $request->written_by;
            $blog->publish_date = $request->publish_date;
            $blog->meta_title = $request->meta_title;
            $blog->meta_description = $request->meta_description;
            $blog->meta_keyword = $request->meta_keyword;
            $blog->meta_og = $request->meta_og;
            $blog->save();

            foreach ($request->input('blog_category', []) as $category) {

                $blog_Category = new NewsCategory;
                $blog_Category->news_id = $blog->id;
                $blog_Category->news_categories_id = $category;
                $blog_Category->save();
            }
            DB::commit();
            Session::flash('success', 'News created successfully');
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.manage-news.index');
            } elseif (Auth::user()->role == 'event-manager') {
                return redirect()->route('event-manager.manage-news.index');
            } elseif (Auth::user()->role == 'seo-manager') {
                return redirect()->route('seo-manager.manage-news.index');
            }
        } catch (\Throwable $th) {
            // Rollback and return with Error
            DB::rollBack();
            return redirect()->back()->withInput()->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        // dd($request->all());
        $blog = News::find($id);
        $blog->is_active = $request->status;
        $blog->updated_at = now();
        $blog->save();
        return response()->json(['success' => 'Record status changed successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $blog = News::with(['news_category'])->where('slug', $slug)->first();
        $category = Category::where('is_active', '1')->get();
        $selectedCategory = $blog->news_category->pluck('news_categories_id')->toArray();
        return view('admin.news.edit', compact('blog', 'category', 'selectedCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request->all();
        $request->validate([
            'heading' => 'required|unique:news,heading,' . $id,
            'slug' => 'required|unique:news,slug,' . $id,
            'image' => 'image|mimes:jpg,jpeg,png|max:200|dimensions:min_width=365,min_height=280,max_width=370,max_height=288',
            'short_description' => 'required',
            'long_description' => 'required',
            'written_by' => 'required',
            'publish_date' => 'required',
            'meta_title' => 'required',
            'meta_description' => 'required',
            'meta_keyword' => 'required',
            'meta_og' => 'required',
            // 'blog_category' => 'required',
        ]);

        DB::beginTransaction();
        try {

            $blog = News::find($id);
            // $blog->type='blog';
            $blog->heading = $request->heading;
            $blog->slug = Str::slug($request->slug, '-');
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = uploadImage($file, 'blogImages');
                $blog->image = $filename;
                // $blog->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            }
            $blog->image_alt = $request->image_alt;
            $blog->short_description = $request->short_description;
            $blog->long_description = $request->long_description;
            $blog->publish_date = $request->publish_date;
            $blog->written_by = $request->written_by;
            $blog->meta_title = $request->meta_title;
            $blog->meta_description = $request->meta_description;
            $blog->meta_keyword = $request->meta_keyword;
            $blog->meta_og = $request->meta_og;
            $blog->updated_at = now();
            $blog->save();

            NewsCategory::where('news_id', $blog->id)->delete();

            foreach ($request->input('blog_category', []) as $category) {

                $blog_Category = new NewsCategory;
                $blog_Category->news_id = $blog->id;
                $blog_Category->news_categories_id = $category;
                $blog_Category->save();
            }
            // $blog->blog_category()->sync($request->input('blog_category'));

            DB::commit();
            Session::flash('success', 'News updated successfully');
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.manage-news.index');
            } elseif (Auth::user()->role == 'event-manager') {
                return redirect()->route('event-manager.manage-news.index');
            } elseif (Auth::user()->role == 'seo-manager') {
                return redirect()->route('seo-manager.manage-news.index');
            }
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
        News::where('id', $id)->delete();
        return response()->json(['success' => 'News deleted successfully!']);
    }


    public function newslist()
    {
        $blog = News::where('is_active', '1')->orderBy('publish_date', 'desc')->paginate(10); // Change the number of items per page as needed
        // $MetaOg=StaticPageSeoManage::where('id',1)->first()->blog_meta_og;
        // return view('data.index', compact('data'));
        return view('guest.news.listing', compact('blog'));
    }

    public function searchData(Request $request)
    {
        $query = $request->input('query');
        $data = News::where('column_name', 'like', '%' . $query . '%')->paginate(10);
        return view('data.partial', compact('data'));
    }


    public function newsDetail(Request $request, string $slug)
    {
        try {
            $blog = News::with(['news_category.category_name'])->where('slug', $slug)->where('is_active', '1')->first();
            // dd($blog);
            $pageData = News::where('slug', $slug)->where('is_active', '1')->first();
            $recent_post = News::with(['news_category.category_name'])->orderBy('updated_at', 'desc')->take(4)->get();
            $MetaOg = $pageData->meta_og;
            if (is_null($blog)) {
                abort(404);
            } else {

                return view('guest.news.detail', compact('blog', 'pageData', 'MetaOg', 'recent_post'));
            }
        } catch (\Throwable $th) {

            abort(404);
        }
    }
}
