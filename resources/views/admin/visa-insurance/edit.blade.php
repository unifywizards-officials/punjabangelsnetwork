@extends('layouts.admin.master')

@section('title','Edit Visa & Insurance')

@section('page_level_style')

@endsection

@section('content')
@if(Auth::user()->role=='admin')
<?php $route_update='admin.update.visa_insurance';?>
<?php $route_edit='admin.edit.visa_insurance';?>
@elseif(Auth::user()->role=='content-manager')
<?php $route_update='content-manager.update.visa_insurance';?>
<?php $route_edit='content-manager.edit.visa_insurance';?>
@elseif(Auth::user()->role=='seo-manager')
<?php $route_update='seo-manager.update.visa_insurance';?>
<?php $route_edit='seo-manager.edit.visa_insurance';?>
@else
@endif
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Visa & Insurance</h1>
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
                    <h3 class="card-title">Edit Visa & Insurance</h3>
                </div>

                <div class="card-body">
                    <!--------Messages ------------------------------------>
                    @include('layouts.admin.alertmessage')
                    <!------------EndMessages-------------------------------->
                    <form action="{{ route($route_update) }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="col-12">

                            <div class="form-group">
                                <label>Visa & Insurance Details</label>
                                <textarea class="form-control editorsummernote" id="" rows="3" name="visa_details"
                                    placeholder="Enter Heading">{{$visa_insurance->visa_details}}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Last Updated By</label>
                                <input type="text" class="form-control" name="user_id"
                                    placeholder="Last Updated By" value="{{$visa_insurance->user->name}}" readonly>
                            </div>

                            <div class="form-group">
                                <label>Last Updated At</label>
                                <input type="text" class="form-control" name="user_id"
                                    placeholder="Last Updated By" value="{{ \Carbon\Carbon::parse($visa_insurance->updated_at)->diffForHumans() }}" readonly>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success btn-user float-right mb-3">Update</button>
                        <a class="btn btn-primary float-right mr-3 mb-3"
                            href="{{ route($route_edit) }}">Cancel</a>


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