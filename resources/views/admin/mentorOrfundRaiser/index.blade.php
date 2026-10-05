@extends('layouts.admin.master')

@section('title', 'MentorShip Or Fundraise Listing')

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
                    <h1 class="m-0">MentorShip Or Fundraise Listing</h1>
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
                                            <th>Looking For</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Mobile No</th>
                                            <th>Startup Name</th>
                                            <th>Start Up Websie</th>
                                            <th>Startup</th>
                                            <th>Amount Receive Till Date</th>
                                            <th>Created At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($MentorOrFundRaiser as $data)
                                            <tr>
                                                <td>{{ $data->looking_for }}</td>
                                                <td>{{ $data->full_name }}</td>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ $data->mobile_no }}</td>
                                                <td>{{ $data->start_up_name }}</td>
                                                <td>{{ $data->start_up_website }}</td>
                                                <td>{{ $data->start_up }}</td>
                                                <td>{{ $data->amount_receive_till_date }}</td>
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
                        title: 'Punjab Angel Networks  |MentorShip Or Fundraise| Leads',
                        filename: 'Punjab Angel Networks  |MentorShip Or Fundraise| Leads'
                    },
                    {
                        extend: 'csv',
                        title: 'Punjab Angel Networks  |MentorShip Or Fundraise| Leads',
                        filename: 'Punjab Angel Networks  |MentorShip Or Fundraise| Leads'
                    },
                    {
                        extend: 'excel',
                        title: 'Punjab Angel Networks  |MentorShip Or Fundraise| Leads',
                        filename: 'Punjab Angel Networks  |MentorShip Or Fundraise| Leads'
                    },
                    {
                        extend: 'pdf',
                        title: 'Punjab Angel Networks  |MentorShip Or Fundraise| Leads',
                        filename: 'Punjab Angel Networks  |MentorShip Or Fundraise| Leads',
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
                        title: 'Punjab Angel Networks  |MentorShip Or Fundraise| Leads',
                        filename: 'Punjab Angel Networks  |MentorShip Or Fundraise| Leads'
                    }
                ]
            });
        });
    </script>
@endsection
