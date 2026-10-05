@extends('layouts.admin.master')

@section('title', 'Event Form Data')

@section('page_level_style')
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')


    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Event Form Data</h1>
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

                                        <th>Name</th>
                                        <th>Event title</th>
                                        <th>Email</th>
                                        <th>Organisation</th>
                                        <th>Phone no</th>
                                        <th>Designation</th>
                                        <th>Type</th>
                                        <th>Is Punjab Angels Member</th>
                                        <th>Last Created At</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($eventData as $data)
                                        <tr>

                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->event_name }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->organization }}</td>
                                            <td>{{ $data->phone_no }}</td>
                                            <td>{{ $data->designation }}</td>
                                            <td>{{ $data->type }}</td>
                                            <td>{{ $data->is_active }}</td>

                                            <td>{{ \Carbon\Carbon::parse($data->created_at)->format('d M Y') }}</td>

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

    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example2').DataTable({
                ordering: false,
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'copy',
                        title: 'Punjab Angels Networks |EventForm| Leads',
                        filename: 'Punjab Angels Networks |EventForm| Leads',
                    },
                    {
                        extend: 'csv',
                        title: 'Punjab Angels Networks |EventForm| Leads',
                        filename: 'Punjab Angels Networks |EventForm| Leads',
                    },
                    {
                        extend: 'excel',
                        title: 'Punjab Angels Networks |EventForm| Leads',
                        filename: 'Punjab Angels Networks |EventForm| Leads',
                    },
                    {
                        extend: 'pdf',
                        title: 'Punjab Angels Networks |EventForm| Leads',
                        filename: 'Punjab Angels Networks |EventForm| Leads',
                    },
                    {
                        extend: 'print',
                        title: 'Punjab Angels Networks |EventForm| Leads',
                        filename: 'Punjab Angels Networks |EventForm| Leads',
                    }
                ]
            });
        });
    </script>
@endsection
