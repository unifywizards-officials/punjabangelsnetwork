<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;
use App\Models\Settings;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function editSetting(Request $request)
    {
        
        $setting=Settings::find(1);
        return view('admin.setting.edit',compact('setting'));
    }

    public function updateSetting(Request $request)
    {

    //    return  $request->all();
        
        $setting=Settings::find(1);
        $setting->user_id=Auth::user()->id;
        if($request->file('website_logo')){
            $file= $request->file('website_logo');
            $filename= uploadImage($file,'website_logo');
            $setting->website_logo= $filename;
            // $setting->website_logo_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $setting->website_logo_alt= $request->website_logo_alt;
        $setting->about_us_detail=$request->about_us_detail;

        if($request['contact_no'])
        {
            $combinedData = [];

            foreach ($request['contact_no'] as $key => $title) {
                $combinedData[] = [
                    'contact_no' => $title,
                ];
            }
    
            $setting->contact_no = json_encode($combinedData);
        }
        else
        {
            $setting->contact_no = '[]';

        }

    
        if($request['location'])
        {
            $combinedData = [];

            foreach ($request['location'] as $key => $title) {
                $combinedData[] = [
                    'location' => $title,
                ];
            }
    
            $setting->location = json_encode($combinedData);
        }
        else
        {
            $setting->location = '[]';

        }
        
        $setting->email=$request->email;
        $setting->contact=$request->contact;
        $setting->facebook_link=$request->facebook_link;
        $setting->x_link=$request->x_link;
        $setting->instagram_link=$request->instagram_link;
        $setting->linkedin_link=$request->linkedin_link;
        $setting->pinterest_link=$request->pinterest_link;
        $setting->header_script=$request->header_script;
        if($request->is_headerChecked == '1')
        {
            $setting->is_header=$request->is_headerChecked;
        }
        elseif($request->is_headerChecked == '0')
        {
            $setting->is_header=0;
        }
        
        $setting->footer_script=$request->footer_script;

        if($request->is_footerChecked == '1')
        {
            $setting->is_footer=$request->is_footerChecked;
        }
        elseif($request->is_footerChecked == '0')
        {
            $setting->is_footer=0;
        }
        $setting->updated_at=now();
        $setting->save();
        return back()->with('success', 'Setting Updated Successfully.');
    }
}