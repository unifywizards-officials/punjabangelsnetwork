@extends('layouts.admin.master')

@section('title','Add Page')

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
                <h1 class="m-0">Page Listing</h1>
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
                        <a href="{{route('manage-page.create')}}"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-end"><i
                                class="fas fa-arrow-left fa-sm text-white-50"></i> Add Page</a>
                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <a href="javascript:;" id="deleteAllSelected" class="btn btn-danger m-2"
                                        data-table="pages">
                                        <i class="">Delete All</i>
                                    </a>
                               
                                    <th>
                                        <input type="checkbox" id="select-all">Select All
                                    </th>
                                    <th>Page Name</th>
                                    <th>Page Slug</th>
                                    <th>Type</th>
                                    <th>Last Updated At</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($page as $data)
                                <tr>
                                <td>
                                @if($data->page_type != '1')
                                    <input type="checkbox" name="ids" class="row-checkbox" value="{{ $data->id }}"
                                            data-id="{{ $data->id }}">
                                    @endif
                                    </td>
                                    <td>{{$data->page_name }}</td>
                                    <td>{{$data->slug }}</td>
                                    <td>
                                        @if($data->page_type == '1')
                                        Home
                                        @elseif($data->page_type == '2')
                                        AboutUs
                                        @elseif($data->page_type == '3')
                                        Press Release
                                        @elseif($data->page_type == '4')
                                        Blog
                                        @elseif($data->page_type == '5')
                                        Custom
                                        @else
                                        Contact
                                        @endif
                                    </td>
                                
                                    <td>{{ \Carbon\Carbon::parse($data->updated_at)->diffForHumans() }}</td>
                                    <td>{{ Date_Format($data->created_at,'d-M-Y')  }}</td>
                                    <td>
                                        <a href="{{ route('manage-page.edit', [$data->id]) }}" class="btn btn-primary m-2">
                                            <i class="fa fa-pen"></i>
                                        </a>
                                        @if($data->page_type != '1')
                                        
                                
                                            @if($data->is_active == '1')
                                            <a href="javascript:;" data-id="{{ $data->id }}"  data-method="GET" data-status="0" title="deactive" data-heading="You want to deactivate category" data-buttonstatus="Yes! Change it" class="btn btn-success m-2 deleteRecord">
                                                <i class="fa fa-check"></i>
                                            </a>
                                            @else
                                            <a href="javascript:;" data-id="{{ $data->id }}" data-method="GET" data-status="1" title="active" data-heading="You want to activate category" data-buttonstatus="Yes! Change it" class="btn btn-danger m-2 deleteRecord">
                                                <i class="fa fa-ban"></i>
                                            </a>
                                            @endif

                                            <a href="javascript:;" data-id="{{ $data->id }}" data-method="DELETE" data-status="1" title="active" data-heading="You want to delete this record" data-buttonstatus="Yes! Delete it" class="btn btn-danger m-2 deleteRecord">
                                            <i class="fa fa-trash" title="delete"></i>
                                            </a>
                                        @else
                                        @endif
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
    $('#example2').DataTable({
        "columnDefs": [{
                "orderable": false,
                "targets": 0
            } // Disable ordering for the first column (index 0)
        ],
    });
});
</script>
@endsection