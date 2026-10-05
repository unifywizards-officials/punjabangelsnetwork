<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;
use App\Models\AboutUsPagePopularServices;

class PopularServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $home=AboutUsPagePopularServices::orderBy('updated_at', 'desc')->get();
        return view('admin.master-entries.popular-service.index',compact('home'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.master-entries.popular-service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'font_awesome_icon_class' => 'required',
            // 'is_active' => 'required',
        ]);

        DB::beginTransaction();
        try {

        $home = new AboutUsPagePopularServices;
        $home->title = $request->title;
        $home->font_awesome_icon_class = $request->font_awesome_icon_class;
        $home->save();
        DB::commit();
        // $msg = "Home Section1 Saved Successfully.";
        // return redirect()->back()->with('success',$msg);
        Session::flash('success', 'Popular Service Created Successfully');
        return redirect()->back();

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
        $home=AboutUsPagePopularServices::find($id);
        $home->is_active=$request->status;
        $home->save();
        return response()->json(['success' => 'Record status changed successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $home = AboutUsPagePopularServices::findOrFail($id);
        return view('admin.master-entries.popular-service.edit',compact('home'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'font_awesome_icon_class' => 'required',
            // 'is_active' => 'required',
        ]);

        DB::beginTransaction();
        try {

        $home = AboutUsPagePopularServices::findOrFail($id);
        $home->title = $request->title;
        $home->font_awesome_icon_class = $request->font_awesome_icon_class;
        $home->save();
        DB::commit();
        Session::flash('success', 'Popular Service Updated Successfully');
        return redirect()->back();

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
        AboutUsPagePopularServices::find($id)->delete($id);
        return response()->json(['success' => 'Record deleted successfully!']);
    }
}
