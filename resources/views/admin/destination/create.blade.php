@extends('layouts.admin.master')

@section('title','Create Destination')

@section('page_level_style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection

@section('content')
@if(Auth::user()->role=='admin')
<?php $route_create='admin.manage-destination.store';?>
<?php $route_index='admin.manage-destination.index';?>
@elseif(Auth::user()->role=='content-manager')
<?php $route_create='content-manager.manage-destination.store';?>
<?php $route_index='content-manager.manage-destination.index';?>
@else
@endif

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create Destination</h1>
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
                    <h3 class="card-title">Create Destination</h3>
                </div>

                <div class="card-body">
                    <!--------Messages ------------------------------------>
                    @include('layouts.admin.alertmessage')
                    <!------------EndMessages-------------------------------->
                    <form method="POST" action="{{route($route_create)}}" enctype="multipart/form-data">
                        @csrf

                        <div class="col-12">

                            <div class="form-group">
                                <label>Destination</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Destination"
                                    value="{{ old('name') }}" required>
                            </div>

                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" class="form-control" name="slug" placeholder="Enter Slug"
                                    value="{{ old('slug') }}" required>
                            </div>


                            <div class="form-group">
                                <label>Select Type</label>
                                <div class="select2-purple">
                                    <select class="form-control" name="type" style="width: 100%;">
                                        <option value="1">Domestic</option>
                                        <option value="2">International</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.form-group -->


                            <div class="form-group">
                                <label for="exampleInputFile">Thumbnail Image</label>
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

                            <div class="form-group">
                                <label>Image Alt</label>
                                <input type="text" class="form-control" name="image_alt" placeholder="Enter Image Alt"
                                    value="{{ old('image_alt') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Banner Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="banner_image" class="custom-file-input" id="exampleInputFile" required>
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                                {!! fileinstruction !!}
                            </div>




                            <div class="form-group">
                                <label>About Destination</label>
                                <textarea class="form-control editorsummernote" id="" rows="3" name="about_destination"
                                    placeholder="Enter About Destination">{{ old('about_destination') }}</textarea>
                            </div>



                            <div class="form-group">
                                <label>Top Destination</label>
                                <div class="select2-purple">
                                    <select class="form-control" name="is_top_destination" style="width: 100%;">
                                        <option value="1">Yes</option>
                                        <option value="2">No</option>
                                    </select>
                                </div>
                            </div>
                            <!-- /.form-group -->

                            <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
                                <h5 class=" font-weight-bold text-primary bordercss">Manage Seo</h5>

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
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
$(document).ready(function() {
    $('.editorsummernote').summernote();
});
</script>
@endsection