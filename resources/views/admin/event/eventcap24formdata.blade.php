@extends('layouts.admin.master')

@section('title', 'Event Form Data')

@section('page_level_style')
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <style>
        .content-wrapper {
            min-width: 2000px !important;
        }

        .pg-cmnt {
            width: 600px !important;
        }
    </style>

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
                                        <th>Gender</th>
                                        <th>Phone no</th>
                                        <th>Company Name</th>
                                        <th>Company Location</th>
                                        <th>Domain</th>
                                        <th>Designation</th>
                                        <th>Type</th>
                                        <th>Has Australian Visa?</th>
                                        <th class="pg-cmnt">Comment</th>
                                        <th>Last Created At</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($eventData as $data)
                                        <tr>

                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->event_name }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->gender }}</td>
                                            <td>{{ $data->phone_no }}</td>
                                            <td>{{ $data->company_name }}</td>
                                            <td>{{ $data->company_location }}</td>
                                            <td>{{ $data->domain }}</td>
                                            <td>{{ $data->designation }}</td>
                                            <td>{{ $data->type }}</td>
                                            <td>{{ $data->has_australian_visa }}</td>
                                            <td>{{ $data->comment }}</td>

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
                        title: 'Punjab Angels Networks |EventFormCaptech24| Leads',
                        filename: 'Punjab Angels Networks |EventFormCaptech24| Leads',
                    },
                    {
                        extend: 'csv',
                        title: 'Punjab Angels Networks |EventFormCaptech24| Leads',
                        filename: 'Punjab Angels Networks |EventFormCaptech24| Leads',
                    },
                    {
                        extend: 'excel',
                        title: 'Punjab Angels Networks |EventFormCaptech24| Leads',
                        filename: 'Punjab Angels Networks |EventFormCaptech24| Leads',
                    },
                    {
                        extend: 'pdf',
                        title: 'Punjab Angels Networks |EventFormCaptech24| Leads',
                        filename: 'Punjab Angels Networks |EventFormCaptech24| Leads',
                    },
                    {
                        extend: 'print',
                        title: 'Punjab Angels Networks |EventFormCaptech24| Leads',
                        filename: 'Punjab Angels Networks |EventFormCaptech24| Leads',
                    }
                ]
            });
        });
    </script>
@endsection
