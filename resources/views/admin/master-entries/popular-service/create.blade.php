@extends('layouts.admin.master')

@section('title','Popular Service')

@section('page_level_style')

@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create Popular Service</h1>
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
                    <h3 class="card-title">Create Popular Service</h3>
                </div>

                <div class="card-body">
                    <!--------Messages ------------------------------------>
                    @include('layouts.admin.alertmessage')
                    <!------------EndMessages-------------------------------->
                    <form method="POST" action="{{route('manage-popular-service.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="col-12">

                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title"
                                    placeholder="Enter Title" value="{{ old('title') }}" required>
                            </div>
                            
                            <div class="form-group">
                                <label>Font Awesome Class</label>
                                <input type="text" class="form-control" name="font_awesome_icon_class"
                                    placeholder="Enter Font Awesome Class" value="{{ old('font_awesome_icon_class') }}" required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success btn-user float-right mb-3">Save</button>
                        <a class="btn btn-primary float-right mr-3 mb-3" href="{{ route('manage-popular-service.index') }}">Cancel</a>


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