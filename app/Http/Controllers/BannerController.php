<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner = Banner::with('user')->orderBy('updated_at', 'desc')->get();
        return view('admin.banner.index', compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $request->image;
        $request->validate([
            // 'heading' => 'required',
            // 'sub_heading' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png|max:200',
            // 'button_text' => 'required',
        ]);

        DB::beginTransaction();
        try {
            $banner = new Banner;
            // $banner->heading=$request->heading;
            // $banner->sub_heading=$request->sub_heading;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = uploadImage($file, 'bannerImages');
                $banner->image = $filename;
                // $blog->image= $filename;
                // $blog->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            }
            // $banner->image_alt=$request->image_alt;
            // $banner->user_id=Auth::user()->id;
            $banner->save();
            DB::commit();
            Session::flash('success', 'Banner created successfully');
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.manage-banner.index');
            } elseif (Auth::user()->role == 'event-manager') {
                return redirect()->route('event-manager.manage-banner.index');
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
        $banner = Banner::find($id);
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
        $banner = Banner::find($id);
        return view('admin.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request->all();
        $request->validate([
            // 'heading' => 'required',
            // 'sub_heading' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png|max:200',
            // 'button_text' => 'required',
        ]);

        DB::beginTransaction();
        try {

            $banner = Banner::find($id);
            // $banner->heading=$request->heading;
            // $banner->sub_heading=$request->sub_heading;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = uploadImage($file, 'bannerImages');
                $banner->image = $filename;
                // $blog->image= $filename;
                // $blog->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            }
            // $banner->image_alt=$request->image_alt;
            // $banner->button_text=$request->button_text;
            // $banner->user_id=Auth::user()->id;
            $banner->updated_at = now();
            $banner->save();
            DB::commit();
            Session::flash('success', 'Banner updated successfully');
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.manage-banner.index');
            } elseif (Auth::user()->role == 'event-manager') {
                return redirect()->route('event-manager.manage-banner.index');
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
        Banner::find($id)->delete($id);
        return response()->json(['success' => 'Record deleted successfully!']);
    }
}
