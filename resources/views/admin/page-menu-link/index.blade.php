@extends('layouts.admin.master')

@section('title','Page Menu Link Listing')

@section('page_level_style')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
<style>
    /* td.rowhide {
    display: none;
}
th.rowhide {
    display: none;
} */
</style>    
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Page Menu Link Listing</h1>
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
                        <a href="{{route('manage-pagemenulink.create')}}"
                            class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-end"><i
                                class="fas fa-arrow-left fa-sm text-white-50"></i> Add Page Menu Link</a>
                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <a href="javascript:;" id="deleteAllSelected" class="btn btn-danger m-2"
                                        data-table="page_menu_links">
                                        <i class="">Delete All</i>
                                    </a>

                                    <th>
                                        <input type="checkbox" id="select-all">Select All
                                    </th>
                                    <th class="rowhide">Order</th>
                                    <th>Page Menu</th>
                                    <th>Page</th>
                                    <th>Created At</th>
                                    <th>Last Updated At</th>

                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pagemenulink as $data)
                                <tr data-id="{{$data->id}}">
                                    <td>
                                        @if($data->page->page_type != '1')
                                        <input type="checkbox" name="ids" class="row-checkbox" value="{{ $data->id }}"
                                            data-id="{{ $data->id }}">
                                        @endif
                                    </td>
                                    <td class="rowhide">{{$data->order_by}}</td>
                                    <td>{{$data->menu->menu}}</td>
                                    <td>{{$data->page->page_name}}</td>
                                    <td>{{ Date_Format($data->created_at,'d-M-Y')  }}</td>
                                    <td>{{ \Carbon\Carbon::parse($data->updated_at)->diffForHumans() }}</td>
                                    <td>
                                        <a href="{{ route('manage-pagemenulink.edit', [$data->id]) }}"
                                            class="btn btn-primary m-2">
                                            <i class="fa fa-pen"></i>
                                        </a>
                                        @if($data->page->page_type != '1')

                                        @if($data->is_active == '1')
                                        <a href="javascript:;" data-id="{{ $data->id }}" data-method="GET"
                                            data-status="0" title="deactive"
                                            data-heading="You want to deactivate category"
                                            data-buttonstatus="Yes! Change it" class="btn btn-success m-2 deleteRecord">
                                            <i class="fa fa-check"></i>
                                        </a>
                                        @else
                                        <a href="javascript:;" data-id="{{ $data->id }}" data-method="GET"
                                            data-status="1" title="active" data-heading="You want to activate category"
                                            data-buttonstatus="Yes! Change it" class="btn btn-danger m-2 deleteRecord">
                                            <i class="fa fa-ban"></i>
                                        </a>
                                        @endif
                                        <a href="javascript:;" data-id="{{ $data->id }}" data-method="DELETE"
                                            data-status="1" title="active" data-heading="You want to delete this record"
                                            data-buttonstatus="Yes! Delete it" class="btn btn-danger m-2 deleteRecord">
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
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
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
    var dataTable = $('#example2').DataTable({
        "order": [[1, "asc"]],
        "columnDefs": [{
                "orderable": false,
                "targets": 0
            } // Disable ordering for the first column (index 0)
        ],
    });



    $('#example2 tbody').sortable({
        helper: 'clone',
        update: function(event, ui) {
            // console.log('sdsd');
            // var data = dataTable.rows().data().toArray();
            // console.log(data)
            // var newOrder = [];
            var token = $("meta[name='csrf-token']").attr("content");
            // var Order = dataTable.column(1).data().toArray();
            var reArrange = [];
            // var pickedItem;
            $('#example2 tbody tr').each(function() {
                var rowData = dataTable.row(this).data();
               reArrange.push(rowData[1]);
            }); 
                console.log(reArrange);

            // Send an AJAX request to update the order in the backend
            $.ajax({
                url: '{{ route("updateOrder") }}', // Your Laravel route to update the order
                type: 'POST',
                data: {
                     "order": reArrange,
                     "_token": token, 
                    },
                    success: function (res){
                    toastr.options = {
                        "closeButton": true,
                        "newestOnTop": true,
                        "positionClass": "toast-top-right",
                        "timeOut":2000
                        };
                       
                    toastr.success(res.success);
                    // toastr.error(res.success);
                    setTimeout(function () {
                    location.reload(true);
                    }, 1000)
                    },
                error: function(xhr, status, error) {
                    // Handle error if needed
                }
            });
        }
    });
});
</script>
@endsection