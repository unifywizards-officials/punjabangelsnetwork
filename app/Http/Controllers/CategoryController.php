<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Blog;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category=Category::orderBy('created_at', 'desc')->get();
        return view('admin.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'category_name' => 'required|unique:categories,category_name',
        ]);

        DB::beginTransaction();
        try {
        $category = new Category;
        $category->category_name=$request->category_name;
        $category->save();
        DB::commit();
        Session::flash('success', 'Category created successfully');
        if(Auth::user()->role == 'admin')
        {
        return redirect()->route('admin.category.index');
        }
        elseif (Auth::user()->role == 'event-manager') {
        return redirect()->route('event-manager.category.index');
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
    public function show(Request $request,string $id)
    {
        // dd($request->all());
        $category=Category::find($id);
        $category->is_active=$request->status;
        $category->save();
        return response()->json(['success' => 'Record status changed successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category=Category::find($id);
        return view('admin.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request->all();
        $request->validate([
            'category_name' => 'required|unique:categories,category_name,'.$id
        ]);

        DB::beginTransaction();
     try {

        $category = Category::find($id);
        $category->category_name=$request->category_name;
        $category->save();
        DB::commit();
        Session::flash('success', 'Category updated successfully');
        if(Auth::user()->role == 'admin')
        {
        return redirect()->route('admin.category.index');
        }
        elseif (Auth::user()->role == 'event-manager') {
        return redirect()->route('event-manager.category.index');
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
    public function destroy(Request $request, $id)
    {
        // return $request->all();die();
        Category::find($id)->update(['is_active' => $request->status]);
        return response()->json(['success' => 'Status changed successfully!']);
    }
}
