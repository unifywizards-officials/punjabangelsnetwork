@extends('layouts.admin.master')

@section('title','Section1')

@section('page_level_style')

@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Section1</h1>
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
                    <h3 class="card-title">Edit Section1</h3>
                </div>

                <div class="card-body">
                    <!--------Messages ------------------------------------>
                    @include('layouts.admin.alertmessage')
                    <!------------EndMessages-------------------------------->
                        <form action="{{ route('manage-section1.update',$section->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="col-12">

                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title"
                                    placeholder="Enter Title" value="{{$section->title}}" required>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" id="" rows="3" name="description"
                                        placeholder="Enter Description">{{$section->description}}</textarea>
                            </div>

                            <div class="form-group">
                                <label>Font Awesome Class</label>
                                <input type="text" class="form-control" name="font_awesome_icon_class"
                                    placeholder="Enter Font Awesome Class" value="{{$section->font_awesome_icon_class}}" required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success btn-user float-right mb-3">Updated</button>
                        <a class="btn btn-primary float-right mr-3 mb-3" href="{{ route('manage-section1.index') }}">Cancel</a>


                    </form>
                </div>

            </div>

        </div>

    </div>
</section>
@endsection

@section('page_level_script')
<script>

</script>
@endsection