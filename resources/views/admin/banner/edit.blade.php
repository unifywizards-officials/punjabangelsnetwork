@extends('layouts.admin.master')

@section('title','Edit Home Banner')

@section('page_level_style')

@endsection

@section('content')
@if(Auth::user()->role=='admin')
<?php $route_update='admin.manage-banner.update';?>
<?php $route_index='admin.manage-banner.index';?>
@elseif(Auth::user()->role=='event-manager')
<?php $route_update='event-manager.manage-banner.update';?>
<?php $route_index='event-manager.manage-banner.index';?>
@else
@endif

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Home Banner</h1>
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
                    <h3 class="card-title">Edit Home Banner</h3>
                </div>

                <div class="card-body">
                    <!--------Messages ------------------------------------>
                    @include('layouts.admin.alertmessage')
                    <!------------EndMessages-------------------------------->
                    <form action="{{ route($route_update,$banner->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="col-12">

                            <!-- <div class="form-group">
                                <label>Heading</label>
                                <input type="text" class="form-control" name="heading" placeholder="Enter Heading"
                                    value="{{$banner->heading}}" required>
                            </div>

                            <div class="form-group">
                                <label>Sub Heading</label>
                                <input type="text" class="form-control" name="sub_heading"
                                    placeholder="Enter Sub Heading" value="{{$banner->sub_heading}}" required>
                            </div> -->

                            @if($banner->image)
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
                                        <img src="{{asset($banner->image)}}" width="150" height="100" alt="Post Image">
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

                            <!-- <div class="form-group">
                                <label>Image Alt</label>
                                <input type="text" class="form-control" name="image_alt" placeholder="Enter Image Alt"
                                    value="{{$banner->image_alt}}" required>
                            </div> -->

                            <!-- <div class="form-group">
                                <label>Button Text</label>
                                <input type="text" class="form-control" name="button_text"
                                    placeholder="Enter Button Text" value="{{$banner->button_text}}" required>
                            </div> -->

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
<script>

</script>
@endsection