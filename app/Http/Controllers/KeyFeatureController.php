<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;
use App\Models\HomePageKeyFeature;

class KeyFeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home=HomePageKeyFeature::orderBy('updated_at', 'desc')->get();
        return view('admin.master-entries.key-feature.index',compact('home'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.master-entries.key-feature.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'font_awesome_icon_class' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png|max:200',
            'image_alt' => 'required',
        ]);

        DB::beginTransaction();
        try {

        $home = new HomePageKeyFeature;
        $home->title = $request->title;
        $home->font_awesome_icon_class = $request->font_awesome_icon_class;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= uploadImage($file,'blogImages');
            $home->image= $filename;
            // $blog->image= $filename;
            // $home->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $home->image_alt= $request->image_alt;
        $home->save();
        DB::commit();
        // $msg = "Home Section1 Saved Successfully.";
        // return redirect()->back()->with('success',$msg);
        Session::flash('success', 'Key Features Updated Successfully');
        // return redirect()->back();
        return redirect()->route('manage-key-feature.index');

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
        $home=HomePageKeyFeature::find($id);
        $home->is_active=$request->status;
        $home->save();
        return response()->json(['success' => 'Record status changed successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $home = HomePageKeyFeature::findOrFail($id);
        return view('admin.master-entries.key-feature.edit',compact('home'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'font_awesome_icon_class' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png|max:200',
            'image_alt' => 'required',
        ]);

        DB::beginTransaction();
        try {

        $home = HomePageKeyFeature::findOrFail($id);
        $home->title = $request->title;
        $home->font_awesome_icon_class = $request->font_awesome_icon_class;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= uploadImage($file,'blogImages');
            $home->image= $filename;
            // $blog->image= $filename;
            // $home->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $home->image_alt= $request->image_alt;
        $home->save();
        DB::commit();
        Session::flash('success', 'Key Features Updated Successfully');
        // return redirect()->back();
        return redirect()->route('manage-key-feature.index');

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
        HomePageKeyFeature::find($id)->delete($id);
        return response()->json(['success' => 'Record deleted successfully!']);
    }
}
