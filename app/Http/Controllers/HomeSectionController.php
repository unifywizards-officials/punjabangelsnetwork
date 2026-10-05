<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;
use App\Models\HomePageSection1;
class HomeSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home=HomePageSection1::orderBy('updated_at', 'desc')->get();
        return view('admin.master-entries.section1.index',compact('home'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.master-entries.section1.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'font_awesome_icon_class' => 'required',
            // 'is_active' => 'required',
        ]);

        DB::beginTransaction();
        try {

        $section1 = new HomePageSection1;
        $section1->title = $request->title;
        $section1->description = $request->description;
        $section1->font_awesome_icon_class = $request->font_awesome_icon_class;
        $section1->save();
        DB::commit();
        // $msg = "Home Section1 Saved Successfully.";
        // return redirect()->back()->with('success',$msg);
        Session::flash('success', 'Home Section1 Saved Successfully');
        return redirect()->route('manage-section1.index');
        // return redirect()->route('manage-blog.index')->with('success','Blog Updated Successfully.');
        // return redirect()->back();

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
        $home=HomePageSection1::find($id);
        $home->is_active=$request->status;
        $home->save();
        return response()->json(['success' => 'Record status changed successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $section = HomePageSection1::findOrFail($id);
        return view('admin.master-entries.section1.edit',compact('section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'font_awesome_icon_class' => 'required',
            // 'is_active' => 'required',
        ]);

        DB::beginTransaction();
        try {

        $section1 = HomePageSection1::findOrFail($id);
        $section1->title = $request->title;
        $section1->description = $request->description;
        $section1->font_awesome_icon_class = $request->font_awesome_icon_class;
        $section1->save();
        DB::commit();
        // $msg = "Home Section1 Saved Successfully.";
        // return redirect()->back()->with('success',$msg);
        Session::flash('success', 'Home Section1 Updated Successfully');
        return redirect()->route('manage-section1.index');

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
        HomePageSection1::find($id)->delete($id);
        return response()->json(['success' => 'Record deleted successfully!']);
    }
}
