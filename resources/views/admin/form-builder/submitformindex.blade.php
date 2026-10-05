@extends('layouts.admin.master')

@section('title','Custom Form Listing')

@section('page_level_style')
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('content')

@if(Auth::user()->role=='admin')
<?php $route_create='admin.custom-form.create';?>
<?php $route_edit='admin.custom-form.edit';?>
@elseif(Auth::user()->role=='event-manager')
<?php $route_create='event-custom-form.create';?>
<?php $route_edit='event-custom-form.edit';?>
@elseif(Auth::user()->role=='seo-manager')
<?php $route_create='seo-manager.custom-form.create';?>
<?php $route_edit='seo-manager.custom-form.edit';?>
@else
@endif
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Custom Form Listing</h1>
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
                        
                    </div>

                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>FormName</th>
                                    <th>Last Updated At</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($formData as $data)
                                <tr data-id="{{ $data->id }}">
                                    <td>{{$data->form_name->name}}</td>
                                   
                                    <td>{{ \Carbon\Carbon::parse($data->updated_at)->diffForHumans() }}</td>
                                  
                                    <td>{{ \Carbon\Carbon::parse($data->created_at)->format('d M Y') }}</td>

                                    <td>
                                        <a href="{{ route('admin.data.show', [$data->form_id,$data->id]) }}" target="_blank" class="btn btn-primary m-2" 
                                        title="form saved data">
                                        <i class="fa fa-eye"></i>
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
    var table= $('#example2').DataTable({
        "pageLength": 1000,
        "columnDefs": [{
                "orderable": false,
                "targets": 0
            } // Disable ordering for the first column (index 0)
        ],
    });

    $('#example2 tbody').sortable({
        update: function(event, ui) {
            var items = [];
            $('#example2 tbody tr').each(function(index, element) {
                items.push($(element).data('id'));
            });
            // console.log(items);return false;

            $.ajax({
                url: '{{ route("updateOrder") }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    items: items
                },
                success: function(response) {
                    if (response.success) {
                            toastr.options = {
                            "closeButton": true,
                            "newestOnTop": true,
                            "positionClass": "toast-top-right",
                            "timeOut":2000
                            };
                            toastr.success(response.success);
                            setTimeout(function () {
                            location.reload(true);
                            }, 1000)
                    }
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