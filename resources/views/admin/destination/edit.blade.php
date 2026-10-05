@extends('layouts.admin.master')

@section('title','Edit Destination')

@section('page_level_style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection

@section('content')
@if(Auth::user()->role=='admin')
<?php $route_update='admin.manage-destination.update';?>
<?php $route_index='admin.manage-destination.index';?>
@elseif(Auth::user()->role=='content-manager')
<?php $route_update='content-manager.manage-destination.update';?>
<?php $route_index='content-manager.manage-destination.index';?>
@else
@endif
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Destination</h1>
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
                    <h3 class="card-title">Edit Destination</h3>
                    
                </div>

                <div class="card-body">
                    <!--------Messages ------------------------------------>
                    @include('layouts.admin.alertmessage')
                    <!------------EndMessages-------------------------------->
                    <form action="{{ route($route_update,$destination->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="col-12">

                            <div class="form-group">
                                <label>Destination</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Destination"
                                    value="{{$destination->name}}" required>
                            </div>

                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" class="form-control" name="slug" placeholder="Enter Slug"
                                    value="{{$destination->slug}}" required>
                            </div>


                            <div class="form-group">
                                <label>Select Type</label>
                                <div class="select2-purple">
                                    <select class="form-control" name="type" style="width: 100%;">

                                        <option value="1" {{ $destination->type == '1' ? 'selected' : '' }}>Domestic
                                        </option>
                                        <option value="2" {{ $destination->type == '2' ? 'selected' : '' }}>
                                            International</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.form-group -->


                            @if($destination->image)
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input"
                                                    id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                        {!! fileinstruction !!}
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <img src="{{asset($destination->image)}}" width="150" height="100"
                                            alt="Post Image">
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                                {!! fileinstruction !!}
                            </div>
                            @endif

                            <div class="form-group">
                                <label>Image Alt</label>
                                <input type="text" class="form-control" name="image_alt" placeholder="Enter Image Alt"
                                    value="{{$destination->image_alt}}" required>
                            </div>

                            @if($destination->banner_image)

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Banner Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="banner_image" class="custom-file-input"
                                                    id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                        {!! fileinstruction !!}
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <img src="{{asset($destination->banner_image)}}" width="150" height="100"
                                            alt="Post Image">
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Banner Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="banner_image" class="custom-file-input"
                                                    id="exampleInputFile" required>
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                        {!! fileinstruction !!}
                                    </div>
                                </div>
                            @endif


                            <div class="form-group">
                                <label>About Destination</label>
                                <textarea class="form-control editorsummernote" id="" rows="3" name="about_destination"
                                    placeholder="Enter About Destination">{{$destination->about_destination}}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Top Destination</label>
                                <div class="select2-purple">
                                    <select class="form-control" name="is_top_destination" style="width: 100%;">
                                        <option value="1"
                                            {{ $destination->is_top_destination == '1' ? 'selected' : '' }}>Yes</option>
                                        <option value="2"
                                            {{ $destination->is_top_destination == '2' ? 'selected' : '' }}>No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
                                <h5 class=" font-weight-bold text-primary bordercss">Manage Seo</h5>

                            </div>

                            <div class="row">
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label>Meta Title</label>
                                        <input type="text" class="form-control" name="meta_title"
                                            placeholder="Enter Meta Title" value="{{$destination->meta_title}}"
                                            required>
                                    </div>
                                </div>

                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label>Meta Keyword</label>
                                        <input type="text" class="form-control" name="meta_keyword"
                                            placeholder="Enter Meta Keyword" required
                                            value="{{$destination->meta_keyword}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="form-group">
                                        <label>Meta Description</label>
                                        <textarea class="form-control" id="" rows="3" name="meta_description"
                                            placeholder="Enter Meta Description">{{$destination->meta_description}}</textarea>
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="form-group">
                                        <label>Meta Open Graph</label>
                                        <textarea class="form-control" id="" rows="8" name="meta_og"
                                            placeholder="Enter Meta Open Graph">{{$destination->meta_og}}</textarea>
                                    </div>
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
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
$(document).ready(function() {
    $('.editorsummernote').summernote();
});
</script>
@endsection