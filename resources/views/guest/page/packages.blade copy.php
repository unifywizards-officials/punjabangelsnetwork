@extends('layouts.guest.master')

@section('title','sdsd')

@section('page_level_style')
<link href="https://www.unifyholidays.com/css/bootstrap.min.css" rel="stylesheet" type="text/css">

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" type="text/css">
<style>
.package-detail-section .sidebar-column .inner-column {
    position: relative;
    padding: 40px 30px 1px;
    border-radius: 10px;
    background-color: #f3f7fa;
}

.booking-widget {
    position: relative;
    border-radius: 8px;
    padding: 35px 22px 15px;
    background-color: #1db4bc;
    background-size: cover;
}

.booking-widget h5 {
    position: relative;
    color: #ffffff;
    font-weight: 700;
    margin-bottom: 25px;
}

.booking-form form {
    position: relative;
}

form .form-group {
    position: relative;
    margin-bottom: 20px;
}

form .form-group input[type="text"],
form .form-group input[type="email"],
form .form-group input[type="password"],
form .form-group input[type="tel"],
form .form-group input[type="url"],
form .form-group input[type="file"],
form .form-group input[type="number"],
form .form-group textarea,
form .form-group select {
    position: relative;
    display: block;
    height: 54px;
    width: 100%;
    font-size: 16px;
    color: #101010;
    line-height: 30px;
    font-weight: 500;
    padding: 11px 20px;
    padding-right: 48px;
    background-color: #ffffff;
    border: 1px solid #e0e0e0;
    border-radius: 0px;
    -webkit-transition: all 300ms ease;
    -ms-transition: all 300ms ease;
    -o-transition: all 300ms ease;
    -moz-transition: all 300ms ease;
    transition: all 300ms ease;
}

.booking-widget .booking-form input {
    height: 60px !important;
    color: #ffffff !important;
    border-radius: 4px !important;
    border: 1px solid rgba(255, 255, 255, 0.60) !important;
    background-color: rgba(255, 255, 255, 0.25) !important;
}

.booking-widget .booking-form .icon {
    position: absolute;
    right: 22px;
    top: 20px;
    z-index: 2;
    font-size: 20px;
    color: #ffffff;
}

.package-detail-section {
    position: relative;
    padding: 80px 0px 100px;
}

.auto-container {
    position: static;
    max-width: 1210px;
    padding: 0px 20px;
    margin: 0 auto;
}

.package-detail-section .upper-box {
    position: relative;
}

.pull-left {
    float: left;
}

.package-detail-section .upper-box h4 {
    position: relative;
    font-weight: 700;
    text-transform: uppercase;
}

.pull-right {
    float: right;
}

.package-detail-section .upper-box .price {
    position: relative;
    color: #31c8d0;
    font-size: 24px;
    font-weight: 700;
}

.package-detail-section .upper-box .price span {
    position: relative;
    font-weight: 400;
    font-size: 16px;
    color: #10221B;
}

.package-info-box-two {
    position: relative;
    margin-top: 15px;
    padding: 32px 50px;
    border-radius: 6px;
    margin-bottom: 30px;
    background-color: #f3f7fa;
}

.align-items-center {
    -ms-flex-align: center !important;
    align-items: center !important;
}

.package-info-block-two {
    position: relative;
}

.package-info-block-two .inner-box {
    position: relative;
    padding-left: 50px;
    color: #505050;
}

.package-info-block-two .inner-box:before {
    position: absolute;
    content: '';
    right: -35px;
    top: 8px;
    width: 1px;
    height: 20px;
    background-color: #DEDEDE;
}

.package-info-block-two .inner-box .icon {
    position: absolute;
    left: 0px;
    top: 0px;
    color: #d3f0f4;
}

.package-info-block-two .inner-box .icon img {
    display: inline-block;
    max-width: 100%;
    height: auto;
}

.package-info-block-two {
    position: relative;
}

.package-info-block-two .inner-box:before {
    position: absolute;
    content: '';
    right: -35px;
    top: 8px;
    width: 1px;
    height: 20px;
    background-color: #DEDEDE;
}

.package-info-block-two .inner-box .icon {
    position: absolute;
    left: 0px;
    top: 0px;
    color: #d3f0f4;
}

.package-info-block-two .inner-box .icon img {
    display: inline-block;
    max-width: 100%;
    height: auto;
}

