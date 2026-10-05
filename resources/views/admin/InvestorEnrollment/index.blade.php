@extends('layouts.admin.master')

@section('title', 'Investor Enrollment Listing')

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
                    <h1 class="m-0">Investor Enrollment Listing</h1>
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
                                            <th>Designation</th>
                                            <th>Organization</th>
                                            <th>Domain</th>
                                            <th>Date of Birth</th>
                                            <th>Gender</th>
                                            <th>Mobile No</th>
                                            <th>LinkedIn Id</th>
                                            <th>Web Address</th>
                                            <th>Qualification</th>
                                            <th>Office Address</th>
                                            <th>Residential Address</th>
                                            <th>Preferred Mailing Address</th>
                                            <th>Minimum Investment Range</th>
                                            <th>Maximum Investment Range</th>
                                            <th>Preferred Investment Stage</th>
                                            <th>Industry Preference</th>
                                            <th>Geographical Preference</th>
                                            <th>Investment Strategy</th>
                                            <th>Previous Investment Experience</th>
                                            <th>Investment Experience with Startup</th>
                                            <th>Relevant Skill</th>
                                            <th>Risk Tolerance Level</th>
                                            <th>How You Hear About Us</th>
                                            <th>Why Interested in investing in Startup</th>
                                            <th>Industries You are interest in</th>
                                            <th>Terms And Condition</th>
                                            <th>Applied Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($investor_enrollment as $data)
                                            <tr>
                                                <td>{{ $data->full_name }}</td>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ $data->designation }}</td>
                                                <td>{{ $data->organization }}</td>
                                                <td>{{ $data->domain }}</td>
                                                <td>{{ $data->date_of_birth }}</td>
                                                <td>{{ $data->gender }}</td>
                                                <td>{{ $data->mobile_no }}</td>
                                                <td>{{ $data->linkden_id }}</td>
                                                <td>{{ $data->web_address }}</td>
                                                <td>{{ $data->qualification }}</td>
                                                <td>{{ $data->office_address }}</td>
                                                <td>{{ $data->residential_address }}</td>
                                                <td>{{ $data->preferred_mailing_address }}</td>
                                                <td>{{ $data->minimun_investment_range }}</td>
                                                <td>{{ $data->maximum_investment_range }}</td>
                                                <td>{{ $data->preferred_investment_stage }}</td>
                                                <td>{{ $data->industry_preference }}</td>
                                                <td>{{ $data->geographical_preference }}</td>
                                                <td>{{ $data->investment_strategy }}</td>
                                                <td>{{ $data->previous_investment_experience }}</td>
                                                <td>{{ $data->investment_experience_with_startup }}</td>
                                                <td>{{ $data->relevant_skill }}</td>
                                                <td>{{ $data->risk_tolarance_level }}</td>
                                                <td>{{ $data->how_hear_aboutus }}</td>
                                                <td>{{ $data->why_interested_in_startup }}</td>
                                                <td>{{ $data->industry_interest_you }}</td>
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
                        title: 'Punjab Angel Networks  |Investor Enrollment| Leads',
                        filename: 'Punjab Angel Networks  |Investor Enrollment| Leads'
                    },
                    {
                        extend: 'csv',
                        title: 'Punjab Angel Networks  |Investor Enrollment| Leads',
                        filename: 'Punjab Angel Networks  |Investor Enrollment| Leads'
                    },
                    {
                        extend: 'excel',
                        title: 'Punjab Angel Networks  |Investor Enrollment| Leads',
                        filename: 'Punjab Angel Networks  |Investor Enrollment| Leads'
                    },
                    {
                        extend: 'pdf',
                        title: 'Punjab Angel Networks  |Investor Enrollment| Leads',
                        filename: 'Punjab Angel Networks  |Investor Enrollment| Leads',
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
                        title: 'Punjab Angel Networks  |Investor Enrollment| Leads',
                        filename: 'Punjab Angel Networks  |Investor Enrollment| Leads'
                    }
                ]
            });
        });
    </script>
@endsection
