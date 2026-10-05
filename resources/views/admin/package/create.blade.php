@extends('layouts.admin.master')

@section('title','Create Package')

@section('page_level_style')
<link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

@endsection

@section('content')
@if(Auth::user()->role=='admin')
<?php $route_store='admin.manage-package.store';?>
<?php $route_index='admin.manage-package.index';?>
@elseif(Auth::user()->role=='content-manager')
<?php $route_store='content-manager.manage-package.store';?>
<?php $route_index='content-manager.manage-package.index';?>
@else
@endif
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create Package</h1>
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
                    <h3 class="card-title">Create Package</h3>
                </div>

                <div class="card-body">
                    <!--------Messages ------------------------------------>
                    @include('layouts.admin.alertmessage')
                    <!------------EndMessages-------------------------------->
                    <form method="POST" action="{{route($route_store)}}" enctype="multipart/form-data">
                        @csrf

                        <div class="col-12">

                            <div class="form-group">
                                <label>Package</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Package Name"
                                    value="{{ old('name') }}" required>
                            </div>

                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" class="form-control" name="slug" placeholder="Enter Slug"
                                    value="{{ old('slug') }}" required>
                            </div>



                            <div class="form-group">
                                <label>Select Destination</label>
                                <div class="select2-purple">
                                    <select class="form-control" name="destination_id" style="width: 100%;">
                                        @foreach($destination as $data)
                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label>Package Duration</label>
                                <input type="text" class="form-control" name="duration"
                                    placeholder="Enter Package Duration" value="{{ old('duration') }}" required>
                            </div>



                            <div class="form-group">
                                <label>Select Facilities</label>
                                <div class="select2-purple">
                                    <select class="select2" multiple="multiple" name="facilities[]"
                                        data-placeholder="Select a Facilities" data-dropdown-css-class="select2-purple"
                                        style="width: 100%;">
                                        @foreach($facilities as $data)
                                        <option value="{{$data->id}}">{{$data->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
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
                                <label>Image Alt</label>
                                <input type="text" class="form-control" name="image_alt" placeholder="Enter Image Alt"
                                    value="{{ old('image_alt') }}" required>
                            </div>

                            <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
                                <h5 class=" font-weight-bold text-primary bordercss">About Itinerary & Destination</h5>

                            </div>


                            <div class="form-group">
                                <label for="exampleInputFile">Add Itinerary</label>
                            </div>


                            <div class="form-group" id="fields3">
                            </div>

                            <div class="form-group">
                                <button type="button" class="btn btn-success" id="add-field3">Add Itinerary</button>
                            </div>

                            <div class="form-group">
                                <label>Package Details</label>
                                <textarea class="form-control editorsummernote" id="" rows="3" name="inclusive"
                                    placeholder="Package Details">{{ old('inclusive') }}</textarea>
                            </div>


                            <div class="form-group">
                                <label>About Destination</label>
                                <textarea class="form-control editorsummernote" id="" rows="3" name="about_location"
                                    placeholder="Enter Description">{{ old('about_location') }}</textarea>
                            </div>




                            <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
                                <h5 class=" font-weight-bold text-primary bordercss">About Images</h5>

                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Add Images</label>
                            </div>

                            <div class="form-group" id="fields1">
                            </div>

                            <div class="form-group">
                                <button type="button" class="btn btn-success" id="add-field1">Add Images</button>
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

                            <div class="form-group">
                                <label>Best Selling Package</label>
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
<script>
////////////////////////////////////////////////////////////////////////////////
const fieldsContainer3 = document.getElementById('fields3');
const addButton3 = document.getElementById('add-field3');

let fieldIndex3 = 0;

addButton3.addEventListener('click', () => {

    $(document).ready(function() {
          $('.editors').summernote();
        });
    const fieldHtml = `
            <div class="field">
                        <div class="form-group">
                        <label for="exampleInputFile">Day Title</label>
                        <input type="text" class="form-control" name="day_title[]" placeholder="Enter Day Title" required>

                        </div>
                        <div class="form-group">
                        <label for="exampleInputFile">Description</label>
                            <textarea name="description[]"  class="form-control form-control-user editors"
                                                placeholder="Enter Description" required></textarea>

                        </div>

                        <div class="form-group">
                            <button type="button" class="remove-field3 btn btn-danger">Remove</button>
                        </div>
                
                
            </div>
        `;
    const field = document.createElement('div');
    field.innerHTML = fieldHtml;
    fieldsContainer3.appendChild(field);

    const removeButton = field.querySelector('.remove-field3');

    removeButton.addEventListener('click', () => {

        fieldsContainer3.removeChild(field);
    });

    fieldIndex3++;
});



// this code is used to remove html added feilds in edit cases that comes from databases
$(document).ready(function() {
    $('.remove-field3').click(function() {
        $(this).closest('.remove-button3').remove();
    });
});

//////////////////////////////////////////////////////////////////////////////////////////////////////////////


const fieldsContainer1 = document.getElementById('fields1');
const addButton1 = document.getElementById('add-field1');

let fieldIndex1 = 0;

addButton1.addEventListener('click', () => {
    const fieldHtml = `
                    <div class="field">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="dest_image[]" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
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
                            <label>Image Alt Tag</label>
                            <input type="text" class="form-control" name="dest_alt_tag[]"
                                placeholder="Enter Image Alt Tag" value="" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <button type="button" class="remove-field1 btn btn-danger">Remove</button>
                </div>
                </div>
        `;
    const field = document.createElement('div');
    field.innerHTML = fieldHtml;
    fieldsContainer1.appendChild(field);

    const removeButton = field.querySelector('.remove-field1');

    removeButton.addEventListener('click', () => {

        fieldsContainer1.removeChild(field);
    });

    fieldIndex3++;
});



// this code is used to remove html added feilds in edit cases that comes from databases
$(document).ready(function() {
    $('.remove-field1').click(function() {
        $(this).closest('.remove-button1').remove();
    });
});
</script>

<!-- Select2 -->
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Select2 -->
<script>
$(document).ready(function() {
    $('.select2').select2();
})
</script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
$(document).ready(function() {
    $('.editorsummernote').summernote();
});
</script>
@endsection