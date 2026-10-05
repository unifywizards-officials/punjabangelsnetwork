@extends('layouts.admin.master')

@section('title','Create Facility')

@section('page_level_style')

@endsection

@section('content')
@if(Auth::user()->role=='admin')
<?php $route_store='admin.manage-facility.store';?>
<?php $route_index='admin.manage-facility.index';?>
@elseif(Auth::user()->role=='content-manager')
<?php $route_store='content-manager.manage-facility.store';?>
<?php $route_index='content-manager.manage-facility.index';?>
@else
@endif
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create Facility</h1>
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
                    <h3 class="card-title">Create Facility</h3>
                </div>

                <div class="card-body">
                    <!--------Messages ------------------------------------>
                    @include('layouts.admin.alertmessage')
                    <!------------EndMessages-------------------------------->
                    <form method="POST" action="{{route($route_store)}}" enctype="multipart/form-data">
                        @csrf

                        <div class="col-12">

                            <div class="form-group">
                                <label>Facility</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Facility"
                                    value="{{ old('name') }}" required>
                            </div>

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
                            <div class="form-group">
                                <label>Is Included</label>
                                <div class="select2-purple">
                                    <select class="form-control" name="is_included" style="width: 100%;">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
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

<script src="{{asset('plugins/select2/js/select2.full.min.js')}}">
< script >
    $(document).ready(function() {
        $('.select2').select2();
    })
</script>
@endsection