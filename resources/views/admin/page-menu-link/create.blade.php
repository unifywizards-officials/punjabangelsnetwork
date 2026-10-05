@extends('layouts.admin.master')

@section('title','Page Menu Link')

@section('page_level_style')
<!-- Select2 -->
<link rel="stylesheet" href="{{asset('plugins/select2/css/select2.min.css')}}">
<!-- Select2 -->
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Create Page Menu Link</h1>
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
                    <h3 class="card-title">Create Menu</h3>
                </div>

                <div class="card-body">
                    <!--------Messages ------------------------------------>
                    @include('layouts.admin.alertmessage')
                    <!------------EndMessages-------------------------------->
                    <form method="POST" action="{{route('manage-pagemenulink.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="col-12">


                            <div class="form-group">
                                <label>Select Menu</label>
                                <div class="">
                                    <select class="form-control" name="menu_id" data-placeholder="Select a Menu"
                                        data-dropdown-css-class="form-control" style="width: 100%;">
                                        @foreach($menu as $data)
                                        <option value="{{$data->id}}">{{$data->menu}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Select Page</label>
                                <div class="">
                                    <select class="form-control" name="page_id" data-placeholder="Select a Page"
                                        data-dropdown-css-class="select2-purple" style="width: 100%;">
                                        @foreach($page as $page)
                                        <option value="{{$page->id}}">{{$page->page_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>



                        <button type="submit" class="btn btn-success btn-user float-right mb-3">Save</button>
                        <a class="btn btn-primary float-right mr-3 mb-3"
                            href="{{ route('manage-menu.index') }}">Cancel</a>


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
<!-- Select2 -->
<script src="{{asset('plugins/select2/js/select2.full.min.js')}}"></script>
<!-- Select2 -->


@endsection