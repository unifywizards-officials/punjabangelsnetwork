@extends('layouts.admin.master')

@section('title','Edit Setting')

@section('page_level_style')
<link rel="stylesheet" href="{{asset('assets/css/bootstrap4-toggle.min.css')}}">
@endsection

@section('content')
@if(Auth::user()->role=='admin')
<?php $route_update='admin.update.setting';?>
<?php $route_edit='admin.edit.setting';?>
@elseif(Auth::user()->role=='content-manager')
<?php $route_update='content-manager.update.setting';?>
<?php $route_edit='content-manager.edit.setting';?>
@elseif(Auth::user()->role=='seo-manager')
<?php $route_update='seo-manager.update.setting';?>
<?php $route_edit='seo-manager.edit.setting';?>
@else
@endif
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Setting</h1>
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
                    <h3 class="card-title">Edit Setting</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route($route_update) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="is_headerChecked" name="is_headerChecked" value="">
                        <input type="hidden" id="is_footerChecked" name="is_footerChecked" value="">
                        <div class="col-12">
                            <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
                                <h5 class=" font-weight-bold text-primary bordercss">1. Website Logo</h5>

                            </div>

                            @if($setting->website_logo)
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Website Logo</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="website_logo" class="custom-file-input"
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

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <img src="{{asset($setting->website_logo)}}" width="150" height="100"
                                            alt="{{$setting->website_logo_alt}}">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Website Logo Alt Tag</label>
                                        <input type="text" class="form-control" name="website_logo_alt"
                                            placeholder="Enter Website Logo Alt Tag"
                                            value="{{$setting->website_logo_alt}}" required>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="form-group">
                                <label for="exampleInputFile">Website Logo</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="website_logo" class="custom-file-input"
                                            id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                </div>
                                {!! fileinstruction !!}
                            </div>
                            @endif


                            <!-- <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
                                <h5 class=" font-weight-bold text-primary bordercss">2. About Us Details</h5>

                            </div>

                            <div class="form-group">
                                <label>AboutUs Details</label>
                                <textarea class="form-control" id="" rows="3" name="about_us_detail"
                                    placeholder="Enter AboutUs Details">{{$setting->about_us_detail}}</textarea>
                            </div> -->

                            <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
                                <h5 class=" font-weight-bold text-primary bordercss">2. Contact Details</h5>

                            </div>

                            <div class="form-group">
                                <label>Location</label>
                            </div>
                            <div class="form-group" id="fields3">
                                <?php 
                                        $location_content = json_decode($setting->location, true); // Unserialize the data		
                                        ?>

                                @foreach($location_content as $location_content)
                                <div class="remove-button3">
                                    <div class="field">
                                        <div class="form-group">
                                            <span style="color:red;"></span>Location</label>
                                            <textarea name="location[]" class="form-control form-control-user"
                                                placeholder="Enter Location">{{$location_content['location']}}</textarea>

                                        </div>

                                        <div class="form-group">
                                            <button type="button" class="remove-field3 btn btn-danger">Remove</button>
                                        </div>

                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <div class="form-group">
                                <button type="button" class="btn btn-success" id="add-field3">Add Location</button>
                            </div>



                            <div class="form-group">
                                <label>Contact</label>
                            </div>
                            <div class="form-group" id="fields1">
                                <?php 
                                        $content_content = json_decode($setting->contact_no, true); // Unserialize the data		
                                        ?>

                                @foreach($content_content as $content_content)
                                <div class="remove-button1">
                                    <div class="field">
                                        <div class="form-group">
                                            <span style="color:red;"></span>Location</label>
                                            <input type="text" class="form-control" name="contact_no[]"
                                                value="{{$content_content['contact_no']}}" placeholder="Enter Contact"
                                                required>

                                        </div>

                                        <div class="form-group">
                                            <button type="button" class="remove-field3 btn btn-danger">Remove</button>
                                        </div>

                                    </div>
                                </div>
                                @endforeach
                            </div>

                            <div class="form-group">
                                <button type="button" class="btn btn-success" id="add-field1">Add Contact</button>
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Enter Email"
                                    value="{{$setting->email}}" required>
                            </div>

                            <div class="form-group">
                                <label>Contact Number</label>
                                <input type="text" class="form-control" name="contact" placeholder="Enter Contact"
                                    value="{{$setting->contact}}" required>
                            </div>

                            <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
                                <h5 class=" font-weight-bold text-primary bordercss">4. Social Media Connections</h5>

                            </div>

                            <div class="form-group">
                                <label>Facebook Link</label>
                                <input type="text" class="form-control" name="facebook_link"
                                    placeholder="Enter Facebook Link" value="{{$setting->facebook_link}}" required>
                            </div>

                            <div class="form-group">
                                <label>X Link</label>
                                <input type="text" class="form-control" name="x_link" placeholder="Enter X Link"
                                    value="{{$setting->x_link}}" required>
                            </div>

                            <div class="form-group">
                                <label>Instagram Link</label>
                                <input type="text" class="form-control" name="instagram_link"
                                    placeholder="Enter Instagram Link" value="{{$setting->instagram_link}}" required>
                            </div>

                            <div class="form-group">
                                <label>Linkedin Link</label>
                                <input type="text" class="form-control" name="linkedin_link"
                                    placeholder="Enter Linkedin Link" value="{{$setting->linkedin_link}}" required>
                            </div>

                            <div class="form-group">
                                <label>Pinterest Link</label>
                                <input type="text" class="form-control" name="pinterest_link"
                                    placeholder="Enter Pinterest Link" value="{{$setting->pinterest_link}}" required>
                            </div>

                            <div class="col-sm-12 mb-3 mt-3 mb-sm-0">
                                <h5 class=" font-weight-bold text-primary bordercss">5. Custom Scripts</h5>

                            </div>

                            <div class="form-group">
                                <label>Header Script</label>
                                <textarea class="form-control" id="" rows="5" name="header_script"
                                    placeholder="Enter Header Script">{{$setting->header_script}}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Header Status</label>
                                @if($setting->is_header == 1)

                                <input type="checkbox" checked name="is_header" class="toggleCheckbox"
                                    data-value="header" data-toggle="toggle" data-onstyle="success"
                                    data-offstyle="danger">

                                @else

                                <input type="checkbox" name="is_header" class="toggleCheckbox" data-value="header"
                                    data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Footer Script</label>
                                <textarea class="form-control" id="" rows="5" name="footer_script"
                                    placeholder="Enter Footer Script">{{$setting->footer_script}}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Footer Status</label>
                                @if($setting->is_footer == 1)

                                <input type="checkbox" checked name="is_footer" class="toggleCheckbox"
                                    data-value="footer" data-toggle="toggle" data-onstyle="success"
                                    data-offstyle="danger">

                                @else

                                <input type="checkbox" name="is_footer" class="toggleCheckbox" data-value="footer"
                                    data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Last Updated By</label>
                                <input type="text" class="form-control" name="user_id"
                                    placeholder="Last Updated By" value="{{$setting->user->name}}" readonly>
                            </div>
                            <div class="form-group">
                                <label>Last Updated At</label>
                                <input type="text" class="form-control" name="user_id"
                                    placeholder="Last Updated By" value="{{ \Carbon\Carbon::parse($setting->updated_at)->diffForHumans() }}" readonly>
                            </div>
                        </div>



                        <button type="submit" class="btn btn-success btn-user float-right mb-3">Update</button>
                        <a class="btn btn-primary float-right mr-3 mb-3" href="{{ route($route_edit) }}">Cancel</a>


                    </form>
                </div>

            </div>

        </div>

    </div>
