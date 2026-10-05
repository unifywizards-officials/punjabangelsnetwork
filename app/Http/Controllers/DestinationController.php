<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;
use App\Models\Destination;
use App\Models\Packages;
use App\Models\StaticPageSeoManage;

class DestinationController extends Controller
{
    public function index()
    {
        $destination = Destination::with(['user'])->orderBy('updated_at', 'desc')->get();
        return view('admin.destination.index', compact('destination'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.destination.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required|unique:destinations,name',
            'slug' => 'required|unique:destinations,slug',
            'image' => 'image|mimes:jpg,jpeg,png,webp|max:200'
        ]);

        DB::beginTransaction();
        try {
            $destination = new Destination;
            $destination->name = $request->name;
            $destination->user_id = Auth::user()->id;
            $destination->slug = str_replace([' ', '-'], '', $request->slug);
            $destination->type = $request->type;
            $destination->about_destination = $request->about_destination;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = uploadImage($file, 'DestinationImages');
                $destination->image = $filename;
                // $blog->image= $filename;
                // $blog->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            }

            $destination->image_alt = $request->image_alt;
            if ($request->file('banner_image')) {
                $file = $request->file('banner_image');
                $filename = uploadImage($file, 'DestinationImages');
                $destination->banner_image = $filename;
                // $blog->image= $filename;
                // $blog->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            }
            $destination->is_top_destination = $request->is_top_destination;
            $destination->meta_title = $request->meta_title;
            $destination->meta_description = $request->meta_description;
            $destination->meta_keyword = $request->meta_keyword;
            $destination->meta_og = $request->meta_og;
            $destination->save();
            DB::commit();
            Session::flash('success', 'Destination created successfully');

            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.manage-destination.index');
            } elseif (Auth::user()->role == 'content_manager') {
                return redirect()->route('content_manager.manage-destination.index');
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
        $destination = Destination::find($id);
        $destination->is_active = $request->status;
        $destination->user_id = Auth::user()->id;
        $destination->updated_at = now();
        $destination->save();
        return response()->json(['success' => 'Record status changed successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $destination = Destination::find($id);
        return view('admin.destination.edit', compact('destination'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|unique:destinations,name,' . $id,
            'slug' => 'required|unique:destinations,slug,' . $id,
            'image' => 'image|mimes:jpg,jpeg,png,webp|max:200'
        ]);

        DB::beginTransaction();
        try {
            $destination = Destination::find($id);
            $destination->user_id = Auth::user()->id;
            $destination->name = $request->name;
            $destination->slug = str_replace([' ', '-'], '', $request->slug);
            $destination->type = $request->type;
            $destination->about_destination = $request->about_destination;
            if ($request->file('image')) {
                $file = $request->file('image');
                $filename = uploadImage($file, 'DestinationImages');
                $destination->image = $filename;
                // $blog->image= $filename;
                // $blog->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            }
            $destination->image_alt = $request->image_alt;
            if ($request->file('banner_image')) {
                $file = $request->file('banner_image');
                $filename = uploadImage($file, 'DestinationImages');
                $destination->banner_image = $filename;
                // $blog->image= $filename;
                // $blog->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            }

            $destination->is_top_destination = $request->is_top_destination;
            $destination->meta_title = $request->meta_title;
            $destination->meta_description = $request->meta_description;
            $destination->meta_keyword = $request->meta_keyword;
            $destination->meta_og = $request->meta_og;
            $destination->updated_at = now();
            $destination->save();
            DB::commit();
            Session::flash('success', 'Destination updated successfully');
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin.manage-destination.index');
            } elseif (Auth::user()->role == 'content-manager') {
                return redirect()->route('content-manager.manage-destination.index');
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
        Destination::find($id)->delete($id);
        Packages::where('destination_id', $id)->delete();
        return response()->json(['success' => 'Record deleted successfully!']);
    }

    public function showDestination($slug)
    {

        try {
            $pageData = Destination::with(['packages'])->where('slug', $slug)->where('is_active', 1)->first();
            $MetaOg = $pageData->meta_og;

            if (!$pageData) {
                // return view('errors.404');
                abort(404);
            }
            return view('guest.page.destination', compact('pageData', 'MetaOg'));
        } catch (\Throwable $th) {

            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}
