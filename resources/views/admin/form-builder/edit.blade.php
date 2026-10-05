@extends('layouts.admin.master')

@section('title','Custom Form Edit')

@section('page_level_style')

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
                <h1 class="m-0">Create Form {{$formBuilder->slug}}</h1>
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
                    <h3 class="card-title">Edit Custom Form</h3>
                </div>

                <div class="card-body">
                    <!--------Messages ------------------------------------>
                    @include('layouts.admin.alertmessage')
                    <!------------EndMessages-------------------------------->
                    <div class="row">

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Form Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter Form Name" value="{{$formBuilder->name}}">  
                                    <div id="name" name="name" class="invalid-feedback"></div>
                            </div>
                            
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Slug(URL EndPoint)</label>
                                <input type="text" class="form-control" id="slug" name="slug"
                                    placeholder="Enter Form Slug" value="{{$formBuilder->slug}}">
                                    <div id="slug" name="slug" class="invalid-feedback"></div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Form Heading</label>
                                <input type="text" class="form-control" name="form_heading"
                                    placeholder="Enter Form Heading" id="form_heading" value="{{$formBuilder->form_heading}}">
                                    <div id="form_heading" name="form_heading" class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="col-sm-3">
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
                        <div class="col-sm-3">
                            <div class="form-group">
                                <img src="{{asset($formBuilder->image)}}" width="200" height="100" alt="Post Image">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Form Description</label>
                                <textarea id="form_description" name="form_description" class="form-control editorsummernote">{{$formBuilder->form_description}}</textarea>
                                <div id="form_description" name="form_description" class="invalid-feedback"></div>
                            </div>
                        </div>
                    </div> 
                    <div id="fb-editor"></div>
                
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
    var id = @json($formBuilder->id);

            @if(Auth::user()->role == 'admin')
                roleBasedEditRoute = '{{ route('admin.custom-formData.edit') }}';
                roleBasedUpdateRoute = '{{ route('admin.custom-formData.update') }}';
                redirectRoute = '{{ route('admin.custom-form.index') }}';
            @elseif(Auth::user()->role == 'event-manager')
                roleBasedEditRoute = '{{ route('event-manager.custom-formData.edit') }}';
                roleBasedUpdateRoute = '{{ route('event-manager.custom-formData.update') }}';
                redirectRoute = '{{ route('event-manager.custom-form.index') }}';
            @endif

            $id = {{$formBuilder->id}};

    var fbEditor = document.getElementById('fb-editor');
        var formBuilder = $(fbEditor).formBuilder({
            onSave: function(evt, formData) {
                saveForm(formData);
            },
        });

        $(function() {
            $.ajax({
                type: 'get',
                // headers: {
                //     'Authorization': 'Bearer ' + localStorage.getItem('token')
                // },
                url: roleBasedEditRoute,
                data: {
                    'id': '{{ $formBuilder->id }}'
                },
                success: function(data) {
                    $("#name").val(data.name);
                    formBuilder.actions.setData(data.content);
                }
            });
        });

        function saveForm(form) {

            // @if(Auth::user()->role == 'admin')
            //     redirectRoute = '{{ route('admin.custom-form.index') }}';
            // @elseif(Auth::user()->role == 'event-manager')
            //     redirectRoute = '{{ route('event-manager.custom-form.index') }}';
            // @endif
            // var id = {{$formBuilder->id}};

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
            formData.append('id', {{ $formBuilder->id }});
            formData.append('_token', _token);
            // Append image file
            var imageFile = $('#image')[0].files[0];
            formData.append('image', imageFile);

            $.ajax({
                type: 'post',
                // headers: {
                //     'Authorization': 'Bearer ' + localStorage.getItem('token')
                // },
                url: roleBasedUpdateRoute,
                // data: {
                //     'form': form,
                //     'name': $("#name").val(),
                //     'id': '{{ $formBuilder->id }}',
                //     "_token": "{{ csrf_token() }}",
                // },
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
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
                }
            });
        }
</script>
@endsection