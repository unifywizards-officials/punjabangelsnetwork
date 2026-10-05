@extends('layouts.guest.master')

@section('title',$pageData->meta_title)
@section('description',$pageData->meta_description)
@section('keywords',$pageData->meta_keyword)

@section('page_level_style')
<link href="https://www.unifyholidays.com/css/bootstrap.min.css" rel="stylesheet" type="text/css">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" type="text/css">
<style>

</style>
@endsection

@section('content')
<!-- Breadcrumb -->
<section class="breadcrumb-outer text-center" style="background-image: url('{{asset($pageData->destination->banner_image)}}');">
    <div class="container">
        <div class="breadcrumb-content">
            <h1 class="white">{{$pageData->name}}</h1>

        </div>
    </div>
    <div class="overlay"></div>
</section>
<!-- BreadCrumb Ends -->
<section class="single">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <div class="single-content">
                    <div class="single-full-title section-border">
                        <div class="img_packages">
                            <img src="{{asset($pageData->image)}}" alt="{{$pageData->image_alt}}">
                        </div>
                        <br>
                        <div class="single-title">
                            <h2>{{$pageData->name}}</h2>
                            <p><i class="flaticon-location-pin"></i> {{$pageData->destination->name}}</p>
                            <!-- <a href="#">View on map</a>
                            <div class="rating">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                            </div>
                            <p>(1,186 Reviews)</p> -->
                        </div>
                    </div>
                    <div class="tour-includes" >
                       
                            
                                <ul >
                              
                                    @foreach($pageData->package_facilities as $facilities)
                                    <li ><img src="{{asset($facilities->facilities_name->image)}}" style="height: 30px; width: 30px; margin-right: 20px;"> {{$facilities->facilities_name->name}}</li>
                                    @endforeach
                                    <!-- <li "><i class="fa fa-group" aria-hidden="true"></i> Max People : 26</li>
                            <li "><i class="fa fa-wifi" aria-hidden="true"></i> Wifi Available</li>
                            <li "><i class="fa fa-calendar" aria-hidden="true"></i> Jan 18 - Dec 21</li>
                            <li "><i class="fa fa-user" aria-hidden="true"></i> Min Age : 10+</li>
                            <li"><i class="fa fa-map-o" aria-hidden="true"></i> Pickup : Airport</li> -->
                                
                        </ul>
                            
                       
                    </div></div>
                    <div >
                    <div class="description mar-bottom-30">
                        <h3>About {{$pageData->destination->name}}</h3>
                        <p>{!! $pageData->about_location !!}</p>

                    </div>
                    <div class="itinerary mar-bottom-30">
                        <h3>Itinerary</h3>

                        <?php
                        $itinary = json_decode($pageData->itinerary, true);
                        ?>
                        @foreach($itinary as $index => $itinary)
                        <div class="itinerary-item">
                            <div class="d-flex">
                                <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#<?php echo $index + 1 ?>"><i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                                <p class="mar-bottom-0"><span>{{$itinary['day_title']}}</span></p>
                            </div>
                            <div id="<?php echo $index + 1 ?>" class="collapse in itinerary-para">
                                {!! $itinary['description'] !!}
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- <div class="single-map mar-bottom-30">
                        <h3>Map</h3>
                        <div id="map" style="height: 300px; width:100%;"></div>
                    </div> -->
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <div class="list-sidebar">
                    <div class="sidebar-item">
                        <div class="background_side">
                            <h3 class="white">Tour Details</h3>
                            {!! $pageData->inclusive !!}

                        </div>
                    </div>

                    <div class="sidebar-item">
                        <div class="sidebar-contact text-center">
                            <i class=" fa fa-phone-alt"></i>
                            <h3><span>Book</span> by phone</h3>
                            <a href="tel://004542344599" class="phone">01725298000</a>
                            <small>Monday to Friday 9.00am - 6.00pm</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>
    @endsection

    @section('page_level_script')
    @endsection