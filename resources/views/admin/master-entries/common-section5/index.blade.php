@extends('layouts.admin.master')

@section('title','Key Feature Listing')

@section('page_level_style')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Key Feature Listing</h1>
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
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header align-right">
                        <a href="{{route('manage-key-feature.create')}}"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-end"><i
                                class="fas fa-arrow-left fa-sm text-white-50"></i> Add Key Feature</a>
                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Images</th>
                                    <th>Last Updated At</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($home as $data)
                                <tr>
                                    <td>{{$data->title }}</td>
                                    <td>
                                      @if($data->image)
                                        <img src="{{asset($data->image)}}" style="height: 50px; width: 50px;" >
                                        @else
                                        <img src="{{placeHolderBlogImage}}" style="height: 50px; width: 50px;" >
                                        @endif
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($data->updated_at)->diffForHumans() }}</td>
                                    <td>{{ Date_Format($data->created_at,'d-M-Y')  }}</td>
                                    <td>
                                        <a href="{{ route('manage-key-feature.edit', [$data->id]) }}" class="btn btn-primary m-2">
                                            <i class="fa fa-pen"></i>
                                        </a>

                                        

                                        @if($data->is_active == '1')
                                        <a href="javascript:;" data-id="{{ $data->id }}"  data-status="0" title="deactive" data-heading="You want to deactivate category" data-buttonstatus="Yes! Change it" class="btn btn-success m-2 deleteRecord">
                                            <i class="fa fa-check"></i>
                                        </a>
                                        @else
                                        <a href="javascript:;" data-id="{{ $data->id }}" data-status="1" title="active" data-heading="You want to activate category" data-buttonstatus="Yes! Change it" class="btn btn-danger m-2 deleteRecord">
                                            <i class="fa fa-ban"></i>
                                        </a>
                                        @endif
                                        <a href="{{ route('manage-key-feature.edit', [$data->id]) }}" class="btn btn-danger m-2">
                                            <i class="fa fa-trash" title="delete"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
@endsection

@section('page_level_script')

<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>
$(document).ready(function() {
    $(document).ready(function() {
        $('#example2').DataTable();
    });
});
</script>
@endsection