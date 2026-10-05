@extends('layouts.admin.master')

@section('title','Create Page')

@section('page_level_style')
<link rel="stylesheet" href="{{asset('assets/css/bootstrap4-toggle.min.css')}}">
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create Page</h1>
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
                    <h3 class="card-title">Create Page</h3>
                </div>

                <div class="card-body">
                <?php $session_type = Session::get('session_type'); ?>
                    <!--------Messages ------------------------------------>
                    @include('layouts.admin.alertmessage')
                    <!------------EndMessages-------------------------------->
                    <!-- <form method="POST" action="{{route('manage-page.store')}}" enctype="multipart/form-data">
                        @csrf -->

                    <div class="col-12" id="page_template">

                        <div class="form-group clearfix">
                            <label>Choose Html Template</label><br>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="page_type" @if ($session_type == '1') checked @endif data-value="home" id="radioSuccess1">
                                <label for="radioSuccess1">
                                    Home
                                </label>
                            </div>
                            <div class="icheck-success d-inline">
                                <input type="radio" name="page_type" @if ($session_type == '2') checked @endif data-value="aboutus" id="radioSuccess2">
                                <label for="radioSuccess2">
                                    Aboutus
                                </label>
                            </div>

                            <div class="icheck-success d-inline">
                                <input type="radio" name="page_type" @if ($session_type == '3') checked @endif data-value="press-release" id="radioSuccess3">
                                <label for="radioSuccess3">
                                    Press Release
                                </label>
                            </div>

                            <div class="icheck-success d-inline">
                                <input type="radio" name="page_type" @if ($session_type == '4') checked @endif data-value="blog" id="radioSuccess5">
                                <label for="radioSuccess5">
                                    Blog
                                </label>
                            </div>


                            <div class="icheck-success d-inline">
                                <input type="radio" name="page_type" @if ($session_type == '5') checked @endif data-value="custom" id="radioSuccess4">
                                <label for="radioSuccess4">
                                    Custom Layout
                                </label>
                            </div>



                            <div class="icheck-success d-inline">
                                <input type="radio" name="page_type" @if ($session_type == '6') checked @endif data-value="contact" id="radioSuccess6">
                                <label for="radioSuccess6">
                                    Contact
                                </label>
                            </div>
                        </div>
                    </div>
                    <!------------------------------------Home Form Start------------------------------------------->
                    @include('admin.forms.home.create')
                    <!------------------------------------Home Form End------------------------------------------->

                    <!-- ----------------------------------Aboutus Start------------------------------------------->
                    @include('admin.forms.about-us.create')
                    <!------------------------------------Aboutus End------------------------------------------->

                    <!------------------------------------Press-release Start------------------------------------------->
                    @include('admin.forms.press-release.create')
                    <!------------------------------------Press-release End------------------------------------------->

                    <!------------------------------------Custom Page Start------------------------------------------->
                    @include('admin.forms.custom.create')
                    <!------------------------------------Custom Page End------------------------------------------->

                    <!------------------------------------Blogs Start------------------------------------------->
                    @include('admin.forms.blog.create')
                    <!------------------------------------Blogs End------------------------------------------->

                    <!------------------------------------Contact Start------------------------------------------->
                    @include('admin.forms.contact-us.create')
                    <!------------------------------------Contact End----------------------------------------- -->



                    <!-- <button type="submit" class="btn btn-success btn-user float-right mb-3">Save</button>
                        <a class="btn btn-primary float-right mr-3 mb-3"
                            href="{{ route('manage-page.index') }}">Cancel</a>


                    </form> -->
                </div>

            </div>

        </div>

    </div>
</section>
@endsection

@section('page_level_script')
<script src="{{asset('assets/js/bootstrap4-toggle.min.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
    $(document).ready(function() {
          $('.editorsummernote').summernote();
        });
$(document).ready(function() {
    // Listen to the change event of the radio input field
    $('#homeform, #aboutform, #press-releaseform, #customform, #contactform, #blogform').hide();
    $('input[name="page_type"]').change(function() {
        // Get the selected radio value
        var selectedValue = $(this).data("value");

        // press-releaseform
        // homeform
        // customform
        // contactform
        // blogform
        // aboutform

        // // Perform actions based on the selected value
        if (selectedValue === 'home') {
            console.log(selectedValue)
            $('#homeform').show();
            $('#aboutform, #press-releaseform, #customform, #contactform, #blogform').hide();
        } else if (selectedValue === 'aboutus') {
            $('#aboutform').show();
            $('#homeform, #press-releaseform, #customform, #contactform, #blogform').hide();
            // Code to execute for Option 2
        } else if (selectedValue === 'press-release') {

            $('#press-releaseform').show();
            $('#homeform, #aboutform, #customform, #contactform, #blogform').hide();
            // Code to execute for Option 2
        } else if (selectedValue === 'custom') {

            $('#customform').show();
            $('#homeform, #aboutform, #press-releaseform, #contactform, #blogform').hide();
            // Code to execute for Option 2
        } else if (selectedValue === 'blog') {

            $('#blogform').show();
            $('#homeform, #aboutform, #press-releaseform, #contactform, #customform').hide();
            // Code to execute for Option 2
        } else if (selectedValue === 'contact') {
            $('#contactform').show();
            $('#homeform, #aboutform, #press-releaseform, #customform, #blogform').hide();
            // Code to execute for Option 2
        }
        // // Add more conditions for other options as needed
    });
});


