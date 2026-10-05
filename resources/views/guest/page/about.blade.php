@extends('layouts.guest.master')

@php $seo=StaticPageSeo();@endphp
    @php $meta_title=$seo->aboutus_meta;@endphp
    @php $meta_desc=$seo->aboutus_description;@endphp
    @php $meta_key=$seo->aboutus_keyword;@endphp
@section('title', $meta_title)
@section('description',$meta_desc)
@section('keywords',$meta_key)


@section('page_level_style')

@endsection

@section('content')
<!--====== End Header ======-->

<!-- Start Search From -->
<div class="modal fade search-area" id="search-modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form>
                <input type="text" placeholder="Search here...">
                <button class="search-btn"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
</div>
<!-- End Search From -->

<!--====== Page title area Start ======-->
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content text-center">
            <h1 class="page-title">{{$pageData->top_heading}}</h1>

            <ul class="breadcrumb-nav">
                <li><a href="/">Home</a></li>
                <li class="active">{{$pageData->top_heading}}</li>
            </ul>
        </div>
    </div>
    <div class="page-title-effect d-none d-md-block">
        <img class="particle-1 animate-zoom-fade" src="assets/img/particle/particle-1.png" alt="particle One">
        <img class="particle-2 animate-rotate-me" src="assets/img/particle/particle-2.png" alt="particle Two">
        <img class="particle-3 animate-float-bob-x" src="assets/img/particle/particle-3.png" alt="particle Three">
        <img class="particle-4 animate-float-bob-y" src="assets/img/particle/particle-4.png" alt="particle Four">
        <img class="particle-5 animate-float-bob-y" src="assets/img/particle/particle-5.png" alt="particle Five">
    </div>
</section>
<!--====== Page title area End ======-->

<!-- ===== About Area Start ===== -->
<section class="about-us-area p-t-80 p-b-80 border-bottom-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-10">
                <div class="img_about">
                    @if($pageData->section1_image)
                    <img src="{{asset($pageData->section1_image)}}" class="img-medicraft" alt="img-medicraft">
                    @else
                    <img src="assets/img/screen-about.png" class="img-medicraft" alt="img-medicraft">
                    @endif
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-9">
                <div class="about-us-content">
                    <div class="common-heading tagline-boxed m-b-30">
                        <span class="tagline">About Company</span>
                        <h2 class="title">{{$pageData->section1_heading}}</h2>
                    </div>
                    <p>{!! $pageData->section1_detail !!}</p>

                    <!-- <p>We have already been helping physicians, hospitals, and medical practices for many years now.  </p> -->
                    <!-- <p>
                            Get your name enrolled in the  list of leading healthcare that elevated their ROI and successfully managed their RCM. 
                            </p> -->

                    <a href="{{$pageData->section1_label_link}}" class="template-btn primary-bg-5 m-t-20">
                        {{$pageData->section1_label_name}} <i class="fas fa-arrow-right"></i>
                    </a>
                    <br>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ===== About Area End ===== -->

<!-- ===== Service Section Start ===== -->
@if($pageData->section1_is_active)
<section class="service-area p-t-80 p-b-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-9">
                <div class="common-heading tagline-boxed text-center m-b-30">
                    <span class="tagline">Popular Services</span>
                    <h2 class="title">{{$pageData->top_detail}}</h2>
                </div>
            </div>
        </div>

        <div class="row justify-content-center iconic-boxes-v1 card-group">


            @foreach($popular_service as $key => $popular_service)
            @php $colors = ['icon icon-gradient-3', 'icon icon-gradient-4', 'icon icon-gradient-5']; @endphp
            @php $color = $colors[$key % 3]; @endphp
            <div class="col-xl-3 col-md-6 col-sm-10  iconic-box m-t-30 margin-box">

                <div class="<?php echo $color; ?>">
                    <i class="{{$popular_service->font_awesome_icon_class}}"></i>
                </div>
                <h4 class="title">{{$popular_service->title}} </h4>
                <p>
                </p>

            </div>

            @endforeach
        </div>




    </div>
</section>
@endif
<!-- ===== Service Section End ===== -->


<!--====== Start Counter Section ======-->
<section class="counter-section section-with-map-bg bg-primary-color p-t-50 p-b-50 p-t-md-160">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-9">
                <!-- Preview Gallery Two -->
                <div class="preview-galley-v3 m-b-md-100">
                    @if($pageData->section3_image1)
                    <img class="preview-image-1" src="{{asset($pageData->section3_image1)}}" alt="{{$pageData->section3_image1_alt}}">
                    @else
                    <img class="preview-image-1" src="assets/img/preview-gallery/count-down.png" alt="Preview Image">
                    @endif

                    @if($pageData->section3_image2)
                    <img class="preview-image-2" src="{{asset($pageData->section3_image2)}}"
                        alt="{{$pageData->section3_image2_alt}}">
                    @else
                    <img class="preview-image-2" src="assets/img/preview-gallery/count-down-top.png"
                        alt="Preview Image">
                    @endif


                    @if($pageData->section3_image3)
                    <img class="preview-image-3" src="{{asset($pageData->section3_image3)}}"
                        alt="{{$pageData->section3_image3_alt}}">
                    @else
                    <img class="preview-image-3" src="assets/img/preview-gallery/count-down-bottom.png"
                        alt="Preview Image">
                    @endif


                    
                </div>
            </div>
            <div class="col-lg-6 col-md-10">
                <!-- Counter Item -->
                <div class="row counter-items-v1 p-xl-5">
                <?php 
                $aboutus = json_decode($pageData->section3_aboutus_stats, true); // Unserialize the data		
                            ?>
                    @foreach($aboutus as $aboutus)
                    <div class="col-6">
                        <div class="counter-item m-b-60">
                            <div class="icon">
                                <i class="{{$aboutus['font_awesome']}}"></i>
                            </div>
                            <div class="counter-wrap">
                                <span class="counter">{{$aboutus['value']}}</span>
                                <span class="suffix">+</span>
                            </div>
                            <p class="title">{{$aboutus['title2']}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== End Counter Section ======-->

<!--====== Start Scroll To Top ======-->
<a href="#" class="back-to-top" id="scroll-top">
    <i class="far fa-angle-up"></i>
</a>
<!--====== End Scroll To Top ======-->

@endsection

@section('page_level_script')
@endsection