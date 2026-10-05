<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StaticPageSeoManage;
use Auth;
class StaticPageSeoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function editStaticPageSeo(Request $request)
    {
         $seoManage=StaticPageSeoManage::find(1);
         return view('admin.staticPageSeo.edit',compact('seoManage'));
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
    public function updateStaticPageSeo(Request $request)
    {
        // return $request->all();
        $setting=StaticPageSeoManage::find(1);
        $setting->user_id=Auth::user()->id;
        $setting->home_meta=$request->home_meta;
        $setting->home_keyword=$request->home_keyword;
        $setting->home_description=$request->home_description;
        $setting->home_meta_og=$request->home_meta_og;
        $setting->visa_meta=$request->visa_meta;
        $setting->visa_keyword=$request->visa_keyword;
        $setting->visa_description=$request->visa_description;
        $setting->visa_meta_og=$request->visa_meta_og;
        $setting->blog_meta=$request->blog_meta;
        $setting->blog_keyword=$request->blog_keyword;
        $setting->blog_description=$request->blog_description;
        $setting->blog_meta_og=$request->blog_meta_og;
        $setting->contactus_meta=$request->contactus_meta;
        $setting->contactus_keyword=$request->contactus_keyword;
        $setting->contactus_description=$request->contactus_description;
        $setting->contactus_meta_og=$request->contactus_meta_og;
        $setting->aboutus_meta=$request->aboutus_meta;
        $setting->aboutus_keyword=$request->aboutus_keyword;
        $setting->aboutus_description=$request->aboutus_description;
        $setting->aboutus_meta_og=$request->aboutus_meta_og;
        $setting->privacy_meta=$request->privacy_meta;
        $setting->privacy_keyword=$request->privacy_keyword;
        $setting->privacy_description=$request->privacy_description;
        $setting->privacy_meta_og=$request->privacy_meta_og;
        $setting->get_quote_meta=$request->get_quote_meta;
        $setting->get_quote_keyword=$request->get_quote_keyword;
        $setting->get_quote_description=$request->get_quote_description;
        $setting->get_quote_meta_og=$request->get_quote_meta_og;
        $setting->updated_at=now();
        $setting->save();
        return back()->with('success', 'Seo Updated Successfully.');

        if(Auth::user()->role == 'admin')
        {
            return redirect()->route('admin.manage-package.index');
        }
        elseif (Auth::user()->role == 'seo-manager') {
            return redirect()->route('seo-manager.manage-package.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