.package-info-block-two {
    position: relative;
}

.package-info-block-two .inner-box:before {
    position: absolute;
    content: '';
    right: -35px;
    top: 8px;
    width: 1px;
    height: 20px;
    background-color: #DEDEDE;
}

.package-info-block-two .inner-box .icon {
    position: absolute;
    left: 0px;
    top: 0px;
    color: #d3f0f4;
}

.package-info-block-two {
    position: relative;
}

.package-detail-section .rating-box {
    position: relative;
}

.package-info-box-two {
    position: relative;
    margin-top: 15px;
    padding: 32px 50px;
    border-radius: 6px;
    margin-bottom: 30px;
    background-color: #f3f7fa;
    overflow: hidden;
    display: block;
}

.package-detail-section .day-box .title:before {
    position: absolute;
    content: '\f017';
    left: 0px;
    top: 1px;
    color: #1DC5CE;
    font-size: 20px;
    font-weight: normal;
}

.inner-container.d-flex.justify-content-between.align-items-center .package-info-block-two {
    float: left;
    vertical-align: middle;
    width: 100%;
    max-width: 25%;
}

.pull-left {
    float: left;
}

.package-detail-section .rating-box .rating {
    position: relative;
    color: #505050;
    font-size: 14px;
}

.package-detail-section .rating-box .fa {
    position: relative;
    color: #ffc107;
    font-size: 13px;
}

.pull-right {
    float: right;
}

.package-detail-section .rating-box .post-info {
    position: relative;
}

.package-detail-section .rating-box .post-info li {
    position: relative;
    margin-left: 15px;
    color: #10221B;
    font-size: 14px;
    margin-left: 20px;
    padding-left: 30px;
    display: inline-block;
}

.package-detail-section .rating-box .post-info li .icon {
    position: absolute;
    left: 0px;
}

.package-detail-section .content-column {
    position: relative;
}

.package-detail-section .content-column h5 {
    position: relative;
    font-weight: 700;
    color: #000000;
    margin-bottom: 20px;
}

.package-detail-section .content-column p {
    position: relative;
    color: #505050;
    font-size: 16px;
    line-height: 28px;
    margin-bottom: 15px;
}

.package-detail-section .content-column .feature-box {
    position: relative;
    margin-top: 30px;
    padding: 35px 0px 32px;
    border-top: 1px dashed #CBCBCB;
    border-bottom: 1px dashed #CBCBCB;
}

.package-detail-section .content-column .feature-box h5 {
    margin-bottom: 35px;
}

.package-detail-section .content-column .feature-list {
    position: relative;
}

.package-detail-section .content-column .feature-list li {
    position: relative;
    padding-left: 32px;
    color: #2E2E2E;
    font-size: 16px;
    margin-bottom: 15px;
}

.package-detail-section .content-column .feature-list li:before {
    position: absolute;
    content: '';
    left: 0px;
    top: 3px;
    width: 20px;
    height: 20px;
    background: url(../images/icons/check-icon.png);
}

.package-detail-section .facility-box {
    position: relative;
    margin-top: 35px;
}

.package-detail-section .facility-box h5 {
    margin-bottom: 40px;
}

.package-detail-section .facility-box .facility-option {
    position: relative;
    padding-left: 30px;
    font-size: 16px;
    color: #505050;
    margin-bottom: 35px;
}

.package-detail-section .facility-box .facility-option .icon {
    position: absolute;
    left: 0px;
}

.package-detail-section .facility-box .facility-option .icon img {
    display: inline-block;
    max-width: 100%;
    height: auto;
}

.package-detail-section .itinerary-box {
    position: relative;
    padding: 30px 0px 30px;
    border-top: 1px dashed #CBCBCB;
    border-bottom: 1px dashed #CBCBCB;
}

.package-detail-section .content-column h5 {
    position: relative;
    font-weight: 700;
    color: #000000;
    margin-bottom: 20px;
}

.package-detail-section .itinerary-box .days-outer {
    position: relative;
}

.package-detail-section .day-box {
    position: relative;
    margin-bottom: 20px;
}

.package-detail-section .day-box .title {
    position: relative;
    color: #505050;
    font-size: 16px;
    font-weight: 600;
    padding-left: 35px;
}

