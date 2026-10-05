@extends('layouts.guest.master')

@section('title',$pageData->top_heading)

@section('page_level_style')

@endsection

@section('content')
<!--====== Page title area Start ======-->

<section class="page-title-area">

    <div class="container">

        <div class="page-title-content text-center">

            <h1 class="page-title">{{$pageData->top_heading}}</h1>



            <ul class="breadcrumb-nav">

                <li><a href="/">Home</a></li>

                <li class="active">Service Details</li>

            </ul>

        </div>

    </div>

    <div class="page-title-effect d-none d-md-block">

        <img class="particle-1 animate-zoom-fade" src="{{asset('assets/img/particle/particle-1.png')}}"
            alt="particle One">

        <img class="particle-2 animate-rotate-me" src="{{asset('assets/img/particle/particle-2.png')}}"
            alt="particle Two">

        <img class="particle-3 animate-float-bob-x" src="{{asset('assets/img/particle/particle-3.png')}}"
            alt="particle Three">

        <img class="particle-4 animate-float-bob-y" src="{{asset('assets/img/particle/particle-4.png')}}"
            alt="particle Four">

        <img class="particle-5 animate-float-bob-y" src="{{asset('assets/img/particle/particle-5.png')}}"
            alt="particle Five">

    </div>

</section>

<!--====== Page title area End ======-->



<!--====== Service Details Start ======-->

<section class="service-section p-t-100 p-b-60 bg-secondary-color-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="common-heading text-center heading-white m-b-30">
                    <h2 class="title">{{$pageData->section1_heading}}</h2>

                    <a href="{{$pageData->section1_label_link}}" class="template-btn primary-bg-5 m-t-20">

                        {{$pageData->section1_label_name}}<i class="fas fa-arrow-right"></i>

                    </a>
                </div>
            </div>
        </div>


</section>




<section class="about-us-area p-t-100 p-b-80 border-bottom-primary">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-6 col-md-10">

                <div class="img_about res-im">
                    @if($pageData->section2_image)
                    <img src="{{asset($pageData->section2_image)}}" class="img-medicraft"
                        alt="{{$pageData->section2_image_alt}}">
                    @else
                    <img src="assets/img/services/doc.jpg" class="img-medicraft" alt="img-medicraft">
                    @endif

                </div>

            </div>

            <div class="col-xl-6 col-lg-6 col-md-9">

                <div class="about-us-content pt-20">

                    <div class="common-heading tagline-boxed m-b-30">



                        <h2 class="title " id="extra-pad"> {{$pageData->section2_heading}}</h2>

                    </div>

                    <p class="res-para"> {{$pageData->section2_detail}} </p>





                </div>

            </div>

        </div>

    </div>

</section>

<section class="service-details-area p-t-80 p-b-80 ">

    <div class="container">

        <div class="service-details-content">

            <!-- <h2 class="service-title">Automate and Support Your Entire Enterprise with expert tech solutions from Unify Medicraft </h2>



                <p class="m-b-30"> Accomplish your business goals & support your organization with adequate practice management software</p>
                     
             


                <div class="row">

                    <div class="col-md-6">

                        <div class="m-b-30">

                            <img src="assets/img/services/doctor-giving-presentation-team-interim-doctors.jpg" alt="Service One">

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="m-b-30">

                            <img src="assets/img/services/doctors-discussing-laptop-meeting.jpg" alt="Service Two">

                        </div>

                    </div>

                </div> -->




            <div class="service-faq faq-res">

                <div class="row  justify-content-center center-remover">



                    <div class="col-lg-6 col-md-9 order-lg-last">

                        <div class="faq-image text-lg-left m-t-md-60 ">
                            @if($pageData->section3_image)
                            <img src="{{asset($pageData->section3_image)}}" class="img-medicraft"
                                alt="{{$pageData->section3_image_alt}}">
                            @else
                            <img src="assets/img/services/doc2.jpg" alt="faq image" class="mid-image res-im">
                            @endif


                        </div>

                    </div>

                    <div class="col-lg-6 col-md-10 " id="scheduling">

                        <div class="faq-content">

                            <h3 class="service-subtitle head-res">{{$pageData->section3_heading}}</h3>



                            <div class="landio-accordion-v1 accordion-bordered">

                                <div class="accordion" id="accordionFAQ">

                                    <?php 
                            $section3_specialization = json_decode($pageData->section3_specialization, true); // Unserialize the data		
                            ?>
                                    @foreach($section3_specialization as $key => $section3_specialization)
                                    <div class="accordion-item">

                                        <a href="#scheduling">
                                            <h5 class="accordion-header" id="headingOne<?php echo $key;?>">

                                                <button class="accordion-button collapsed" type="button"
                                                    data-toggle="collapse" data-target="#collapseOne<?php echo $key;?>"
                                                    aria-expanded="false" aria-controls="collapseOne<?php echo $key;?>"
                                                    id="Registration">

                                                    {{$section3_specialization['title']}}

                                                </button>

                                            </h5>
                                        </a>

                                        <div id="collapseOne<?php echo $key;?>" class="collapse"
                                            aria-labelledby="headingOne<?php echo $key;?>" data-parent="#accordionFAQ">

                                            <div class="accordion-body">

                                                {!! $section3_specialization['description'] !!}

                                            </div>

                                        </div>

                                    </div>
                                    @endforeach

                                </div>

                            </div>

                        </div>

                    </div>



                </div>

            </div>

        </div>

    </div>

</section>


<section class="service-details-area p-t-40 p-b-80">

    <div class="container">

        <div class="service-details-content">

            <div class="icons-heading text-center">
                <h2 class="p-b-20 p-t-20">{{$pageData->section4_heading}}
                </h2>
                <h5> <span class="color_themes">{{$pageData->section4_detail}}</span></h5>
            </div>
            <div class="row iconic-boxes-v2">

                <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-delay="0.2s">


                    <?php 
                            $section4_services = json_decode($pageData->section4_services, true); // Unserialize the data		
                            ?>
                    @foreach($section4_services as $key => $section4_services)
                    <div class="iconic-box m-t-50">

                        <div class="icon">
                        
                            <img src="{{asset($section4_services['image'])}}" alt="Business">

                        </div>

                        <h5 class="title">{{$section4_services['title']}}</h5>

                        <p>

                        {{$section4_services['description']}}

                        </p>

                    </div>

                    @endforeach


                    

                </div>

            </div>





        </div>

    </div>

</section>

<!--====== Service Details End ======-->
<section class="service-section p-t-100 p-b-60 bg-secondary-color-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="common-heading text-center heading-white m-b-30">
                    <h2 class="title">{{$pageData->section6_heading}}</h2>

                    <a href="{{$pageData->section6_label_link}}" class="template-btn primary-bg-5 m-t-20">

                    {{$pageData->section6_label_name}} <i class="fas fa-arrow-right"></i>

                    </a>
                </div>
            </div>
        </div>


</section>


<!--====== Newsletter Area Start ======-->
@include('layouts.guest.common.subscribe')
<!--====== Newsletter Area End ======-->



<!--====== Start Scroll To Top ======-->

<a href="#" class="back-to-top" id="scroll-top">

    <i class="far fa-angle-up"></i>

</a>

<!--====== End Scroll To Top ======-->@endsection

@section('page_level_script')
@endsection