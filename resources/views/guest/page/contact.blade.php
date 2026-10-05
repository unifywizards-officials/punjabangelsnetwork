@extends('layouts.guest.master')


@section('title','Contact')
@section('description','Contact')
@section('keywords','Contact')

@section('page_level_style')
<style>
    
</style>

@endsection

@section('content')
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

<!--====== Start Contact Area ======-->
<section class="blog-area p-t-80 p-b-80">
    <div class="container">
        <div class="row justify-content-lg-start justify-content-center">
            <div class="col-xl-4 col-lg-5 col-md-7 col-sm-10">
                <div class="contact-info-boxes-v2">
                    <div class="contact-info-box m-b-30 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="icon icon-gradient-1">
                            <i class="fal fa-map-marker-alt"></i>
                        </div>
                        <div class="info-body">
                            <h5 class="title">Our Location</h5>
                            <?php 
                            $settingdata = json_decode($setting->location, true); // Unserialize the data		
                            ?>
                            @foreach($settingdata as $settingdata)
                            <p>{{$settingdata['location']}}</p><br>
                            @endforeach
                        </div>
                    </div>
                    <div class="contact-info-box m-b-30 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="icon icon-gradient-2">
                            <i class="fal fa-envelope-open-text"></i>
                        </div>
                        <div class="info-body">
                            <h5 class="title">Email Address</h5>
                            <p><a href="{{$setting->email}}"><span class="__cf_email__">{{$setting->email}}</span></a>
                            </p>
                        </div>
                    </div>
                    <div class="contact-info-box wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon icon-gradient-3">
                            <i class="fal fa-phone"></i>
                        </div>
                        <div class="info-body">
                            <h5 class="title">Call For More</h5>
                            <p><a href="tel:+12059744573">+{{$setting->contact_no}}</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-xl-1 col-md-10">
                <div class="contact-form-area m-t-md-100">
                    <div class="common-heading tagline-boxed m-b-40">
                        <span class="tagline">Send Us Message</span>
                        <h2 class="title">Have Any Questions ? <br> Let’s Start to Talk</h2>
                        @include('layouts.admin.alertmessage')
                    </div>
                    <div class="contact-form-v2">
                        <form id="contactUsForm" action="{{ route('fill_contactus.data') }}" method="POST"
                            enctype="multipart/form-data" data-gtm-form-interact-id="0">
                            @csrf
                            <input type="hidden" name="type" value="contact_form">
                            <!-- <form action="sendemail" method="post"> -->
                            <div class="form-group input-field m-b-30">
                                <input type="text" id="fullName" placeholder="Full Name" name="fullName" required
                                    data-error="Please enter your name">
                                <label for="name">Name</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group input-field m-b-30">
                                <input type="number" id="phoneNumber" placeholder="Phone Number" name="phoneNumber" required>
                                <label for="phone">Phone</label>
                                <div class="help-block with-errors"></div>

                            </div>
                            <div class="form-group input-field m-b-30">
                                <input type="email" id="email" placeholder="Email Address" name="email" required
                                    data-error="Please enter your Email">
                                <label for="email">Email</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group input-field m-b-30">
                                <input type="text" id="subject" placeholder="I Would Like To Discuss" name="subject">
                                <label for="subject">Subject</label>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group input-field textarea-field m-b-30">
                                <textarea id="message" placeholder="Message" name="message" required
                                    data-error="Please enter your Message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="form-group mb-0 input-field">
                                <button type="submit" class="template-btn">Send Message <i
                                        class="fas fa-arrow-right"></i></button>
                                <!-- <div id="msgSubmit"></div> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-map-section">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3003.30721836039!2d-81.52435138431093!3d41.17146597928456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8830d887271e7113%3A0xb20b3765912196bf!2s353%20Middlestone%20Way%2C%20Cuyahoga%20Falls%2C%20OH%2044223%2C%20USA!5e0!3m2!1sen!2sin!4v1666354992015!5m2!1sen!2sin"
        width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<!--====== End Contact Area ======-->

<!--====== Start Scroll To Top ======-->
<a href="#" class="back-to-top" id="scroll-top">
    <i class="far fa-angle-up"></i>
</a>
<!--====== End Scroll To Top ======-->
@endsection

@section('page_level_script')

<script>

</script>
@endsection