.package-detail-section .day-box .title:before {
    position: absolute;
    content: '\f017';
    left: 0px;
    top: 1px;
    color: #1DC5CE;
    font-size: 20px;
    font-weight: normal;
    font-family: 'Font Awesome 6 Pro';
}

.package-detail-section .day-box .day-text {
    position: relative;
    color: #505050;
    font-size: 16px;
    line-height: 28px;
    margin-top: 20px;
    padding-left: 35px;
}

.package-detail-section .day-box .day-text:before {
    position: absolute;
    content: '';
    left: 8px;
    top: 0px;
    width: 1px;
    height: 100%;
    background-color: #DEDEDE;
}

.package-detail-section .gallery-box {
    position: relative;
    padding: 30px 0px 35px;
    border-bottom: 1px dashed #CBCBCB;
}

.package-detail-section .gallery-box h5 {
    margin-bottom: 30px;
}

.no-js .owl-carousel,
.owl-carousel.owl-loaded {
    display: block;
}

.package-detail-section .rating-box {
    position: relative;
    padding: 15px 0px;
    margin-bottom: 30px;
    border-top: 1px dashed #CBCBCB;
    border-bottom: 1px dashed #CBCBCB;
}

.follow-widget .social-list li {
    position: relative;
    padding: 25px 25px;
    border-radius: 6px;
    margin-bottom: 15px;
    color: #505050;
    font-size: 14px;
    font-weight: 500;
    background-color: #ffffff;
}

.sidebar-widget {
    position: relative;
    margin-bottom: 55px;
}

.sidebar-title {
    position: relative;
    margin-bottom: 30px;
}

.sidebar-title h5 {
    position: relative;
    color: #000000;
    font-weight: 700;
}

.sidebar-title h5:before {
    position: absolute;
    content: '';
    left: -30px;
    top: 5px;
    width: 3px;
    height: 18px;
    background-color: #2ec5ce;
}
</style>
@endsection

@section('content')
<!-- Breadcrumb -->
<section class="breadcrumb-outer text-center" style="background-image: url('{{asset($package->image)}}');">
    <div class="container">
        <div class="breadcrumb-content">
            <h2 class="white">{{$package->name}}</h2>

        </div>
    </div>
    <div class="overlay"></div>
</section>
<!-- BreadCrumb Ends -->


