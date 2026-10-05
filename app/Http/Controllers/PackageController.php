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
use App\Models\Facilities;
use App\Models\PackageFacilities;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $package=Packages::with(['destination','user'])->orderBy('updated_at', 'desc')->get();
        return view('admin.package.index',compact('package'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $destination=Destination::all();
        $facilities=Facilities::where('is_included','1')->where('is_active','1')->get();
        return view('admin.package.create',compact('destination','facilities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:packages,name',
            'slug' => 'required|unique:packages,slug',
            'image' => 'image|mimes:jpg,jpeg,png|max:200',
            'duration' => 'required',
            'about_location' => 'required',
            'facilities' => 'required',

        ]);

        DB::beginTransaction();
        try {

        $package = new Packages;
        $package->user_id=Auth::user()->id;
        $package->name=$request->name;
        $package->slug =Str::slug($request->slug,'-');
        $package->destination_id =$request->destination_id;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= uploadImage($file,'packageImages');
            $package->image= $filename;
            // $blog->image= $filename;
            // $blog->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $package->image_alt=$request->image_alt;
        $package->duration=$request->duration;
        if($request['day_title'])
        {
            $combinedData = [];

            foreach ($request['day_title'] as $key => $title) {
                $combinedData[] = [
                    'day_title' => $title,
                    'description' => $request['description'][$key],
                    // 'image' =>is_string($request['image1'][$key]) ? $request['image1'][$key] :  uploadImage($request['image1'][$key],'pageImages'),
                    // 'image1_alt_tag' => $request['image1_alt_tag'][$key]
                ];
            }
    
            $package->itinerary = json_encode($combinedData);
        }
        else
        {
            $package->itinerary = '[]';

        }


        if($request['dest_image'])
        {
            $combinedData = [];

            foreach ($request['dest_image'] as $key => $title) {
                $combinedData[] = [
                    'dest_image' =>is_string($request['dest_image'][$key]) ? $request['dest_image'][$key] :  uploadImage($request['dest_image'][$key],'pageImages'),
                    'dest_alt_tag' => $request['dest_alt_tag'][$key]
                ];
            }
    
            $package->location_images = json_encode($combinedData);
        }
        else
        {
            $package->location_images = '[]';

        }
        $package->about_location=$request->about_location;
        $package->inclusive=$request->inclusive;
        $package->is_top_destination=$request->is_top_destination;
        $package->is_best_selling=0;
        $package->is_active=1;
        $package->meta_title=$request->meta_title;
        $package->meta_description=$request->meta_description;
        $package->meta_keyword=$request->meta_keyword;
        $package->meta_og=$request->meta_og;
        $package->save();

        foreach ($request->input('facilities', []) as $facilities) {
            
            $package_facilities=new PackageFacilities;
            $package_facilities->packages_id =$package->id;
            $package_facilities->facilities_id=$facilities;
            $package_facilities->save();
        }
        DB::commit();
        Session::flash('success', 'Package created successfully');
        if(Auth::user()->role == 'admin')
        {
            return redirect()->route('admin.manage-package.index');
        }
        elseif (Auth::user()->role == 'content-manager') {
            return redirect()->route('content-manager.manage-package.index');
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
        $destination=Packages::find($id);
        $destination->is_active=$request->status;
        $destination->user_id=Auth::user()->id;
        $destination->updated_at=now();
        $destination->save();
        return response()->json(['success' => 'Record status changed successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $package = Packages::with(['package_facilities'])->find($id);
        $facilities=Facilities::where('is_included','1')->where('is_active','1')->get();
        $selectedFacilities = $package->package_facilities->pluck('facilities_id')->toArray();
        $destination=Destination::all();
        return view('admin.package.edit',compact('package','destination','facilities','selectedFacilities'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required|unique:packages,name,'.$id,
            'slug' => 'required|unique:packages,slug,'.$id,
            'image' => 'image|mimes:jpg,jpeg,png|max:200',
            'duration' => 'required',
            'about_location' => 'required',
        ]);

        DB::beginTransaction();
        try {

        $package = Packages::find($id);
        $package->user_id=Auth::user()->id;
        $package->name=$request->name;
        $package->slug =Str::slug($request->slug,'-');
        $package->destination_id =$request->destination_id;
        if($request->file('image')){
            $file= $request->file('image');
            $filename= uploadImage($file,'packageImages');
            $package->image= $filename;
            // $blog->image= $filename;
            // $blog->image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $package->image_alt=$request->image_alt;
        $package->duration=$request->duration;
        if($request['day_title'])
        {
            $combinedData = [];

            foreach ($request['day_title'] as $key => $title) {
                $combinedData[] = [
                    'day_title' => $title,
                    'description' => $request['description'][$key],
                    // 'image' =>is_string($request['image1'][$key]) ? $request['image1'][$key] :  uploadImage($request['image1'][$key],'pageImages'),
                    // 'image1_alt_tag' => $request['image1_alt_tag'][$key]
                ];
            }
    
            $package->itinerary = json_encode($combinedData);
        }
        else
        {
            $package->itinerary = '[]';

        }


        if($request['dest_image'])
        {
            $combinedData = [];

            foreach ($request['dest_image'] as $key => $title) {
                $combinedData[] = [
                    'dest_image' =>is_string($request['dest_image'][$key]) ? $request['dest_image'][$key] :  uploadImage($request['dest_image'][$key],'pageImages'),
                    'dest_alt_tag' => $request['dest_alt_tag'][$key]
                ];
            }
    
            $package->location_images = json_encode($combinedData);
        }
        else
        {
            $package->location_images = '[]';

        }
        $package->about_location=$request->about_location;
        $package->inclusive=$request->inclusive;
        $package->is_top_destination=$request->is_top_destination;
        $package->is_best_selling=$request->is_best_selling;
        $package->is_active=1;
        $package->meta_title=$request->meta_title;
        $package->meta_description=$request->meta_description;
        $package->meta_keyword=$request->meta_keyword;
        $package->meta_og=$request->meta_og;
        $package->updated_at=now();
        $package->save();

        PackageFacilities::where('packages_id', $package->id)->delete();

        foreach ($request->input('facilities', []) as $facilities) {
            
            $package_facilities=new PackageFacilities;
            $package_facilities->packages_id=$package->id;
            $package_facilities->facilities_id=$facilities;
            $package_facilities->save();
        }
        DB::commit();
        Session::flash('success', 'Package updated successfully');
        if(Auth::user()->role == 'admin')
        {
            return redirect()->route('admin.manage-package.index');
        }
        elseif (Auth::user()->role == 'content-manager') {
            return redirect()->route('content-manager.manage-package.index');
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
        Packages::where('id', $id)->delete();
        return response()->json(['success' => 'Record deleted successfully!']);
    }

    public function showPackage($destination,$package)
    {
        try {
            $pageData=Packages::with(['destination','package_facilities.facilities_name'])->where('slug',$package)->where('is_active',1)->first();
            $MetaOg = $pageData->meta_og;
            if (!$pageData) {
                // return view('errors.404');
                abort(404);
            }
            return view('guest.page.packages',compact('pageData','MetaOg')); 
        } catch (\Throwable $th) {
                   
            return redirect()->back()->with('error', $th->getMessage());
        }
    }
}