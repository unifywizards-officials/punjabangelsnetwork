@extends('layouts.admin.master')

@section('title','Custom Form Create')

@section('page_level_style')
<!-- Select2 -->
<link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<!-- Select2 -->
@endsection

@section('content')
@if(Auth::user()->role=='admin')
<?php $route_store='admin.custom-form.store';?>
<?php $route_index='admin.custom-form.index';?>
@elseif(Auth::user()->role=='event-manager')
<?php $route_store='event-manager.custom-form.store';?>
<?php $route_index='event-manager.custom-form.index';?>
@elseif(Auth::user()->role=='seo-manager')
<?php $route_store='seo-manager.custom-form.store';?>
<?php $route_index='seo-manager.custom-form.index';?>
@else
@endif
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">View Form</h1>
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
                    <h3 class="card-title">View Form</h3>
                </div>

                <div class="card-body">
                    <!--------Messages ------------------------------------>
                    <form method="POST" action="{{ URL('save-form-transaction') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="number" id="form_id" name="form_id" hidden />
                        <div id="fb-reader"></div>
                        <input type="submit" value="Save" class="btn btn-success" />
                    </form>
                
                </div>

            </div>

        </div>

    </div>
</section>
@endsection

@section('page_level_script')



<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<!-- Select2 -->
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Select2 -->
<script>
$(document).ready(function() {
    $('.select2').select2();
})
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script src="{{asset('assets/form-builder/form-render.min.js')}}"></script>

<script>
     $(function() {
            $.ajax({
                type: 'get',
                // headers: {
                //     'Authorization': 'Bearer ' + localStorage.getItem('token')
                // },
                url: '{{ URL('get-form-builder') }}',
                data: {
                    'id': {{$formBuilder->id}}
                },
                success: function(data) {
                    $("#form_id").val(data.id);
                    $('#fb-reader').formRender({
                        formData: data.content
                    });
                }
            });
        });

</script>
@endsection