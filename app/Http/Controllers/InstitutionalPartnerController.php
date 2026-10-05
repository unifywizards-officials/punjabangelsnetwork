<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;
use App\Models\InstitutionalPartner;

class InstitutionalPartnerController extends Controller
{
    public function index()
    {
        $banner = InstitutionalPartner::orderBy('updated_at', 'desc')->get();
        return view('admin.institutional-partner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.institutional-partner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->image;
        $request->validate([
            // 'heading' => 'required',
            // 'sub_heading' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png,webp',
            // 'button_text' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $banner = new InstitutionalPartner;
            // $banner->heading=$request->heading;
            // $banner->sub_heading=$request->sub_heading;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = uploadImage($file, 'guest/images/InstitutionalPartner');
                $banner->image = $filename;
                // $blog->image= $filename;
                // $blog->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            }
            $banner->image_alt = $request->image_alt;
            $banner->website_url = $request->website_url;
            // $banner->user_id=Auth::user()->id;
            $banner->save();
            DB::commit();
            Session::flash('success', 'Institutional Partner created successfully');
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.manage-institutional-partner.index');
            } elseif (Auth::user()->role == 'event-manager') {
                return redirect()->route('event-manager.manage-institutional-partner.index');
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
        $banner = InstitutionalPartner::find($id);
        $banner->is_active = $request->status;
        $banner->user_id = Auth::user()->id;
        $banner->updated_at = now();
        $banner->save();
        return response()->json(['success' => 'Record status changed successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $banner = InstitutionalPartner::find($id);
        return view('admin.institutional-partner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            // 'heading' => 'required',
            // 'sub_heading' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png,webp',
            // 'button_text' => 'required',
        ]);

        DB::beginTransaction();
        try {

            $banner = InstitutionalPartner::find($id);
            // $banner->heading=$request->heading;
            // $banner->sub_heading=$request->sub_heading;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = uploadImage($file, 'guest/images/InstitutionalPartner');
                $banner->image = $filename;
                // $blog->image= $filename;
                // $blog->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            }
            $banner->image_alt = $request->image_alt;
            $banner->website_url = $request->website_url;
            $banner->updated_at = now();
            $banner->save();
            DB::commit();
            Session::flash('success', 'Institutional Partner updated successfully');
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.manage-institutional-partner.index');
            } elseif (Auth::user()->role == 'event-manager') {
                return redirect()->route('event-manager.manage-institutional-partner.index');
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
        InstitutionalPartner::find($id)->delete($id);
        return response()->json(['success' => 'Record deleted successfully!']);
    }
}
