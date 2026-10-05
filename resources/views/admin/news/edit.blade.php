@extends('layouts.admin.master')

@section('title','News Edit')

@section('page_level_style')
<!-- Select2 -->
<link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<!-- Select2 -->
@endsection

@section('content')

@if(Auth::user()->role=='admin')
<?php $route_update='admin.manage-news.update';?>
<?php $route_index='admin.manage-news.index';?>
@elseif(Auth::user()->role=='event-manager')
<?php $route_update='event-manager.manage-news.update';?>
<?php $route_index='event-manager.manage-news.index';?>
@elseif(Auth::user()->role=='seo-manager')
<?php $route_update='seo-manager.manage-news.update';?>
<?php $route_index='seo-manager.manage-news.index';?>
@else
@endif

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit News</h1>
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
                    <h3 class="card-title">Edit News</h3>
                </div>

                <div class="card-body">
                    <!--------Messages ------------------------------------>
                    @include('layouts.admin.alertmessage')
                    <!------------EndMessages-------------------------------->
                    <form action="{{ route($route_update,$blog->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" class="form-control" name="heading"
                                        placeholder="Enter News Title" value="{{$blog->heading}}">
                                </div>
                            </div>


                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Slug(URL EndPoint)</label>
                                    <input type="text" class="form-control" name="slug" placeholder="Enter News Title"
                                        value="{{$blog->slug}}">
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
                                            <option value="{{$data->id}}"
                                                {{ in_array($data->id, $selectedCategory) ? 'selected' : '' }}>
                                                {{$data->category_name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            
                            </div>


                        </div>

                        

                        @if($blog->image)
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputFile">News Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input"
                                                id="exampleInputFile">
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

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <img src="{{asset($blog->image)}}" width="200" height="100" alt="Post Image">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>News Image Alt Tag</label>
                                    <input type="text" class="form-control" name="image_alt"
                                        placeholder="News Image Alt Tag" value="{{$blog->image_alt}}" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Publish Date</label>
                                    <input type="date" class="form-control" name="publish_date"
                                        placeholder="Pick Publish Date" value="{{$blog->publish_date}}">
                                </div>
                            </div>
                        </div>

                        @else
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="exampleInputFile">News Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input"
                                                id="exampleInputFile">
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
                                    <label>News Image Alt Tag</label>
                                    <input type="text" class="form-control" name="image_alt"
                                        placeholder="News Image Alt Tag" value="{{$blog->image_alt}}" required>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Publish Date</label>
                                    <input type="date" class="form-control" name="publish_date"
                                        placeholder="Pick Publish Date" value="{{$blog->publish_date}}">
                                </div>
                            </div>
                        </div>
                        @endif

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Written By</label>
                                    <input type="text" class="form-control" name="written_by"
                                        placeholder="Written By" value="{{$blog->written_by}}" required>
                                </div>
                            </div>

                        </div>



                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Short Description</label>
                                    <textarea class="form-control" id="" rows="3" name="short_description"
                                        placeholder="Enter Short Description"
                                        required>{{$blog->short_description}}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Long Description</label>
                                    <textarea class="form-control editorsummernote" id="" rows="3"
                                        name="long_description"
                                        placeholder="Enter Long Description">{{$blog->long_description}}</textarea>
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
                                        placeholder="Enter Meta Title" value="{{$blog->meta_title}}" required>
                                </div>
                            </div>

                            <div class="col-sm-6">

                                <div class="form-group">
                                    <label>Meta Keyword</label>
                                    <input type="text" class="form-control" name="meta_keyword"
                                        placeholder="Enter Meta Keyword" required value="{{$blog->meta_keyword}}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Meta Description</label>
                                    <textarea class="form-control" id="" rows="3" name="meta_description"
                                        placeholder="Enter Meta Description">{{$blog->meta_description}}</textarea>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label>Meta Open Graph</label>
                                    <textarea class="form-control" id="" rows="8" name="meta_og"
                                        placeholder="Enter Meta Open Graph">{{$blog->meta_og}}</textarea>
                                </div>
                            </div>

                        </div>


                        <button type="submit" class="btn btn-success btn-user float-right mb-3">Update</button>
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
<!-- Select2 -->
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Select2 -->
<script src="{{asset('assets/js/bootstrap4-toggle.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

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