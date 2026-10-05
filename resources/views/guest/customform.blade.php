@extends('layouts.guest.master')

@section('page_level_style')
<link rel="stylesheet" id="cpswitch" href="{{asset('guest/css/apply.css')}}">
@endsection

@section('content')

<section class="page-header" style="background-image: url('{{asset('guest/images/backgrounds/MSE-bg.jpg')}}');">
    <div class="container">
        <ul class="list-unstyled breadcrumb-one">
            <li><a href="#">Home</a></li>
            <li><span>QnA </span></li>
        </ul><!-- /.list-unstyled breadcrumb-one -->
        <h1 class="page-header__title ">{{$formBuilder->form_heading}} </h1>
    </div><!-- /.container -->
</section><!-- /.page-header -->


<section class="sec-pad-top sec-pad-bottom about-four">

    <div class="container">
        <!-- /.sec-title -->

        <div class="row ">
            <div class="col-md-12 col-lg-6"  id="mainContent">
                <div class="about-four__content">
                    {{-- <div class="sec-title">
                        <p class="sec-title__tagline">All support to them</p><!-- /.sec-title__tagline -->
                        <h2 class="sec-title__title">We inspire and help <br>them live better</h2>
                    </div>
                    <div class="about-four__list__text">Join the community to give education for the
                    </div> --}}
                    {!! $formBuilder->form_description !!}

                </div><!-- /.about-four__content -->
            </div>
            <div class="col-md-12 col-lg-6 " id="sidebar">
                <div class="about-four__image wow fadeInLeft" data-wow-duration="1500ms">
                    <img src="{{asset($formBuilder->image)}}" alt="485x493">
                </div><!-- /.about-four__image -->
            </div><!-- /.col-md-12 -->
            <!-- /.col-md-12 -->

        </div>
        <!-- /.row -->
    </div><!-- /.container -->
</section>


<section class="content">
    <div class="container-fluid">
        <div class="col-12">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Please Submit This Form</h3>
                    @include('layouts.admin.alertmessage')
                </div>

                <div class="card-body">
                    <!--------Messages ------------------------------------>
                    <form method="POST" action="{{route('save-form')}}" enctype="multipart/form-data">
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
<script src="{{asset('guest/js/theia-sticky-sidebar.min.js')}}"></script>

<script>
    $(function() {
        $.ajax({
            type: 'get',
            // headers: {
            //     'Authorization': 'Bearer ' + localStorage.getItem('token')
            // },
            url: '{{ URL('get-form-builder') }}',
            data: {
                'id': {{$formBuilder->id}}
            },
            success: function(data) {
                $("#form_id").val(data.id);
                $('#fb-reader').formRender({
                    formData: data.content
                });
            }
        });
    });
</script>
<script>
    $('#mainContent, #sidebar').theiaStickySidebar({
        additionalMarginTop: 90
    });
</script>
@endsection