</section>
@endsection

@section('page_level_script')
<script src="{{asset('assets/js/bootstrap4-toggle.min.js')}}"></script>
<script>
$(document).ready(function() {
    $(".toggleCheckbox").change(function() {
        var ischeckedClass = $(this).prop("checked");
        // console.log(ischeckedClass)
        var elemt = $(this).data("value");
        // console.log(ischeckedClass)
        // console.log(elemt);

        if (ischeckedClass && elemt == 'header') {
            // console.log("1");
            // console.log(elemt);
            $("#is_headerChecked").val(1);

        } else if (!ischeckedClass && elemt == 'header') {
            // console.log(" 2");
            // console.log(elemt);
            $("#is_headerChecked").val(0);

        } else if (ischeckedClass && elemt == 'footer') {
            console.log(" 3");
            // console.log(elemt);
            $("#is_footerChecked").val(1);
        } else if (!ischeckedClass && elemt == 'footer') {
            // console.log("4");
            // console.log(elemt);
            $("#is_footerChecked").val(0);
        }


    });
});

/////////////////////////////////////////////////////////////////////////////////////////////////////////////

const fieldsContainer3 = document.getElementById('fields3');
const addButton3 = document.getElementById('add-field3');

let fieldIndex3 = 0;

addButton3.addEventListener('click', () => {
    const fieldHtml = `
            <div class="field">
                        <div class="form-group">
                        <span style="color:red;"></span>Location</label>
                                            <textarea name="location[]" class="form-control form-control-user"
                                                placeholder="Enter Location" required></textarea>

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


/////////////////////////////////////////////////////////////////////////////////////////////////////////////

const fieldsContainer1 = document.getElementById('fields1');
const addButton1 = document.getElementById('add-field1');

let fieldIndex1 = 0;

addButton1.addEventListener('click', () => {
    const fieldHtml = `
            <div class="field">
                <div class="form-group">
                    <span style="color:red;"></span>Contact</label>
                    <input type="text" class="form-control" name="contact_no[]" placeholder="Enter Contact" required>
                        
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

    fieldIndex1++;
});



// this code is used to remove html added feilds in edit cases that comes from databases
$(document).ready(function() {
    $('.remove-field1').click(function() {
        $(this).closest('.remove-button1').remove();
    });
});
</script>
@endsection