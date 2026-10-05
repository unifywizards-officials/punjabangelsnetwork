<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;
use App\Models\Facilities;
class FacilitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facility=Facilities::orderBy('updated_at', 'desc')->get();
        return view('admin.facility.index',compact('facility'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.facility.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:facilities,name',
            'image' => 'image|max:200',
        ]);

        DB::beginTransaction();
        try {
        $facility = new Facilities;
        $facility->name=$request->name;
        $facility->user_id=Auth::user()->id;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= uploadImage($file,'facilityImages');
            $facility->image= $filename;
            // $blog->image= $filename;
            // $blog->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $facility->is_included=$request->is_included;
        $facility->save();
        DB::commit();
        Session::flash('success', 'Facility created successfully');
        if(Auth::user()->role == 'admin')
        {
            return redirect()->route('admin.manage-facility.index');
        }
        elseif (Auth::user()->role == 'content-manager') {
            return redirect()->route('content-manager.manage-facility.index');
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
        $facility=Facilities::find($id);
        $facility->is_active=$request->status;
        $facility->user_id=Auth::user()->id;
        $facility->updated_at=now();
        $facility->save();
        return response()->json(['success' => 'Record status changed successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $banner = Facilities::find($id);
        return view('admin.facility.edit',compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|unique:facilities,name,'.$id,
            'image' => 'image|max:200',
        ]);

        DB::beginTransaction();
        try {
        $facility = Facilities::find($id);
        $facility->user_id=Auth::user()->id;
        $facility->name=$request->name;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= uploadImage($file,'facilityImages');
            $facility->image= $filename;
            // $blog->image= $filename;
            // $blog->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $facility->is_included=$request->is_included;
        $facility->updated_at=now();
        $facility->save();
        DB::commit();
        Session::flash('success', 'Facility updated successfully');
        if(Auth::user()->role == 'admin')
        {
            return redirect()->route('admin.manage-facility.index');
        }
        elseif (Auth::user()->role == 'content-manager') {
            return redirect()->route('content-manager.manage-facility.index');
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
        Facilities::find($id)->delete($id);
        return response()->json(['success' => 'Record deleted successfully!']);
    }
}