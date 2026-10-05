@extends('layouts.admin.master')

@section('title', 'Corporate Enrollment Listing')

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
                    <h1 class="m-0">Corporate Enrollment Listing</h1>
                </div>
                <div class="col-sm-6">
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
                                            <th>Mobile No</th>
                                            <th>Gender</th>
                                            <th>Domain</th>
                                            <th>Date of Birth</th>
                                            <th>Designation</th>
                                            <th>Organization</th>
                                            <th>Linkedin Id</th>
                                            <th>Professional Qualification</th>
                                            <th>Office Address</th>
                                            <th>Residential Address</th>
                                            <th>Preferred Mailing Address</th>
                                            <th>Comment</th>
                                            <th>Applied Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($corporate_enrollment as $data)
                                            <tr>
                                                <td>{{ $data->full_name }}</td>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ $data->mobile_no }}</td>
                                                <td>{{ $data->gender }}</td>
                                                <td>{{ $data->domain }}</td>
                                                <td>{{ $data->date_of_birth }}</td>
                                                <td>{{ $data->designation }}</td>
                                                <td>{{ $data->organization }}</td>
                                                <td>{{ $data->linkden_id }}</td>
                                                <td>{{ $data->professional_qualification }}</td>
                                                <td>{{ $data->office_address }}</td>
                                                <td>{{ $data->residential_address }}</td>
                                                <td>{{ $data->preferred_mailing_address }}</td>
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
                        title: 'Punjab Angel Networks  |Corporate Enrollment| Leads',
                        filename: 'Punjab Angel Networks  |Corporate Enrollment| Leads'
                    },
                    {
                        extend: 'csv',
                        title: 'Punjab Angel Networks  |Corporate Enrollment| Leads',
                        filename: 'Punjab Angel Networks  |Corporate Enrollment| Leads'
                    },
                    {
                        extend: 'excel',
                        title: 'Punjab Angel Networks  |Corporate Enrollment| Leads',
                        filename: 'Punjab Angel Networks  |Corporate Enrollment| Leads'
                    },
                    {
                        extend: 'pdf',
                        title: 'Punjab Angel Networks  |Corporate Enrollment| Leads',
                        filename: 'Punjab Angel Networks  |Corporate Enrollment| Leads',
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
                        title: 'Punjab Angel Networks  |Corporate Enrollment| Leads',
                        filename: 'Punjab Angel Networks  |Corporate Enrollment| Leads'
                    }
                ]
            });
        });
    </script>
@endsection
