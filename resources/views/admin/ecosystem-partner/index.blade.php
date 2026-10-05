@extends('layouts.admin.master')

@section('title', 'Ecosystem Partner Listing')

@section('page_level_style')
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection

@section('content')

    @if (Auth::user()->role == 'admin')
        <?php $route_create = 'admin.manage-ecosystem-partner.create'; ?>
        <?php $route_edit = 'admin.manage-ecosystem-partner.edit'; ?>
    @elseif(Auth::user()->role == 'event-manager')
        <?php $route_create = 'event-manager.manage-ecosystem-partner.create'; ?>
        <?php $route_edit = 'event-manager.manage-ecosystem-partner.edit'; ?>
    @else
    @endif
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Ecosystem Partner Listing</h1>
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
                        <div class="card-header align-right">
                            <a href="{{ route($route_create) }}"
                                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm float-end"><i
                                    class="fas fa-arrow-left fa-sm text-white-50"></i> Add Ecosystem Partner</a>
                        </div>

                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        @if (Auth::user()->role == 'admin')
                                            <a href="javascript:;" id="deleteAllSelected" class="btn btn-danger m-2"
                                                data-table="ecosystem_partners">
                                                <i class="">Delete All</i>
                                            </a>

                                            <th>
                                                <input type="checkbox" id="select-all">Select All
                                            </th>
                                        @endif
                                        <!-- <th>Heading</th> -->
                                        <!-- <th>Sub Heading</th> -->
                                        <th>Images</th>
                                        <th>Last Updated At</th>
                                        {{-- <th>Last Updated By</th> --}}
                                        <th>Created At</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($banner as $data)
                                        <tr>
                                            @if (Auth::user()->role == 'admin')
                                                <td><input type="checkbox" name="ids" class="row-checkbox"
                                                        value="{{ $data->id }}" data-id="{{ $data->id }}"></td>
                                            @endif
                                            <!-- <td>{{ $data->heading }}</td> -->
                                            <!-- <td>{{ $data->sub_heading }}</td> -->
                                            <td>
                                                @if ($data->image)
                                                    <img src="{{ asset($data->image) }}" style="height: 50px; width: 50px;">
                                                @else
                                                    <img src="{{ placeHolderBlogImage }}"
                                                        style="height: 50px; width: 50px;">
                                                @endif
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($data->updated_at)->diffForHumans() }}</td>
                                            {{-- <td>{{$data->user->name}}</td> --}}
                                            <td>{{ Date_Format($data->created_at, 'd-M-Y') }}</td>

                                            <td>
                                                <a href="{{ route($route_edit, [$data->id]) }}"
                                                    class="btn btn-primary m-2">
                                                    <i class="fa fa-pen"></i>
                                                </a>
                                                @if ($data->is_active == '1')
                                                    <a href="javascript:;" data-id="{{ $data->id }}" data-status="0"
                                                        title="deactive" data-heading="You want to deactivate"
                                                        data-buttonstatus="Yes! Change it"
                                                        class="btn btn-success m-2 deleteRecord">
                                                        <i class="fa fa-check"></i>
                                                    </a>
                                                @else
                                                    <a href="javascript:;" data-id="{{ $data->id }}" data-status="1"
                                                        title="active" data-heading="You want to activate"
                                                        data-buttonstatus="Yes! Change it"
                                                        class="btn btn-danger m-2 deleteRecord">
                                                        <i class="fa fa-ban"></i>
                                                    </a>
                                                @endif
                                                @if (Auth::user()->role == 'admin')
                                                    <a href="javascript:;" data-id="{{ $data->id }}"
                                                        data-method="DELETE" data-status="1" title="active"
                                                        data-heading="You want to delete this record"
                                                        data-buttonstatus="Yes! Delete it"
                                                        class="btn btn-danger m-2 deleteRecord">
                                                        <i class="fa fa-trash" title="delete"></i>
                                                    </a>
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
            $(document).ready(function() {
                $('#example2').DataTable();
            });
        });
    </script>
@endsection
