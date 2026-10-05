@extends('layouts.guest.master')

@section('title','Home')

@section('page_level_style')

@endsection

@section('content')
<!-- Breadcrumb -->
<section class="breadcrumb-outer text-center" style="background-image: url('{{asset($destination->image)}}');">
    <div class="container">
        <div class="breadcrumb-content">
            <h2 class="white">{{$destination->name}}</h2>

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
                            @foreach($destination as $destination)
                            <div class="col-md-4 col-sm-4 col-xs-12 mar-bottom-30">
                                <div class="trend-item">
                                    <div class="trend-image">
                                        <img src="images/Standard-Bali-Package.jpg" alt="image">
                                        <div class="trend-tags">
                                            <!-- <a href="bali-packages/standard-bali-package-4n-5d.php"><i
                                                    class="flaticon-like"></i></a> -->
                                        </div>
                                        <div class="trend-price">
                                            <p class="price"><span>Get A Quote</span></p>
                                        </div>

                                    </div>
                                    <div class="trend-content">
                                        <p><i class="flaticon-location-pin"></i> Bali</p>
                                        <h4><a href="bali-packages/standard-bali-package-4n-5d.php">Standard Bali
                                                Package – 4N/5D</a></h4>
                                        <p class="mar-0"><i class="fa fa-clock-o" aria-hidden="true"></i> 4 Nights & 5
                                            Days</p>
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
</section>
@endsection

@section('page_level_script')
@endsection