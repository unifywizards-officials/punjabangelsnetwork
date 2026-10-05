@extends('layouts.admin.master')

@section('title', 'Apply Now Listing')

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
                    <h1 class="m-0">Apply Now Listing</h1>
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
                            <div class="table-responsive">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Phone No</th>
                                            <th>Designation</th>
                                            <th>Company Name</th>
                                            <th>Company Url</th>
                                            <th>Company Location</th>
                                            <th>Industry Type</th>
                                            <th>Industry Category</th>
                                            <th>Incorprated Since</th>
                                            <th>Attachment</th>
                                            <th>Description</th>
                                            <th>Accept T&C</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($ApplyNow as $data)
                                            <tr>
                                                <td>{{ $data->full_name }}</td>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ $data->phone_no }}</td>
                                                <td>{{ $data->designation }}</td>
                                                <td>{{ $data->company_name }}</td>
                                                <td>{{ $data->company_url }}</td>
                                                <td>{{ $data->company_location }}</td>
                                                <td>{{ $data->industry_type }}</td>
                                                <td>{{ $data->industry_category }}</td>
                                                <td>{{ $data->incorprated_since }}</td>
                                                <td>
                                                    <a href="{{ asset($data->attachment) }}" target="_blank"
                                                        class="btn btn-primary m-2" title="form saved data">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </td>
                                                <td>{{ $data->description }}</td>
                                                <td>{{ $data->term_condition }}</td>
                                                <td>{{ Date_Format($data->created_at, 'd-M-Y') }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>

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
                        title: 'Punjab Angel Networks  |Apply Now| Leads',
                        filename: 'Punjab Angel Networks  |Apply Now| Leads'
                    },
                    {
                        extend: 'csv',
                        title: 'Punjab Angel Networks  |Apply Now| Leads',
                        filename: 'Punjab Angel Networks  |Apply Now| Leads'
                    },
                    {
                        extend: 'excel',
                        title: 'Punjab Angel Networks  |Apply Now| Leads',
                        filename: 'Punjab Angel Networks  |Apply Now| Leads'
                    },
                    {
                        extend: 'pdf',
                        title: 'Punjab Angel Networks  |Apply Now| Leads',
                        filename: 'Punjab Angel Networks  |Apply Now| Leads',
                        exportOptions: {
                            columns: ':visible' // Export all visible columns
                        },
                        customize: function(doc) {
                            // Ensure table header and content has enough width
                            doc.content[1].table.widths = '*'.repeat(doc.content[1].table.body[0]
                                .length).split('');
                        }
                    },
                    {
                        extend: 'print',
                        title: 'Punjab Angel Networks  |Apply Now| Leads',
                        filename: 'Punjab Angel Networks  |Apply Now| Leads'
                    }
                ]
            });
        });
    </script>
@endsection
