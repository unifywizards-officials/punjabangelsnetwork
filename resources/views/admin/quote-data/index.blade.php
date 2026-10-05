@extends('layouts.admin.master')

@section('title','Quote Data Listing')

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
                <h1 class="m-0">Quote Data Listing</h1>
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
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Full Name</th>
                                    <th>Phone Number</th>
                                    <th>Email</th>
                                    <th>No of Person's</th>
                                    <th>Message</th>
                                    <th>Last Updated At</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($quote as $data)
                                <tr>
                                    <td>{{$data->name}}</td>
                                    <td>{{$data->contact}}</td>
                                    <td>{{$data->email}}</td>
                                    <td>{{$data->no_of_person}}</td>
                                    <td>{{$data->message}}</td>
                                    <td>{{ \Carbon\Carbon::parse($data->updated_at)->diffForHumans() }}</td>
                                    <td>{{ Date_Format($data->created_at,'d-M-Y')  }}</td>
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
                ordering: false,
                dom: 'Bfrtip',
                buttons: [
                {
                    extend: 'copy',
                    title: 'Unify Holidays |Quotes| Leads',
                    filename: 'Unify Holidays |Quotes| Leads'
                },
                {
                    extend: 'csv',
                    title: 'Unify Holidays |Quotes| Leads',
                    filename: 'Unify Holidays |Quotes| Leads'
                },
                {
                    extend: 'excel',
                    title: 'Unify Holidays |Quotes| Leads',
                    filename: 'Unify Holidays |Quotes| Leads'
                },
                {
                    extend: 'pdf',
                    title: 'Unify Holidays |Quotes| Leads',
                    filename: 'Unify Holidays |Quotes| Leads'
                },
                {
                    extend: 'print',
                    title: 'Unify Holidays |Quotes| Leads',
                    filename: 'Unify Holidays |Quotes| Leads'
                }
            ]
            });
        });
</script>
@endsection