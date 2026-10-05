@extends('layouts.guest.master')

@section('page_level_style')

@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="col-12">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Please Submit This Form</h3>
                </div>

                <div class="card-body">



















                
                    <!--------Messages ------------------------------------>
                    <form method="POST" action="" enctype="multipart/form-data">
                        @csrf
                        <input type="number" id="form_id" name="form_id" hidden />
                        <div class="row">
                            <div id="fb-reader"></div>
                        </div>
                        
                        <input type="submit" value="Save" class="btn btn-success" />
                    </form>
                
                </div>

            </div>

        </div>

    </div>
</section>

@endsection

@section('page_level_script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script src="{{asset('assets/form-builder/form-render.min.js')}}"></script>


@endsection