<!-- Service Detail Starts -->
<section class="package-detail-section">
    <div class="auto-container">

        <!-- Upper Box -->
        <div class="upper-box">
            <div class="clearfix">
                <div class="pull-left">
                    <h4>{{$package->name}}</h4>
                </div>
                <!-- <div class="pull-right">
                    <div class="price">$120<span>/Person</span></div>
                </div> -->
            </div>
        </div>

        <!-- Package Info Box -->
        <div class="package-info-box-two">
            <div class="inner-container d-flex justify-content-between align-items-center">

                <!-- Package Info Block Two -->
                <div class="package-info-block-two">
                    <div class="inner-box">
                        <div class="icon"><img src="{{asset('images/banned.svg')}}" alt=""></div>
                        No Cancelation
                    </div>
                </div>

                <!-- Package Info Block Two -->
                <div class="package-info-block-two">
                    <div class="inner-box">
                        <div class="icon"><img src="{{asset('images/printer.svg')}}" alt=""></div>
                        Printed voucher accepted
                    </div>
                </div>

                <!-- Package Info Block Two -->
                <div class="package-info-block-two">
                    <div class="inner-box">
                        <div class="icon"><img src="{{asset('images/queue.svg')}}" alt=""></div>
                        30 Minits Duration
                    </div>
                </div>

                <!-- Package Info Block Two -->
                <div class="package-info-block-two">
                    <div class="inner-box">
                        <div class="icon"><img src="{{asset('images/ticket.svg')}}" alt=""></div>
                        Collect Physical Ticket
                    </div>
                </div>

            </div>
        </div>
        <!-- End Package Info Box -->

        <!-- Rating Box -->
        <div class="rating-box">
            <div class="clearfix">
                <div class="pull-left">
                    <div class="rating">
                        (5 review) &nbsp;
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
                <div class="pull-right">
                    <ul class="post-info">
                        <li><span class="icon"><img src="images/icons/share-icon.svg" alt=""></span>Share</li>
                        <li><span class="icon "><img src="images/icons/review-icon.svg" alt=""></span>Review</li>
                        <li><span class="icon "><img src="images/icons/heart-icon-1.svg" alt=""></span>Wishlist</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Rating Box -->

        <div class="row clearfix">
            <!-- Content Column -->
            <div class="content-column col-xl-8 col-lg-7 col-md-12 col-sm-12">
                <h5>About Moscow Red City Land</h5>
                <p>There are many reasons why an executive or VIP would choose personal security services. Executives
                    could be in charge of large companies that are worth millions or more, leaving them to be a
                    high-valued target for robbery, assault, and more. There could be threats made against executives
                    and even bribery and blackmail from a member of the public or disgruntled employees. When it comes
                    to other VIPs, they do not need necessarily need to be..</p>
                <p>Leaving them to be a high-valued target for robbery, assault, and more. There could be threats made
                    against executives and even bribery and blackmail from a member of the public or disgruntled
                    employees. When it comes to other VIPs</p>
                <div class="feature-box">
                    <h5>Features</h5>
                    <ul class="feature-list">
                        <li>Free Download Instagram Logo</li>
                        <li>Illustrator from Instagram Logo 9 Vectors svg vector collection</li>
                        <li>Vectors SVG vector illustration graphic art design format.</li>
                        <li>Following vectors are from the same pack as this vector also</li>
                        <li>Instagram Logo SVG Vector is a part of Social Websites</li>
                    </ul>
                </div>
                <div class="facility-box">
                    <h5>Facilities</h5>
                    <div class="row clearfix">
                        <div class="column col-lg-4 col-md-4 col-sm-12">
                            <div class="facility-option"><span class="icon"><img src="images/icons/campings.svg"
                                        alt=""></span> Camping Tents</div>
                        </div>
                        <div class="column col-lg-4 col-md-4 col-sm-12">
                            <div class="facility-option"><span class="icon"><img src="images/icons/toilet.svg"
                                        alt=""></span> Portable Toilet</div>
                        </div>
                        <div class="column col-lg-4 col-md-4 col-sm-12">
                            <div class="facility-option"><span class="icon"><img src="images/icons/kitchen-tool.svg"
                                        alt=""></span> Cooking Equipment</div>
                        </div>
                        <div class="column col-lg-4 col-md-4 col-sm-12">
                            <div class="facility-option"><span class="icon"><img src="images/icons/lights.svg"
                                        alt=""></span> Electric Tent Lights</div>
                        </div>
                        <div class="column col-lg-4 col-md-4 col-sm-12">
                            <div class="facility-option"><span class="icon"><img src="images/icons/smoking.svg"
                                        alt=""></span> Smoking Allowed</div>
                        </div>
                        <div class="column col-lg-4 col-md-4 col-sm-12">
                            <div class="facility-option"><span class="icon"><img src="images/icons/wifi-signal.svg"
                                        alt=""></span> Wireless Internet</div>
                        </div>
                    </div>
                </div>

                <!-- Itinerary Box -->
                <div class="itinerary-box">
                    <h5>Itinerary</h5>
                    <div class="days-outer">

                        <!-- Day Box -->
                        <?php 
                        $itinary = json_decode($package->itinerary, true);
                        ?>
                        @foreach($itinary as $itinary)
                        <div class="day-box">
                            <div class="title">{{$itinary['day_title']}}</div>
                            <div class="day-text">{{$itinary['description']}}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <!-- End Itinerary Box -->

                <!-- Gallery Box -->
                <div class="gallery-box">
                    <h5>Gallery</h5>
                    <div class="single-item-carousel owl-carousel owl-theme owl-loaded owl-drag">



                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-1600px, 0px, 0px); transition: all 0.7s ease 0s; width: 2400px;">
                                <div class="owl-item" style="width: 770px; margin-right: 30px;">
                                    <div class="slide">
                                        <div class="image">
                                            <img src="images/resource/gallery.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 770px; margin-right: 30px;">
                                    <div class="slide">
                                        <div class="image">
                                            <img src="images/resource/gallery.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 770px; margin-right: 30px;">
                                    <div class="slide">
                                        <div class="image">
                                            <img src="images/resource/gallery.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span
                                    class="prev-btn far fa-angle-left"></span></button><button type="button"
                                role="presentation" class="owl-next disabled"><span
                                    class="next-btn far fa-angle-right"></span></button></div>
                        <div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button
                                role="button" class="owl-dot"><span></span></button><button role="button"
                                class="owl-dot active"><span></span></button></div>
                    </div>
                </div>

                <!-- Map Box -->
                <div class="map-box">
                    <h5>Location</h5>
                    <!--Map Outer-->
                    <div class="map-outer">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s"
                            allowfullscreen=""></iframe>
                    </div>
                </div>

            </div>
            <!-- Sidebar Column -->
            <div class="sidebar-column col-xl-4 col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column">

                    <!-- Booking Widget -->
                    <div class="sidebar-widget booking-widget"
                        style="background-image: url(images/background/booking-bg.jpg);">
                        <h5>Book this Treks</h5>

                        <!-- Booking Form -->
                        <div class="booking-form">

                            <!-- Contact Form -->
                            <form method="post" action="sendemail.php" id="contact-form">

                                <div class="form-group">
                                    <input type="text" name="username" placeholder="Full Name" required="">
                                    <span class="icon fal fa-user fa-fw"></span>
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email" required="">
                                    <span class="icon fal fa-envelope fa-fw"></span>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="Phone *" required="">
                                    <span class="icon fal fa-phone fa-fw"></span>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="datepicker hasDatepicker" name="time"
                                        placeholder="DD - MM - YYYY" required="" id="dp1699434874914">
                                    <span class="icon fal fa-calendar fa-fw"></span>
                                </div>

                                <div class="form-group">
                                    <input type="text" name="time" placeholder="Guest" required="">
                                    <div class="item-quantity">
                                        <div class="quantity-spinner">
                                            <button type="button" class="minus"><span
                                                    class="fa fa-minus"></span></button>
                                            <input type="text" name="product" value="2" class="prod_qty" readonly="">
                                            <button type="button" class="plus"><span class="fa fa-plus"></span></button>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button class="theme-btn send-btn"><span class="txt">Send Now <i
                                                class="fa fa-angle-right"></i></span></button>
                                </div>

                            </form>

                        </div>
                        <!-- End Booking Form -->

                    </div>

                    <!-- Follow Widget -->
                    <div class="sidebar-widget follow-widget">
                        <div class="sidebar-title">
                            <h5>Follow us</h5>
                        </div>
                        <ul class="social-list">
                            <li class="facebook"><span class="icon fab fa-facebook-f fa-fw"></span> <strong>1250M
                                    +</strong> Followers</li>
                            <li class="twitter"><span class="icon fab fa-twitter fa-fw"></span> <strong>1250M +</strong>
                                Followers</li>
                            <li class="youtube"><span class="icon fab fa-youtube fa-fw"></span> <strong>1250M +</strong>
                                Followers</li>
                            <li class="linkedin"><span class="icon fab fa-linkedin-in fa-fw"></span> <strong>1250M
                                    +</strong> Followers</li>
                        </ul>
                    </div>

                    <!-- Category Widget -->
                    <div class="sidebar-widget category-widget">
                        <div class="sidebar-title">
                            <h5>Category</h5>
                        </div>
                        <ul class="sidebar-category-list">
                            <li style="background-image: url(images/background/category-1.jpg)">
                                <span class="txt">Therapy</span> <span class="number">05</span>
                            </li>
                            <li style="background-image: url(images/background/category-2.jpg)">
                                <span class="txt">Beauty Items</span> <span class="number">09</span>
                            </li>
                            <li style="background-image: url(images/background/category-3.jpg)">
                                <span class="txt">Body Sliming</span> <span class="number">07</span>
                            </li>
                            <li style="background-image: url(images/background/category-4.jpg)">
                                <span class="txt">Fashion Fitness</span> <span class="number">10</span>
                            </li>
                        </ul>
                    </div>

                    <!-- Buy Treker Widget -->
                    <div class="sidebar-widget buy-treker-widget">
                        <div class="widget-content" style="background-image: url(images/background/buy.jpg)">
                            <div class="logo">
                                <a href="index.html"><img src="images/icons/buy-treker.svg" alt=""></a>
                            </div>
                            <div class="text">Awesome Trekking Travel <br> Theme !</div>
                            <a href="#" class="theme-btn buy-now">Buy Now</a>
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