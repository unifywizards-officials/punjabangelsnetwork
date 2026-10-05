@extends('layouts.admin.master')

@section('title','Blog Create')

@section('page_level_style')
<!-- Select2 -->
<link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<!-- Select2 -->
@endsection

@section('content')
@if(Auth::user()->role=='admin')
<?php $route_store='admin.manage-blog.store';?>
<?php $route_index='admin.manage-blog.index';?>
@elseif(Auth::user()->role=='event-manager')
<?php $route_store='event-manager.manage-blog.store';?>
<?php $route_index='event-manager.manage-blog.index';?>
@elseif(Auth::user()->role=='seo-manager')
<?php $route_store='seo-manager.manage-blog.store';?>
<?php $route_index='seo-manager.manage-blog.index';?>
@else
@endif
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create Blog</h1>
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
                    <h3 class="card-title">Create Blog</h3>
                </div>

                <div class="card-body">
                    <!--------Messages ------------------------------------>
                    @include('layouts.admin.alertmessage')
                    <!------------EndMessages-------------------------------->

                    <form method="POST" action="{{route($route_store)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="heading"
                                        placeholder="Enter Blog Title" value="{{ old('heading') }}">
                                </div>
                            </div>

                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Slug(URL EndPoint)</label>
                                    <input type="text" class="form-control" name="slug"
                                        placeholder="Enter Blog Slug" value="{{ old('slug') }}">
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Select Category</label>
                                    <div class="select2-purple">
                                        <select class="select2" multiple="multiple" name="blog_category[]"
                                            data-placeholder="Select a Category"
                                            data-dropdown-css-class="select2-purple" style="width: 100%;">
                                            @foreach($category as $data)
                                            <option value="{{$data->id}}">{{$data->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="exampleInputFile">Blog Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input"
                                                id="exampleInputFile" required>
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                    {!! fileinstruction !!}
                                    <br>
                                    <span class="span-bold">file dimentions :(370px width and 288px height)</span>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Blog Image Alt Tag</label>
                                    <input type="text" class="form-control" name="image_alt"
                                        placeholder="Blog Image Alt Tag" value="{{ old('image_alt') }}" required>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Publish Date</label>
                                    <input type="date" class="form-control" name="publish_date"
                                        placeholder="Pick Publish Date" value="{{ old('publish_date') }}" required>
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Short Description</label>
                                    <textarea class="form-control" id="" rows="3" name="short_description"
                                        placeholder="Enter Short Description"
                                        required>{{ old('short_description') }}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Long Description</label>
                                    <textarea class="form-control editorsummernote" id="" rows="3"
                                        name="long_description"
                                        placeholder="Enter Long Description">{{ old('long_description') }}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <h3 for="customRange3">Seo Content <i class="nav-icon fas fa-search"></i></h3>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Meta Title</label>
                                    <input type="text" class="form-control" name="meta_title"
                                        placeholder="Enter Meta Title" value="{{ old('meta_title') }}" required>
                                </div>
                            </div>

                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Meta Keyword</label>
                                    <input type="text" class="form-control" name="meta_keyword"
                                        placeholder="Enter Meta Keyword" required value="{{ old('meta_keyword') }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <textarea class="form-control" id="" rows="3" name="meta_description"
                                        placeholder="Enter Meta Description">{{ old('meta_description') }}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Meta Open Graph</label>
                                    <textarea class="form-control" id="" rows="8" name="meta_og"
                                        placeholder="Enter Meta Open Graph">{{ old('meta_og') }}</textarea>
                                </div>
                            </div>

                        </div>


                        <button type="submit" class="btn btn-success btn-user float-right mb-3">Save</button>
                        <a class="btn btn-primary float-right mr-3 mb-3"
                            href="{{ route($route_index) }}">Cancel</a>


                    </form>
                </div>

            </div>

        </div>

    </div>
</section>
@endsection

@section('page_level_script')

<script src="{{asset('assets/js/bootstrap4-toggle.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<!-- Select2 -->
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Select2 -->
<script>
$(document).ready(function() {
    $('.select2').select2();
})
</script>

<script>
$(document).ready(function() {
    $('.editorsummernote').summernote();
});
</script>
@endsection