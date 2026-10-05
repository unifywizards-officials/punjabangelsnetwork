<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;
use Auth;
use Illuminate\Support\Facades\Redirect;
use Session;
use Illuminate\Support\Str;
use App\Models\Page;
use App\Models\Settings;
use App\Models\HomePageSection1;
use App\Models\HomePageCoustomerFeedback;
use App\Models\HomePageAddedFeature;
use App\Models\HomePageKeyFeature;
use App\Models\AboutUsPagePopularServices;
use App\Models\Blog;
use App\Models\Category;
use App\Rules\UniquePageCombination;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $page=Page::orderBy('updated_at', 'desc')->get();
        return view('admin.page.index',compact('page'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.page.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $pageexist = Page::where('page_type',$request->page_type)->where('slug',Str::slug($request->page_name,'-'))->count();
            if($pageexist == 1)
            {
                Session::flash('danger', 'Page With This Slug Already Exists');
                Session::flash('session_type', $request->page_type);
                return redirect()->back();
            }

        if($request->page_type == '1')
        {

            $homeexist = Page::where('page_type','1')->count();
            if($homeexist == 1)
            {
                Session::flash('danger', 'Home Page Already Exists');
                Session::flash('session_type', $request->page_type);
                return redirect()->back();
            }

            $request->validate([
                'page_name' => 'required',
                'top_heading' => 'required',
                'top_detail' => 'required',
                'top_label_name' => 'required',
                'top_label_link' => 'required',
                'top_image' => 'image|mimes:jpg,jpeg,png|max:200',
                'section1_is_active' => 'required',
                'section1_heading' => 'required',
                'section2_image' => 'image|mimes:jpg,jpeg,png|max:200',
                'section2_heading' => 'required',
                'section2_detail' => 'required',
                'section3_heading' => 'required',
                'section3_detail' => 'required',
                'section3_label_name' => 'required',
                'section3_label_link' => 'required',
                'section3_image1' => 'image|mimes:jpg,jpeg,png|max:200',
                'section3_image2' => 'image|mimes:jpg,jpeg,png|max:200',
                'section3_image3' => 'image|mimes:jpg,jpeg,png|max:200',
                'coustomer_feedback_is_active' => 'required',
                'section5_heading' => 'required',
                'section5_is_added_feature_active' => 'required',
                'section6_image' => 'image|mimes:jpg,jpeg,png|max:200',
                'section6_heading' => 'required',
                'section6_detail' => 'required',
                'section7_heading' => 'required',
                'section7_detail' => 'required',
                'section7_label_name' => 'required',
                'section7_label_link' => 'required',
                'section7_image1' => 'image|mimes:jpg,jpeg,png|max:200',
                'section7_image2' => 'image|mimes:jpg,jpeg,png|max:200',
                'section7_image3' => 'image|mimes:jpg,jpeg,png|max:200',
                'section8_heading' => 'required',
                'section8_is_key_feature_active' => 'required',
            ]);

            Session::flash('session_type', $request->page_type);
        }
        elseif ($request->page_type == '2') {
            $request->validate([
                'page_name' => 'required',
                'top_heading' => 'required',
                'section1_image' => 'image|mimes:jpg,jpeg,png|max:200',
                'section1_heading' => 'required',
                'section1_detail' => 'required',
                'section1_label_name' => 'required',
                'section1_label_link' => 'required',
                'section1_is_active' => 'required',
                
            ]);
            Session::flash('session_type', $request->page_type);
        }
        elseif ($request->page_type == '3' || $request->page_type == '4') {
            $request->validate([
                'page_name' => 'required',
                'top_heading' => 'required',
            ]);
            Session::flash('session_type', $request->page_type);
        }
        elseif ($request->page_type == '5') {
            $request->validate([
                'page_name' => 'required',
                'top_heading' => 'required',
                'section1_heading' => 'required',
                'section1_label_link' => 'required',
                'section1_label_name' => 'required',
                'section2_image' => 'image|mimes:jpg,jpeg,png|max:200',
                'section2_heading' => 'required',
                'section2_detail' => 'required',
                'section3_heading' => 'required',
                'section3_image' => 'image|mimes:jpg,jpeg,png|max:200',
                'section4_heading' => 'required',
                'section4_detail' => 'required',
                'section6_heading' => 'required',
                'section6_label_link' => 'required',
                'section6_label_name' => 'required',
                'meta_title' => 'required',
                'meta_keyword' => 'required',
                'meta_description' => 'required',
            ]);
            Session::flash('session_type', $request->page_type);
        }
        elseif ($request->page_type == '6') {
            $request->validate([
                'page_name' => 'required',
                'top_heading' => 'required',
            ]);
            Session::flash('session_type', $request->page_type);
        }
        

        DB::beginTransaction();
        try {

        $page = new Page;
        $page->page_name=$request->page_name;
        $page->slug=Str::slug($request->page_name,'-');
        $page->page_type=$request->page_type;
        $page->top_heading=$request->top_heading;
        $page->top_detail=$request->top_detail;
        $page->top_label_name=$request->top_label_name;
        $page->top_label_link=$request->top_label_link;
        if($request->file('top_image')){
            $file= $request->file('top_image');
            $filename= uploadImage($file,'Page_Images');
            $page->top_image= $filename;
            // $page->top_image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $page->top_image_alt=$request->top_image_alt;
        $page->section1_is_active=$request->section1_is_active == 'on' ? '1':'0';
        $page->section1_heading=$request->section1_heading;
        $page->section1_detail=$request->section1_detail;
        if($request->file('section1_image')){
            $file= $request->file('section1_image');
            $filename= uploadImage($file,'Page_Images');
            $page->section1_image= $filename;
            // $page->section1_image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $page->section1_image_alt=$request->section1_image_alt;
        $page->section1_label_name=$request->section1_label_name;
        $page->section1_label_link=$request->section1_label_link;
        $page->section1_is_active=$request->section1_is_active == 'on' ? '1':'0';

        if($request->file('section2_image')){
            $file= $request->file('section2_image');
            $filename= uploadImage($file,'Page_Images');
            $page->section2_image= $filename;
            // $page->section2_image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $page->section2_image_alt=$request->section2_image_alt;
        $page->section2_heading=$request->section2_heading;
        $page->section2_detail=$request->section2_detail;

        $page->section3_heading=$request->section3_heading;
        $page->section3_detail=$request->section3_detail;

        $page->section3_label_name=$request->section3_label_name;
        $page->section3_label_link=$request->section3_label_link;

        
        if($request->file('section3_image')){
            $file= $request->file('section3_image');
            $filename= uploadImage($file,'Page_Images');
            $page->section3_image= $filename;
            // $page->section3_image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $page->section3_image_alt=$request->section3_image_alt;

        if($request['title'])
        {
            $combinedData = [];

            foreach ($request['title'] as $key => $title) {
                $combinedData[] = [
                    'title' => $title,
                    'description' => $request['description'][$key],
                ];
            }
    
            $page->section3_specialization = json_encode($combinedData);
        }
        else
        {
            $page->section3_specialization = '[]';

        }


        if($request->file('section3_image1')){
            $file= $request->file('section3_image1');
            $filename= uploadImage($file,'Page_Images');
            $page->section3_image1= $filename;
            // $page->section3_image1_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $page->section3_image1_alt=$request->section3_image1_alt;
        if($request->file('section3_image2')){
            $file= $request->file('section3_image2');
            $filename= uploadImage($file,'Page_Images');
            $page->section3_image2= $filename;
            // $page->section3_image2_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $page->section3_image2_alt=$request->section3_image2_alt;
        if($request->file('section3_image3')){
            $file= $request->file('section3_image3');
            $filename= uploadImage($file,'Page_Images');
            $page->section3_image3= $filename;
            // $page->section3_image3_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $page->section3_image3_alt=$request->section3_image3_alt;


        if($request['font_awesome'])
        {
            $combinedData = [];

            foreach ($request['font_awesome'] as $key => $title) {
                $combinedData[] = [
                    'font_awesome' => $title,
                    'title2' => $request['title2'][$key],
                    'value' => $request['value'][$key],
                ];
            }
    
            $page->section3_aboutus_stats = json_encode($combinedData);
        }
        else
        {
            $page->section3_aboutus_stats = '[]';

        }
        
        $page->section4_heading=$request->section4_heading;
        $page->section4_detail=$request->section4_detail;

        $page->coustomer_feedback_is_active=$request->coustomer_feedback_is_active == 'on' ? '1':'0';
        $page->section5_heading=$request->section5_heading;
        $page->section5_is_added_feature_active=$request->section5_is_added_feature_active == 'on' ? '1':'0';

        if($request['title1'])
        {
            $combinedData = [];

            foreach ($request['title1'] as $key => $title) {
                $combinedData[] = [
                    'title' => $title,
                    'description' => $request['description1'][$key],
                    'image' => isset($request['image1'][$key]) ? uploadImage($request['image1'][$key],'pageImages'): null,
                    'image1_alt_tag' => $request['image1_alt_tag'][$key]
                ];
            }
    
            $page->section4_services = json_encode($combinedData);
        }
        else
        {
            $page->section4_services = '[]';

        }



        $setting=Settings::find(1);
        if($request['location'])
        {

            
            $combinedData = [];

            foreach ($request['location'] as $key => $title) {
                $combinedData[] = [
                    'location' => $title,
                ];
            }
    
            $setting->location = json_encode($combinedData);
            $setting->save();
        }
        else
        {
            $setting->location = '[]';
            $setting->save();
        }

        
        if($request->file('section6_image')){
            $file= $request->file('section6_image');
            $filename= uploadImage($file,'Page_Images');
            $page->section6_image= $filename;
            // $page->section6_image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $page->section6_image_alt=$request->section6_image_alt;

        $page->section6_heading=$request->section6_heading;
        $page->section6_detail=$request->section6_detail;
        $page->section6_label_link=$request->section6_label_link;
        $page->section6_label_name=$request->section6_label_name;
        $page->section7_heading=$request->section7_heading;
        $page->section7_detail=$request->section7_detail;
        $page->section7_label_name=$request->section7_label_name;
        $page->section7_label_link=$request->section7_label_link;

        if($request->file('section7_image1')){
            $file= $request->file('section7_image1');
            $filename= uploadImage($file,'Page_Images');
            $page->section7_image1= $filename;
            // $page->section7_image1_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $page->section7_image1_alt=$request->section7_image1_alt;
        if($request->file('section7_image2')){
            $file= $request->file('section7_image2');
            $filename= uploadImage($file,'Page_Images');
            $page->section7_image2= $filename;
            // $page->section7_image2_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $page->section7_image2_alt=$request->section7_image2_alt;
        if($request->file('section7_image3')){
            $file= $request->file('section7_image3');
            $filename= uploadImage($file,'Page_Images');
            $page->section7_image3= $filename;
            // $page->section7_image3_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $page->section7_image3_alt=$request->section7_image3_alt;

        $page->section8_heading=$request->section8_heading;
        $page->section8_is_key_feature_active=$request->section8_is_key_feature_active == 'on' ? '1':'0';
        $page->meta_title=$request->meta_title;
        $page->meta_description=$request->meta_description;
        $page->meta_keyword=$request->meta_keyword;
        $page->save();

        DB::commit();
        Session::flash('success', 'Page Created Successfully');
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
        $page=Page::find($id);
        $page->is_active=$request->status;
        $page->save();
        return response()->json(['success' => 'Record status changed successfully!']);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $page = Page::findOrFail($id);
        $setting = Settings::findOrFail(1);
        return view('admin.page.edit',compact('page','setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        // return $request->all();
        // return $request->slug;
        // $page = Page::find($id);

        $pageexist = Page::where('id',$id)->where('page_type',$request->page_type)->where('slug',Str::slug($request->slug,'-'))->count();
            if($pageexist == 1)
            {
                Session::flash('danger', 'Page With This Slug Already Exists');
                Session::flash('session_type', $request->page_type);
                return redirect()->back();
            }

        // if($page->page_type !== $request->page_type && $page->slug !== $request->slug)
        // {
        //     Session::flash('danger', 'Page with this slug already exists');
        //     Session::flash('session_type', $request->page_type);
        //     return redirect()->back();
        // }
        
        if($request->page_type == '1')
        {
            // return $request->all();

            // $homeexist = Page::where('page_type','1')->count();

            // if($homeexist == 1)
            // {
            //     Session::flash('danger', 'Home Page Already Exists');
            //     Session::flash('session_type', $request->page_type);
            //     return redirect()->back();
            // }
            
            $request->validate([
                'page_name' => 'required',
                'top_heading' => 'required',
                'top_detail' => 'required',
                'top_label_name' => 'required',
                'top_label_link' => 'required',
                'top_image' => 'image|mimes:jpg,jpeg,png|max:200',
                // 'section1_is_active' => 'required',
                'section1_heading' => 'required',
                'section2_image' => 'image|mimes:jpg,jpeg,png|max:200',
                'section2_heading' => 'required',
                'section2_detail' => 'required',
                'section3_heading' => 'required',
                'section3_detail' => 'required',
                'section3_label_name' => 'required',
                'section3_label_link' => 'required',
                'section3_image1' => 'image|mimes:jpg,jpeg,png|max:200',
                'section3_image2' => 'image|mimes:jpg,jpeg,png|max:200',
                'section3_image3' => 'image|mimes:jpg,jpeg,png|max:200',
                // 'coustomer_feedback_is_active' => 'required',
                'section5_heading' => 'required',
                // 'section5_is_added_feature_active' => 'required',
                'section6_image' => 'image|mimes:jpg,jpeg,png|max:200',
                'section6_heading' => 'required',
                'section6_detail' => 'required',
                'section7_heading' => 'required',
                'section7_detail' => 'required',
                'section7_label_name' => 'required',
                'section7_label_link' => 'required',
                'section7_image1' => 'image|mimes:jpg,jpeg,png|max:200',
                'section7_image2' => 'image|mimes:jpg,jpeg,png|max:200',
                'section7_image3' => 'image|mimes:jpg,jpeg,png|max:200',
                'section8_heading' => 'required',
                // 'section8_is_key_feature_active' => 'required',
            ]);
            Session::flash('session_type', $request->page_type);
        }
        elseif ($request->page_type == '2') {
            $request->validate([
                'page_name' => 'required',
                'top_heading' => 'required',
                'section1_image' => 'image|mimes:jpg,jpeg,png|max:200',
                'section1_heading' => 'required',
                'section1_detail' => 'required',
                'section1_label_name' => 'required',
                'section1_label_link' => 'required',
                // 'section1_is_active' => 'required',
                
            ]);
            Session::flash('session_type', $request->page_type);
        }
        elseif ($request->page_type == '3' || $request->page_type == '4') {
            $request->validate([
                'page_name' => 'required',
                'top_heading' => 'required',
            ]);
            Session::flash('session_type', $request->page_type);
        }
        elseif ($request->page_type == '5') {
            $request->validate([
                'page_name' => 'required',
                'top_heading' => 'required',
                'section1_heading' => 'required',
                'section1_label_link' => 'required',
                'section1_label_name' => 'required',
                'section2_image' => 'image|mimes:jpg,jpeg,png|max:200',
                'section2_heading' => 'required',
                'section2_detail' => 'required',
                'section3_heading' => 'required',
                'section3_image' => 'image|mimes:jpg,jpeg,png|max:200',
                'section4_heading' => 'required',
                'section4_detail' => 'required',
                'section6_heading' => 'required',
                'section6_label_link' => 'required',
                'section6_label_name' => 'required',
                'meta_title' => 'required',
                'meta_keyword' => 'required',
                'meta_description' => 'required',
            ]);
            Session::flash('session_type', $request->page_type);
        }
        elseif ($request->page_type == '6') {
            $request->validate([
                'page_name' => 'required',
                'top_heading' => 'required',
            ]);
            Session::flash('session_type', $request->page_type);
        }
        

        DB::beginTransaction();
        try {

        $page = Page::find($id);
        $page->page_name=$request->page_name;
        $page->slug=Str::slug($request->slug,'-');
        $page->page_type=$request->page_type;
        $page->top_heading=$request->top_heading;
        $page->top_detail=$request->top_detail;
        $page->top_label_name=$request->top_label_name;
        $page->top_label_link=$request->top_label_link;
        if($request->file('top_image')){
            $file= $request->file('top_image');
            $filename= uploadImage($file,'Page_Images');
            $page->top_image= $filename;
            // $page->top_image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $page->top_image_alt=$request->top_image_alt;
        $page->section1_is_active=$request->section1_is_active == 'on' ? '1':'0';
        $page->section1_heading=$request->section1_heading;
        $page->section1_detail=$request->section1_detail;
        if($request->file('section1_image')){
            $file= $request->file('section1_image');
            $filename= uploadImage($file,'Page_Images');
            $page->section1_image= $filename;
            // $page->section1_image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $page->section1_image_alt=$request->section1_image_alt;
        $page->section1_label_name=$request->section1_label_name;
        $page->section1_label_link=$request->section1_label_link;
        $page->section1_is_active=$request->section1_is_active == 'on' ? '1':'0';

        if($request->file('section2_image')){
            $file= $request->file('section2_image');
            $filename= uploadImage($file,'Page_Images');
            $page->section2_image= $filename;
            // $page->section2_image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $page->section2_image_alt=$request->section2_image_alt;
        $page->section2_heading=$request->section2_heading;
        $page->section2_detail=$request->section2_detail;

        $page->section3_heading=$request->section3_heading;
        $page->section3_detail=$request->section3_detail;

        $page->section3_label_name=$request->section3_label_name;
        $page->section3_label_link=$request->section3_label_link;

        if($request->file('section3_image')){
            $file= $request->file('section3_image');
            $filename= uploadImage($file,'Page_Images');
            $page->section3_image= $filename;
            // $page->section3_image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $page->section3_image_alt=$request->section3_image_alt;

        if($request->file('section3_image1')){
            $file= $request->file('section3_image1');
            $filename= uploadImage($file,'Page_Images');
            $page->section3_image1= $filename;
            // $page->section3_image1_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $page->section3_image1_alt=$request->section3_image1_alt;

        if($request->file('section3_image2')){
            $file= $request->file('section3_image2');
            $filename= uploadImage($file,'Page_Images');
            $page->section3_image2= $filename;
            // $page->section3_image2_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $page->section3_image2_alt=$request->section3_image2_alt;
        if($request->file('section3_image3')){
            $file= $request->file('section3_image3');
            $filename= uploadImage($file,'Page_Images');
            $page->section3_image3= $filename;
            // $page->section3_image3_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            
        }
        $page->section3_image3_alt=$request->section3_image3_alt;


        if($request['title'])
        {
            $combinedData = [];

            foreach ($request['title'] as $key => $title) {
                $combinedData[] = [
                    'title' => $title,
                    'description' => $request['description'][$key],
                ];
            }
    
            $page->section3_specialization = json_encode($combinedData);
        }
        else
        {
            $page->section3_specialization = '[]';

        }


        if($request['font_awesome'])
        {
            $combinedData = [];

            foreach ($request['font_awesome'] as $key => $title) {
                $combinedData[] = [
                    'font_awesome' => $title,
                    'title2' => $request['title2'][$key],
                    'value' => $request['value'][$key],
                ];
            }
    
            $page->section3_aboutus_stats = json_encode($combinedData);
        }
        else
        {
            $page->section3_aboutus_stats = '[]';

        }

        $page->section4_heading=$request->section4_heading;
        $page->section4_detail=$request->section4_detail;

        $page->coustomer_feedback_is_active=$request->coustomer_feedback_is_active == 'on' ? '1':'0';
        $page->section5_heading=$request->section5_heading;
        $page->section5_is_added_feature_active=$request->section5_is_added_feature_active == 'on' ? '1':'0';



        if($request['title1'])
        {
            $combinedData = [];

            foreach ($request['title1'] as $key => $title) {
                $combinedData[] = [
                    'title' => $title,
                    'description' => $request['description1'][$key],
                    'image' =>is_string($request['image1'][$key]) ? $request['image1'][$key] :  uploadImage($request['image1'][$key],'pageImages'),
                    'image1_alt_tag' => $request['image1_alt_tag'][$key]
                ];
            }
    
            $page->section4_services = json_encode($combinedData);
        }
        else
        {
            $page->section4_services = '[]';


        }
        
        $setting=Settings::find(1);
        if($request['location'])
        {

            
            $combinedData = [];

            foreach ($request['location'] as $key => $title) {
                $combinedData[] = [
                    'location' => $title,
                ];
            }
    
            $setting->location = json_encode($combinedData);
            $setting->save();
        }
        else
        {
            $setting->location = '[]';
            $setting->save();
        }

        if($request->file('section6_image')){
            $file= $request->file('section6_image');
            $filename= uploadImage($file,'Page_Images');
            $page->section6_image= $filename;
            // $page->section6_image_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $page->section6_image_alt=$request->section6_image_alt;
        $page->section6_heading=$request->section6_heading;
        $page->section6_detail=$request->section6_detail;
        $page->section6_label_link=$request->section6_label_link;
        $page->section6_label_name=$request->section6_label_name;
        $page->section7_heading=$request->section7_heading;
        $page->section7_detail=$request->section7_detail;
        $page->section7_label_name=$request->section7_label_name;
        $page->section7_label_link=$request->section7_label_link;
        if($request->file('section7_image1')){
            $file= $request->file('section7_image1');
            $filename= uploadImage($file,'Page_Images');
            $page->section7_image1= $filename;
            // $page->section7_image1_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $page->section7_image1_alt=$request->section7_image1_alt;
        if($request->file('section7_image2')){
            $file= $request->file('section7_image2');
            $filename= uploadImage($file,'Page_Images');
            $page->section7_image2= $filename;
            // $page->section7_image2_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $page->section7_image2_alt=$request->section7_image2_alt;
        if($request->file('section7_image3')){
            $file= $request->file('section7_image3');
            $filename= uploadImage($file,'Page_Images');
            $page->section7_image3= $filename;
            // $page->section7_image3_alt= pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        }
        $page->section7_image3_alt=$request->section7_image3_alt;
        $page->section8_heading=$request->section8_heading;
        $page->section8_is_key_feature_active=$request->section8_is_key_feature_active == 'on' ? '1':'0';
        $page->meta_title=$request->meta_title;
        $page->meta_description=$request->meta_description;
        $page->meta_keyword=$request->meta_keyword;
        $page->save();

        DB::commit();
        Session::flash('success', 'Page Created Successfully');
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
        Page::find($id)->delete($id);
        return response()->json(['success' => 'Record deleted successfully!']);
    }

    public function homepage(Request $request)
    {
        $pageData=Page::where('page_type','1')->first();
        $section1=HomePageSection1::where('is_active','1')->get();
        $feedback=HomePageCoustomerFeedback::find(1);
        $added_feature=HomePageAddedFeature::where('is_active','1')->get();
        $key_feature=HomePageKeyFeature::where('is_active','1')->get();
        $key_feature1=HomePageKeyFeature::where('is_active','1')->get();
        return view('guest.page.home',compact('pageData','section1','feedback','added_feature','key_feature','key_feature1'));
    }

    public function pageView(Request $request,string $slug)
    {
        $pageData=Page::where('slug',$slug)->first();
        $section1=HomePageSection1::where('is_active','1')->get();
        $feedback=HomePageCoustomerFeedback::find(1);
        $added_feature=HomePageAddedFeature::where('is_active','1')->get();
        $key_feature=HomePageKeyFeature::where('is_active','1')->get();
        $key_feature1=HomePageKeyFeature::where('is_active','1')->get();
        $popular_service=AboutUsPagePopularServices::where('is_active','1')->get();
        $blog='';
        $setting='';
        
        $category=Category::where('is_active','1')->get();
        if($pageData->page_type == '1')
        {
         $page='guest.page.home';
        }
        elseif ($pageData->page_type == '2') {
            $page='guest.page.about';
        }
        elseif ($pageData->page_type == '3') {

            $blog=Blog::where('type','press-release')->where('is_active','1')->orderBy('publish_date', 'DESC')->get();
            $page='guest.page.press-release';
        }
        elseif ($pageData->page_type == '4') {
            $blog=Blog::where('type','blog')->where('is_active','1')->orderBy('publish_date', 'DESC')->get();
            $page='guest.page.blog';
        }
        elseif ($pageData->page_type == '5') {
            $page='guest.page.custom';
        }
        elseif ($pageData->page_type == '6') {
            $page='guest.page.contact';
            $setting=Settings::find(1);
        }
        return view($page,compact('pageData','section1','feedback','added_feature','key_feature','blog','category','slug','key_feature1','popular_service','setting'));
    }

    

    
}