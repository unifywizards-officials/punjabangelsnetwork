@extends('layouts.admin.master')

@section('title', 'Member Create')

@section('page_level_style')
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <!-- Select2 -->
@endsection

@section('content')
    @if (Auth::user()->role == 'admin')
        <?php $route_store = 'admin.manage-turnaroud-specialist.store'; ?>
        <?php $route_index = 'admin.manage-turnaroud-specialist.index'; ?>
    @elseif(Auth::user()->role == 'event-manager')
        <?php $route_store = 'event-manager.manage-turnaroud-specialist.store'; ?>
        <?php $route_index = 'event-manager.manage-turnaroud-specialist.index'; ?>
    @elseif(Auth::user()->role == 'seo-manager')
        <?php $route_store = 'seo-manager.manage-turnaroud-specialist.store'; ?>
        <?php $route_index = 'seo-manager.manage-turnaroud-specialist.index'; ?>
    @else
    @endif
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Create Member</h1>
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
                        <h3 class="card-title">Create Member</h3>
                    </div>

                    <div class="card-body">
                        <!--------Messages ------------------------------------>
                        @include('layouts.admin.alertmessage')
                        <!------------EndMessages-------------------------------->

                        <form method="POST" action="{{ route($route_store) }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name"
                                            placeholder="Enter Member Name" value="{{ old('name') }}">
                                    </div>
                                </div>

                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label>Select Type</label>
                                        <div class="select2-purple">
                                            <select class="select2" name="type" data-placeholder="Select a Category"
                                                data-dropdown-css-class="select2-purple" style="width: 100%;">
                                                {{-- <option value="1">Board of Advisers</option> --}}
                                                <option value="2">Turnaround Specialist</option>
                                                {{-- <option value="3">Investors</option> --}}
                                            </select>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="exampleInputFile">Member Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="image" class="custom-file-input"
                                                    id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div>
                                        </div>
                                        {!! fileinstruction !!}
                                        <br>
                                        <span class="span-bold">file dimentions :(300px width and 276px height)</span>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Member Image Alt Tag</label>
                                        <input type="text" class="form-control" name="image_alt"
                                            placeholder="member Image Alt Tag" value="{{ old('image_alt') }}" required>
                                    </div>
                                </div>
                            </div>






                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Position</label>
                                        <input type="text" class="form-control" name="position" placeholder="Position"
                                            value="{{ old('position') }}" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <label>Linkedin Profile Link(URl)</label>
                                        <input type="text" class="form-control" name="linkedin"
                                            placeholder="Enter Linkedin Profile Link" required value="{{ old('linkedin') }}"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-user float-right mb-3">Save</button>
                            <a class="btn btn-primary float-right mr-3 mb-3" href="{{ route($route_index) }}">Cancel</a>


                        </form>
                    </div>

                </div>

            </div>

        </div>
    </section>
@endsection

@section('page_level_script')

    <script src="{{ asset('assets/js/bootstrap4-toggle.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <!-- Select2 -->
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <!-- Select2 -->
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        })
    </script>

    <script>
        $(document).ready(function() {
            $('.editorsummernote').summernote();
        });
    </script>
@endsection
