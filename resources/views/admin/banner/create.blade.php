@extends('layouts.admin.master')

@section('title','Home Banner')

@section('page_level_style')

@endsection

@section('content')

@if(Auth::user()->role=='admin')
<?php $route_create='admin.manage-banner.store';?>
<?php $route_index='admin.manage-banner.index';?>
@elseif(Auth::user()->role=='event-manager')
<?php $route_create='event-manager.manage-banner.store';?>
<?php $route_index='event-manager.manage-banner.index';?>
@else
@endif
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create Home Banner</h1>
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
                    <h3 class="card-title">Create Home Banner</h3>
                </div>

                <div class="card-body">
                    <!--------Messages ------------------------------------>
                    @include('layouts.admin.alertmessage')
                    <!------------EndMessages-------------------------------->
                    <form method="POST" action="{{route($route_create)}}" enctype="multipart/form-data">
                        @csrf

                        <div class="col-12">

                            <!-- <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" name="heading" placeholder="Enter Heading"
                                    value="{{ old('heading') }}" required>
                            </div> -->

                            <!-- <div class="form-group">
                                <label>Sub Heading</label>
                                <input type="text" class="form-control" name="sub_heading"
                                    placeholder="Enter Sub Heading" value="{{ old('sub_heading') }}" required>
                            </div> -->



                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile" required>
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                                {!! fileinstruction !!}
                            </div>

                            <!-- <div class="form-group">
                                <label>Image Alt</label>
                                <input type="text" class="form-control" name="image_alt" placeholder="Enter Image Alt"
                                    value="{{ old('image_alt') }}" required>
                            </div> -->

                            <!-- <div class="form-group">
                                <label>Button Text</label>
                                <input type="text" class="form-control" name="button_text"
                                    placeholder="Enter Button Text" value="{{ old('button_text') }}" required>
                            </div> -->

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
<script>

</script>
@endsection