$(document).ready(function() {
    $(".toggleCheckbox").change(function() {
        var ischeckedClass = $(this).prop("checked");
        console.log(ischeckedClass)
        var elemt = $(this).data("value");
        console.log(elemt)
        // console.log(ischeckedClass)
        // console.log(elemt);

        if (ischeckedClass && elemt == 'section1_is_active') {
            // console.log("1");
            // console.log(elemt);
            $("#section1_is_active").val(1);

        } else if (!ischeckedClass && elemt == 'section1_is_active') {
            // console.log(" 2");
            // console.log(elemt);
            $("#section1_is_active").val(0);

        } else if (ischeckedClass && elemt == 'coustomer_feedback_is_active') {
            // console.log(" 3");
            // console.log(elemt);
            $("#coustomer_feedback_is_active").val(1);
        } else if (!ischeckedClass && elemt == 'coustomer_feedback_is_active') {
            // console.log("4");
            // console.log(elemt);
            $("#coustomer_feedback_is_active").val(0);
        } else if (ischeckedClass && elemt == 'section5_is_added_feature_active') {
            // console.log(" 3");
            // console.log(elemt);
            $("#section5_is_added_feature_active").val(1);
        } else if (!ischeckedClass && elemt == 'section5_is_added_feature_active') {
            // console.log("4");
            // console.log(elemt);
            $("#section5_is_added_feature_active").val(0);
        } else if (ischeckedClass && elemt == 'section8_is_key_feature_active') {
            // console.log(" 3");
            // console.log(elemt);
            $("#section8_is_key_feature_active").val(1);
        } else if (!ischeckedClass && elemt == 'section8_is_key_feature_active') {
            // console.log(" 3");
            // console.log(elemt);
            $("#section8_is_key_feature_active").val(0);
        }


    });
});


////////////////////////////////////////////////////////////////////////////////
const fieldsContainer3 = document.getElementById('fields3');
const addButton3 = document.getElementById('add-field3');

let fieldIndex3 = 0;

addButton3.addEventListener('click', () => {
    const fieldHtml = `
            <div class="field">
                        <div class="form-group">
                        <label for="exampleInputFile">Title</label>
                        <input type="text" class="form-control" name="title[]" placeholder="Enter Title" required>

                        </div>
                        <div class="form-group">
                        <label for="exampleInputFile">Description</label>
                            <textarea name="description[]"  class="form-control form-control-user ckeditor"
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
                <div class="form-group">
                    <label for="exampleInputFile">Title</label>
                    <input type="text" class="form-control" name="title1[]" placeholder="Enter Title" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Description</label>
                    <textarea name="description1[]" class="form-control form-control-user"
                        placeholder="Enter Description" required></textarea>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="exampleInputFile">Image</label>
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image1[]" class="custom-file-input" id="exampleInputFile">
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
                            <input type="text" class="form-control" name="image1_alt_tag[]"
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

////////////////////////////////Locations/////////////////////////////////////////////////////
const fieldsContainer4 = document.getElementById('fields4');
const addButton4 = document.getElementById('add-field4');

let fieldIndex4 = 0;

addButton4.addEventListener('click', () => {
    const fieldHtml = `
            <div class="field">
                        <div class="form-group">
                        <span style="color:red;"></span>Location</label>
                                            <textarea name="location[]" class="form-control form-control-user"
                                                placeholder="Enter Location" required></textarea>

                        </div>

                        <div class="form-group">
                            <button type="button" class="remove-field4 btn btn-danger">Remove</button>
                        </div>
                
                
            </div>
        `;
    const field = document.createElement('div');
    field.innerHTML = fieldHtml;
    fieldsContainer4.appendChild(field);

    const removeButton = field.querySelector('.remove-field4');

    removeButton.addEventListener('click', () => {

        fieldsContainer4.removeChild(field);
    });

    fieldIndex3++;
});



// this code is used to remove html added feilds in edit cases that comes from databases
$(document).ready(function() {
    $('.remove-field4').click(function() {
        $(this).closest('.remove-button4').remove();
    });
});



////////////////////////////////Add Stats/////////////////////////////////////////////////////
const fieldsContainer2 = document.getElementById('fields2');
const addButton2 = document.getElementById('add-field2');

let fieldIndex2 = 0;

addButton2.addEventListener('click', () => {
    const fieldHtml = `
    <div class="field">
                        <div class="form-group">
                        <label for="exampleInputFile">Font Awesome Class</label>
                        <input type="text" class="form-control" name="font_awesome[]" placeholder="Enter Font Awesome Class" required>
                        </div>

                        <div class="form-group">
                        <label for="exampleInputFile">Title</label>
                        <input type="text" class="form-control" name="title2[]" placeholder="Enter Title" required>

                        </div>

                        <div class="form-group">
                        <label for="exampleInputFile">Value</label>
                        <input type="text" class="form-control" name="value[]" placeholder="Enter Value" required>

                        </div>

                        <div class="form-group">
                            <button type="button" class="remove-field2 btn btn-danger">Remove</button>
                        </div>
                 
            </div>
        `;
    const field = document.createElement('div');
    field.innerHTML = fieldHtml;
    fieldsContainer2.appendChild(field);

    const removeButton = field.querySelector('.remove-field2');

    removeButton.addEventListener('click', () => {

        fieldsContainer2.removeChild(field);
    });

    fieldIndex3++;
});



// this code is used to remove html added feilds in edit cases that comes from databases
$(document).ready(function() {
    $('.remove-field2').click(function() {
        $(this).closest('.remove-button2').remove();
    });
});

</script>


<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
<script>
ClassicEditor
    .create(document.querySelector('#editor1'), {})
    .catch(error => {
        console.error(error);
    });


ClassicEditor
    .create(document.querySelector('#editor2'), {})
    .catch(error => {
        console.error(error);
    });

ClassicEditor
    .create(document.querySelector('#editor3'), {})
    .catch(error => {
        console.error(error);
    });

    $(document).ready(function() {
    $('.ckeditor').each(function() {
        CKEDITOR.replace($(this)[0]);
    });
});
</script>
@endsection