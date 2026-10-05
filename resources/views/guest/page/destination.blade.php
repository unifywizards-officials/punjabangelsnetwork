@extends('layouts.guest.master')

@section('title',$pageData->meta_title)
@section('description',$pageData->meta_description)
@section('keywords',$pageData->meta_keyword)

@section('page_level_style')

@endsection

@section('content')
<!-- Breadcrumb -->
<section class="breadcrumb-outer text-center" style="background-image: url('{{asset($pageData->banner_image)}}');">
    <div class="container">
        <div class="breadcrumb-content">
            <h1 class="white">{{$pageData->name}}</h1>
        </div>
    </div>
    <div class="overlay"></div>
</section>
<!-- BreadCrumb Ends -->

<!-- Service Detail Starts -->
<section class="service-detail bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="detail-content">
                    <div class="title mar-bottom-30">
                        <div class="row">
                            @foreach($pageData->packages as $data)
                            <div class="col-md-4 col-sm-4 col-xs-12 mar-bottom-30" style="position: relative; z-index: 10;">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="{{asset($data->image)}}" alt="{{$data->image_alt}}">
                                        <div class="trend-tags">
                                            <!-- <a href="bali-packages/standard-bali-package-4n-5d.php"><i
                                                    class="flaticon-like"></i></a> -->
                                        </div>
                                        <div class="trend-price">
                                            <p class="price"><a href="{{route('get-quote')}}" class="font-white" style="text-decoration: none;"><span>Get A Quote</span></a></p>
                                        </div>

                                    </div>
                                    <div class="trend-content">
                                        <p><i class="flaticon-location-pin"></i> {{$pageData->name}}</p>
                                        <h4>
                                            <a href="{{route('showPackage',[$pageData->slug,$data->slug])}}" style="text-decoration: none;">{{$data->name}}</a>
                                        </h4>
                                        <p class="mar-0"><i class="fa fa-clock-o" aria-hidden="true"></i>
                                            {{$data->duration}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <div class="container">

                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    {!! $pageData->about_destination !!}
                                </div>
                            </div>
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