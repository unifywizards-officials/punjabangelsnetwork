@extends('layouts.admin.master')

@section('title','Edit Static Page Seo')

@section('page_level_style')
<link rel="stylesheet" href="{{asset('assets/css/bootstrap4-toggle.min.css')}}">
@endsection

@section('content')
@if(Auth::user()->role=='admin')
<?php $route_update='admin.update-staticpage_seo';?>
<?php $route_edit='admin.edit-staticpage_seo';?>
@elseif(Auth::user()->role=='seo-manager')
<?php $route_update='seo-manager.update-staticpage_seo';?>
<?php $route_edit='seo-manager.edit-staticpage_seo';?>

@else
@endif
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Static Page Seo</h1>
            </div>
            <div class="col-sm-6">
                <!-- <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol> -->
            </div>
        </div>
    </div>
</div>


<section class="content">
    <div class="container-fluid">
        <div class="col-12">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Static Page Seo</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route($route_update) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="col-12">
                            <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
                                <h5 class=" font-weight-bold text-primary bordercss">1. Home Page Seo</h5>

                            </div>

                            <div class="row">
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Meta Title</label>
                                    <input type="text" class="form-control" name="home_meta"
                                        placeholder="Enter Meta Title" value="{{$seoManage->home_meta}}" required>
                                </div>
                            </div>

                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Meta Keyword</label>
                                    <input type="text" class="form-control" name="home_keyword"
                                        placeholder="Enter Meta Keyword" required value="{{$seoManage->home_keyword}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <textarea class="form-control" id="" rows="3" name="home_description"
                                        placeholder="Enter Meta Description" required>{{$seoManage->home_description}}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Meta Open Graph</label>
                                    <textarea class="form-control" id="" rows="3" name="home_meta_og"
                                        placeholder="Enter Meta Open Graph" required>{{$seoManage->home_meta_og}}</textarea>
                                </div>
                            </div>

                        </div>


                            <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
                                <h5 class=" font-weight-bold text-primary bordercss">2. Contact Details</h5>

                            </div>

                            <div class="row">
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Meta Title</label>
                                    <input type="text" class="form-control" name="contactus_meta"
                                        placeholder="Enter Meta Title" value="{{$seoManage->contactus_meta}}" required>
                                </div>
                            </div>

                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Meta Keyword</label>
                                    <input type="text" class="form-control" name="contactus_keyword"
                                        placeholder="Enter Meta Keyword" required value="{{$seoManage->contactus_keyword}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <textarea class="form-control" id="" rows="3" name="contactus_description"
                                        placeholder="Enter Meta Description">{{$seoManage->contactus_description}}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Meta Open Graph</label>
                                    <textarea class="form-control" id="" rows="3" name="contactus_meta_og"
                                        placeholder="Enter Meta Open Graph" required>{{$seoManage->contactus_meta_og}}</textarea>
                                </div>
                            </div>

                        </div>

                            

                            <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
                                <h5 class=" font-weight-bold text-primary bordercss">3. Visa & Insurance Page Seo</h5>

                            </div>

                            <div class="row">
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Meta Title</label>
                                    <input type="text" class="form-control" name="visa_meta"
                                        placeholder="Enter Meta Title" value="{{$seoManage->visa_meta}}" required>
                                </div>
                            </div>

                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Meta Keyword</label>
                                    <input type="text" class="form-control" name="visa_keyword"
                                        placeholder="Enter Meta Keyword" required value="{{$seoManage->visa_keyword}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <textarea class="form-control" id="" rows="3" name="visa_description"
                                        placeholder="Enter Meta Description">{{$seoManage->visa_description}}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Meta Open Graph</label>
                                    <textarea class="form-control" id="" rows="3" name="visa_meta_og"
                                        placeholder="Enter Meta Open Graph" required>{{$seoManage->visa_meta_og}}</textarea>
                                </div>
                            </div>

                        </div>


                            <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
                                <h5 class=" font-weight-bold text-primary bordercss">4. Blog Page Seo</h5>
                            </div>

                            <div class="row">
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Meta Title</label>
                                    <input type="text" class="form-control" name="blog_meta"
                                        placeholder="Enter Meta Title" value="{{$seoManage->blog_meta}}" required>
                                </div>
                            </div>

                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Meta Keyword</label>
                                    <input type="text" class="form-control" name="blog_keyword"
                                        placeholder="Enter Meta Keyword" required value="{{$seoManage->blog_keyword}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <textarea class="form-control" id="" rows="3" name="blog_description"
                                        placeholder="Enter Meta Description">{{$seoManage->blog_description}}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Meta Open Graph</label>
                                    <textarea class="form-control" id="" rows="3" name="blog_meta_og"
                                        placeholder="Enter Meta Open Graph" required>{{$seoManage->blog_meta_og}}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
                                <h5 class=" font-weight-bold text-primary bordercss">5.Get A Quote Page Seo</h5>

                            </div>

                            <div class="row">
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Meta Title</label>
                                    <input type="text" class="form-control" name="get_quote_meta"
                                        placeholder="Enter Meta Title" value="{{$seoManage->get_quote_meta}}" required>
                                </div>
                            </div>

                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Meta Keyword</label>
                                    <input type="text" class="form-control" name="get_quote_keyword"
                                        placeholder="Enter Meta Keyword" required value="{{$seoManage->get_quote_keyword}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <textarea class="form-control" id="" rows="3" name="get_quote_description"
                                        placeholder="Enter Meta Description">{{$seoManage->get_quote_description}}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Meta Open Graph</label>
                                    <textarea class="form-control" id="" rows="3" name="get_quote_meta_og"
                                        placeholder="Enter Meta Open Graph" required>{{$seoManage->get_quote_meta_og}}</textarea>
                                </div>
                            </div>

                        </div>


                        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
                                <h5 class=" font-weight-bold text-primary bordercss">6. About Us Page Seo</h5>

                            </div>

                            <div class="row">
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Meta Title</label>
                                    <input type="text" class="form-control" name="aboutus_meta"
                                        placeholder="Enter Meta Title" value="{{$seoManage->aboutus_meta}}" required>
                                </div>
                            </div>

                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Meta Keyword</label>
                                    <input type="text" class="form-control" name="aboutus_keyword"
                                        placeholder="Enter Meta Keyword" required value="{{$seoManage->aboutus_keyword}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <textarea class="form-control" id="" rows="3" name="aboutus_description"
                                        placeholder="Enter Meta Description">{{$seoManage->aboutus_description}}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Meta Open Graph</label>
                                    <textarea class="form-control" id="" rows="3" name="aboutus_meta_og"
                                        placeholder="Enter Meta Open Graph" required>{{$seoManage->aboutus_meta_og}}</textarea>
                                </div>
                            </div>

                        </div>


                        <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
                                <h5 class=" font-weight-bold text-primary bordercss">7.Privacy Page Seo</h5>

                            </div>

                            <div class="row">
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Meta Title</label>
                                    <input type="text" class="form-control" name="privacy_meta"
                                        placeholder="Enter Meta Title" value="{{$seoManage->privacy_meta}}" required>
                                </div>
                            </div>

                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Meta Keyword</label>
                                    <input type="text" class="form-control" name="privacy_keyword"
                                        placeholder="Enter Meta Keyword" required value="{{$seoManage->privacy_keyword}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <textarea class="form-control" id="" rows="3" name="privacy_description"
                                        placeholder="Enter Meta Description">{{$seoManage->privacy_description}}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Meta Open Graph</label>
                                    <textarea class="form-control" id="" rows="3" name="privacy_meta_og"
                                        placeholder="Enter Meta Open Graph" required>{{$seoManage->privacy_meta_og}}</textarea>
                                </div>
                            </div>

                        </div>

                            <div class="form-group">
                                <label>Last Updated By</label>
                                <input type="text" class="form-control" name="user_id"
                                    placeholder="Last Updated By" value="{{$seoManage->user->name}}" readonly>
                            </div>

                            <div class="form-group">
                                <label>Last Updated At</label>
                                <input type="text" class="form-control" name="user_id"
                                    placeholder="Last Updated By" value="{{ \Carbon\Carbon::parse($seoManage->updated_at)->diffForHumans() }}" readonly>
                            </div>

                 </div>



                        <button type="submit" class="btn btn-success btn-user float-right mb-3">Update</button>
                        <a class="btn btn-primary float-right mr-3 mb-3" href="{{ route($route_edit) }}">Cancel</a>


                    </form>
                </div>

            </div>

        </div>

    </div>
</section>
@endsection

@section('page_level_script')

@endsection