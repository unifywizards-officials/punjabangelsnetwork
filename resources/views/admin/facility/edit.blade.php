@extends('layouts.admin.master')

@section('title','Edit Facility')

@section('page_level_style')

@endsection

@section('content')
@if(Auth::user()->role=='admin')
<?php $route_update='admin.manage-facility.update';?>
<?php $route_index='admin.manage-facility.index';?>
@elseif(Auth::user()->role=='content-manager')
<?php $route_update='content-manager.manage-facility.update';?>
<?php $route_index='content-manager.manage-facility.index';?>
@else
@endif

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Facility</h1>
            </div>
            <div class="col-sm-6">
            </div>
        </div>
    </div>
</div>


<section class="content">
    <div class="container-fluid">
        <div class="col-12">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Facility</h3>
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
                            <div class="form-group">
                                <label>Facility</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Facility"
                                    value="{{$banner->name}}" required>
                            </div>
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

                            <div class="form-group">
                                <label>Is Included</label>
                                <div class="select2-purple">
                                    <select class="form-control" name="is_included" style="width: 100%;">
                                        <option value="1" {{ $banner->is_included == '1' ? 'selected' : '' }}>Yes
                                        </option>
                                        <option value="0" {{ $banner->is_included == '0' ? 'selected' : '' }}>No
                                        </option>
                                    </select>
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

@endsection