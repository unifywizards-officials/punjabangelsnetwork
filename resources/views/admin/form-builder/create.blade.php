@extends('layouts.admin.master')

@section('title','Custom Form Create')

@section('page_level_style')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
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
                <h1 class="m-0">Create Form</h1>
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
                    <h3 class="card-title">Create Form</h3>
                </div>

                <div class="card-body">
                    <!--------Messages ------------------------------------>
                    @include('layouts.admin.alertmessage')
                    <!------------EndMessages-------------------------------->
                    <div id="formSubmit">
                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Form Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter Form Name">  
                                    <div id="name" name="name" class="invalid-feedback"></div>
                            </div>
                            
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Slug(URL EndPoint)</label>
                                <input type="text" class="form-control" id="slug" name="slug"
                                    placeholder="Enter Form Slug">
                                    <div id="slug" name="slug" class="invalid-feedback"></div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Form Heading</label>
                                <input type="text" class="form-control" name="form_heading"
                                    placeholder="Enter Form Heading" id="form_heading">
                                    <div id="form_heading" name="form_heading" class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="exampleInputFile">Image</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input"
                                            id="image" required>
                                            <div id="image" name="image" class="invalid-feedback"></div>
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    
                                </div>
                                {!! fileinstruction !!}
                                <br>
                                <span class="span-bold">file dimentions :(1536px width and 1536px height)</span>
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Form Description</label>
                                <textarea id="form_description" name="form_description" class="form-control editorsummernote"></textarea>
                                <div id="form_description" name="form_description" class="invalid-feedback"></div>
                            </div>
                        </div>
                    </div>   
                    <div id="fb-editor"></div>
                    </div>
                
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script src="{{asset('assets/form-builder/form-builder.min.js')}}"></script>
<script>
     jQuery(function($) {
            $(document.getElementById('fb-editor')).formBuilder({
                onSave: function(evt, formData) {
                    console.log(formData);
                    saveForm(formData);
                },
            });
        });

        function saveForm(form) {
            @if(Auth::user()->role == 'admin')
                roleBasedRoute = '{{ route('admin.custom-form.store') }}';
                redirectRoute = '{{ route('admin.custom-form.index') }}';
            @elseif(Auth::user()->role == 'event-manager')
                roleBasedRoute = '{{ route('event-manager.custom-form.store') }}';
                redirectRoute = '{{ route('event-manager.custom-form.index') }}';
            @endif

            var formData = new FormData();

            // Append text fields
            var name = $('#name').val();
            var slug = $('#slug').val();
            var form_heading = $("#form_heading").val();
            var form_description = $("#form_description").val();
            var _token="{{ csrf_token() }}";

            formData.append('name', name);
            formData.append('slug', slug);
            formData.append('form_heading', form_heading);
            formData.append('form_description', form_description);
            formData.append('form', form);
            formData.append('_token', _token);
            // Append image file
            var imageFile = $('#image')[0].files[0];
            formData.append('image', imageFile);
            
                            $.ajax({
                            type: 'post',
                            // headers: {
                            //     'Authorization': 'Bearer ' + localStorage.getItem('token')
                            // },
                            url: roleBasedRoute,
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function(data) {
                            // return false;
                                toastr.options = {
                                    "closeButton": true,
                                    "newestOnTop": true,
                                    "positionClass": "toast-top-right",
                                    "timeOut": 2000
                                };
                                toastr.success(data.success);
                                setTimeout(function() {
                                    location.reload(true);
                                }, 1000)
                                window.location.href=redirectRoute;
                            },
                            error: function (data) {
                                        console.log('Error:', data);

                                        if (data.status === 422) {
                                        var errors = data.responseJSON.errors;
                                        // console.log(errors)
                                        // Clear previous error messages
                                        $('.invalid-feedback').text('');
                                        $('.form-control').removeClass('is-invalid');

                                        // Display validation errors
                                        $.each(errors, function(key, value) {
                                        console.log(key,value[0])
                                        $('#' + key).addClass('is-invalid');
						                $('#' + key).siblings('.invalid-feedback').text(value[0])
                                        });
                                        }
                            }

                        });
            }

</script>

@endsection