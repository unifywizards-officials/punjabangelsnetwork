@extends('layouts.guest.master')
@section('page_level_style')
    <style>
        @media screen and (min-width: 1100px) and (max-width: 1796px) {
            .donations-card__content {
                min-height: 320px;
            }

            .blog-card__content {
                min-height: 154px;
            }
        }

        #blog-carousel-1 {
  z-index: 10;
  position: relative;
}

#blog-carousel-2 {
  z-index: 5;
  position: relative;
}

.section {
  padding: 50px 0;
  overflow: hidden;
}





   @media screen  and (max-width: 786px) {
       
           .c-testimonials {
        min-height: auto;}
        a.c-card-testimonial__link.simple-link {
    background-color: transparent !important;
    color: #983595 !important;
}
   }
   
    
   

    </style>
@endsection
@section('content')
    <section class="slider-one">
        <div class="thm-owl__carousel owl-carousel owl-theme"
            data-owl-options='{
      "loop": true,
      "autoplay": true,
      "autoplayTimeOut": 7000,
      "items": 1,
      "margin": 0,
      "animateIn": "fadeIn",
      "animateOut": "slideOutDown",
      "nav": true,
      "dots": false,
      "navText": ["<span class=\"paroti-icon-left-arrow\"></span>","<span class=\"paroti-icon-right-arrow\"></span>"]
      }'>
            <div class="item">
                <div class="slider-one__item">
                    <div class="slider-one__image" style="background-image: url(guest/images/backgrounds/slider-1-1.jpg);">
                    </div>
                    <div class="container">
                        <h2 class="slider-one__title">Empowering Dreams, Fueling Innovation </h2>
                        <!-- <p class="slider-one__text">Turning Ambitions into Assets, One Strategic Investment at a
                                      Time</p> -->
                        <!-- /.slider-one__text -->
                        <div class="slider-one__btns">
                            <a href="{{ route('about') }}" class="thm-btn slider-one__btn">
                                <span>Discover More</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-one__item">
                    <div class="slider-one__image" style="background-image: url(guest/images/backgrounds/slider-team.jpg);">
                    </div>
                    <div class="container">
                        <h2 class="slider-one__title"> Transforming Visionaries into Leaders </h2>
                        <!-- <p class="slider-one__text">Your Success = Our Mission: forging a path to unparalleled
                                      success </p> -->
                        <!-- /.slider-one__text -->
                        <div class="slider-one__btns">
                            <a href="{{ route('about') }}" class="thm-btn slider-one__btn">
                                <span>Discover More</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-one__item">
                    <div class="slider-one__image" style="background-image: url(guest/images/backgrounds/slider-1-3.jpg);">
                    </div>
                    <div class="container">
                        <h2 class="slider-one__title"> Meet Angel Investors for Boundless Growth </h2>
                        <!-- <p class="slider-one__text">Aspirations meet opportunities through our Angel Investors
                                      Network</p> -->
                        <!-- /.slider-one__text -->
                        <div class="slider-one__btns">
                            <a href="{{ route('about') }}" class="thm-btn slider-one__btn">
                                <span>Discover More</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-one__item">
                    <div class="slider-one__image" style="background-image: url(guest/images/backgrounds/slider-1-2.jpg);">
                    </div>
                    <div class="container">
                        <h2 class="slider-one__title"> CapTech 2024: Business Delegation to Australia </h2>
                        <!-- <p class="slider-one__text">Aspirations meet opportunities through our Angel Investors
                                      Network</p> -->
                        <!-- /.slider-one__text -->
                        <div class="slider-one__btns">
                            <a href="{{ route('contact') }}" class="thm-btn slider-one__btn">
                                <span>Discover More</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-one__item">
                    <div class="slider-one__image"
                        style="background-image: url(guest/images/backgrounds/fund-startup-bg.jpg);">
                    </div>
                    <div class="container">
                        <h2 class="slider-one__title">Fundraising Support for Start-Ups of Up to Rs. 100 Cr </h2>
                        <!-- <p class="slider-one__text">Aspirations meet opportunities through our Angel Investors
                                      Network</p> -->
                        <!-- /.slider-one__text -->
                        <div class="slider-one__btns">
                            <a href="{{ route('about') }}" class="thm-btn slider-one__btn">
                                <span>Discover More</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sec-pad-top sec-pad-bottom about-two">
        <img src="{{ asset('guest/images/shapes/about-1-1.png') }}" class="about-two__shape-1 float-bob-x" alt="">
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-md-12 col-lg-6">
                    <div class="about-two__image">
                        <div class="about-two__image__shape-1"></div>
                        <div class="about-two__image__shape-2"></div>
                        <img src="{{ asset('guest/images/who-we-are.png') }}" class="wow fadeInLeft"
                            data-wow-duration="1500ms" alt="">
                        <div class="about-two__image__caption">
                            <!-- <h3 class="about-two__image__caption__count count-box">
                                         <span class="count-text" data-stop="11" data-speed="1500"></span>+
                                         </h3>
                                         <p class="about-two__image__caption__text">Years of personal
                                         expeirece</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="about-two__content">
                        <div class="sec-title">
                            <p class="sec-title__tagline"> Architects of Ambition- </p>
                            <!-- /.sec-title__tagline -->
                            <h2 class="sec-title__title">That's who we are </h2>
                        </div>
                        <!-- /.sec-title -->
                        <p class="about-two__text text-align-justify">Welcome to Punjab Angels, India's foremost platform
                            dedicated to
                            cultivating an startup ecosystem. We are more than just an investment network;
                            we are architects of ambition, fostering a community where passionate founders thrive.
                            At Punjab Angels, we're not just building businesses; we're building a future.
                        </p>
                        <br>
                        <p class="about-two__text text-align-justify"> We take
                            pride in nurturing visionary founders, equipping them with a profound understanding of
                            venture investing as a powerful asset class. Our commitment extends beyond funding;
                            we're here to create platforms where both founders and investors embark on a journey of
                            learning, investing, and unparalleled growth. We don't just invest in businesses; we
                            invest in the limitless potential of dreams.
                        </p>
                        <!-- /.about-two__text -->
                        <!-- <ul class="list-unstyled about-two__info">
                                      <li class="about-two__info__item">
                                       <i class="paroti-icon-sponsor"></i>
                                       <h3 class="about-two__info__title">Let’s sponsor an
                                        entire project</h3>
                                      </li>
                                      <li class="about-two__info__item" style="--accent-color: #8139e7;">
                                       <i class="paroti-icon-solidarity"></i>
                                       <h3 class="about-two__info__title">Donate to the
                                        new cause</h3>
                                      </li>
                                      </ul> -->
                        <!-- <ul class="list-unstyled about-two__list">
                                      <li>
                                       <i class="fa fa-check-circle"></i>
                                       If you are going to use a passage of you need.
                                      </li>
                                      <li>
                                       <i class="fa fa-check-circle"></i>
                                       Lorem ipsum available, but the majority have suffered.
                                      </li>
                                      </ul> -->
                        <div class="about-two__btns">
                            <a href="{{ route('contact') }}" class="thm-btn about-two__btn">
                                <span>Talk With Us</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </section>
    <section class=" ">
        <div class="container">
            <div class="sec-title ">
                <p class="sec-title__tagline">Revolutionizing Entrepreneurship</p>
                <!-- /.sec-title__tagline -->
                <h2 class="sec-title__title"> Services We Offer </h2>
            </div>
            <!-- /.sec-title -->
            <div class="donations-carousel">
                <div class="thm-tns__carousel" id="donations-carousel-1"
                    data-tns-options='{
            "container": "#donations-carousel-1",
            "loop": true,
            "autoplay": true,
            "items": 1,
            "gutter": 0,
            "mouseDrag": true,
            "touch": true,
            "nav": true,
            "autoplayButtonOutput": false,
            "controls": false,
            "responsive": {
            "0": {
            "items": 1,
            "gutter": 0
            },
            "576": {
            "items": 1,
            "gutter": 0
            },
            "768": {
            "items": 2,
            "gutter": 30
            },
            "992": {
            "items": 2,
            "gutter": 30
            },
            "1200": {
            "items": 3,
            "gutter": 30
            }
            }
            }'>
                    <div class="item">
                        <div class="donations-card">
                            <div class="donations-card__image">
                                <img src="{{ asset('guest/images/service-images/funding.png') }}" alt="">
                                <!-- <div class="donations-card__category">
                                            <a href="#">Service</a>
                                            </div> -->
                            </div>
                            <div class="donations-card__content">
                                <h3 class="donations-card__title"><a href="#">
                                        Fund Raising </a>
                                </h3>
                                <!-- /.donations-card__title -->
                                <p class="donations-card__text">Secure the support you need to flourish. Our
                                    Fund-Raising service simplifies the process, helping startups navigate the
                                    journey to financial backing effortlessly.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="donations-card" style="--accent-color: #39b6e7;">
                            <div class="donations-card__image">
                                <img src="{{ asset('guest/images/service-images/due-diligence.png') }}" alt="">
                                <!-- /.donations-card__category -->
                            </div>
                            <!-- /.donations-card__image -->
                            <div class="donations-card__content">
                                <h3 class="donations-card__title"><a href="#">Due Diligence
                                    </a>
                                </h3>
                                <!-- /.donations-card__title -->
                                <p class="donations-card__text">Our Due Diligence service is your compass. Providing
                                    expert counseling, we ensure every step is backed by strategic insights,
                                    offering a clear roadmap for your entrepreneurial journey.
                                </p>
                                <!-- /.donations-card__amount -->
                            </div>
                            <!-- /.donations-card__content -->
                        </div>
                        <!-- /.donations-card -->
                    </div>
                    <div class="item">
                        <div class="donations-card" style="--accent-color: #8139e7;">
                            <div class="donations-card__image">
                                <img src="{{ asset('guest/images/service-images/mentorship.png') }}" alt="">
                                <!-- /.donations-card__category -->
                            </div>
                            <!-- /.donations-card__image -->
                            <div class="donations-card__content">
                                <h3 class="donations-card__title"><a href="#">Mentorship </a>
                                </h3>
                                <!-- /.donations-card__title -->
                                <p class="donations-card__text">Grow with guidance! Join our Accelerator Programs,
                                    dive into enriching Masterclasses, and tune in to insightful Podcasts. Because
                                    success is sweeter when you have a mentor by your side.
                                </p>
                                <!-- /.donations-card__amount -->
                            </div>
                            <!-- /.donations-card__content -->
                        </div>
                        <!-- /.donations-card -->
                    </div>
                    <div class="item">
                        <div class="donations-card">
                            <div class="donations-card__image">
                                <img src="{{ asset('guest/images/service-images/Batch.png') }}" alt="">
                                <!-- /.donations-card__category -->
                            </div>
                            <!-- /.donations-card__image -->
                            <div class="donations-card__content">
                                <h3 class="donations-card__title"><a href="#">Incubation Batch
                                    </a>
                                </h3>
                                <!-- /.donations-card__title -->
                                <p class="donations-card__text">Join our Incubation Batch 2023 for a launching pad
                                    to success. Nurture your startup in a supportive environment, fostering
                                    innovation and growth. Your journey begins here.
                                </p>
                                <!-- /.donations-card__amount -->
                            </div>
                            <!-- /.donations-card__content -->
                        </div>
                        <!-- /.donations-card -->
                    </div>
                    <div class="item">
                        <div class="donations-card" style="--accent-color: #fdbe44;">
                            <div class="donations-card__image">
                                <img src="{{ asset('guest/images/service-images/center.png') }}" alt="">
                                <!-- /.donations-card__category -->
                            </div>
                            <!-- /.donations-card__image -->
                            <div class="donations-card__content">
                                <h3 class="donations-card__title"><a href="#">Incubation Centre
                                        Development Program </a>
                                </h3>
                                <!-- /.donations-card__title -->
                                <p class="donations-card__text">Build the future with our Incubation Centre
                                    Development Program (ICDP). Turn your vision into a vibrant startup ecosystem,
                                    tailored for success from the ground up
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="donations-card" style="--accent-color: #fdbe44;">
                            <div class="donations-card__image">
                                <img src="{{ asset('guest/images/service-images/course.png') }}" alt="">
                                <!-- /.donations-card__category -->
                            </div>
                            <!-- /.donations-card__image -->
                            <div class="donations-card__content">
                                <h3 class="donations-card__title"><a href="#">Foundation Course
                                        for Start-Ups </a>
                                </h3>
                                <!-- /.donations-card__title -->
                                <p class="donations-card__text">Dive into our Foundation Course for Start-Ups—your
                                    guide from idea inception to IPO readiness. We cover it all, from crafting
                                    crucial agreements to unlocking the key stages of Start-Ups.
                                </p>
                                <!-- /.donations-card__amount -->
                            </div>
                            <!-- /.donations-card__content -->
                        </div>
                        <!-- /.donations-card -->
                    </div>
                </div>
            </div>
            <!-- /.donations-carousel -->
        </div>
    </section>
    {{--  
<section class="discuss_forum sec-pad-top sec-pad-bottom">
   <div class="container">
      <div class="row">
         <div class="col-md-12 col-lg-8">
            <div class="forum_title">
               <h3>Where Minds Meet Money: Join the Discussion Hub for Exceptional Growth </h3>
            </div>
            <div class="forum_video mb-30" style="position: relative;">
               <a href="https://www.youtube.com/watch?v=CWCPovmNWK8" class="video-one__btn video-popup" style="position: absolute;left: 20px; top: 10px;">
               <i class="fa fa-play"></i>
               </a>
               <img src="{{asset('guest/images/discuss-forum.png')}}">
            </div>
            <div class="row">
               <div class="col-md-12 col-lg-12 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="200ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">
                  <div class="about-five__item br-20" style="--accent-color: var(--paroti-primary);">
                     <div class="row">
                        <div class="card-content col-lg-8">
                           <h3 class="about-five__item__title"><a href="#">New Forum Disucssion Title
                              Here</a>
                           </h3>
                           <p style="color:#ffffff !important; font-size: 15px;">Lorem Ipsum is simply
                              dummy text of the printing and typesetting industry. Lorem Ipsum has
                              been the industry's standard dummy text ever since the 1500s,
                           </p>
                        </div>
                        <div class="about-five__item__icon col-lg-4">
                           <i class="paroti-icon-peace-1"></i>
                           <h3 href="#" class="btn">Join Now</h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-12 col-lg-4">
            <div class="forum_title">
               <blockquote class="about-five__blockquote">
                  <i class="paroti-icon-quote"></i>
                  No matter what problem you face, you have found an trust worthy agency that can help
                  you.
               </blockquote>
               <br>
               <p>Conversations that Matter- where ideas take flight and innovation knows no limits. </p>
            </div>
            <div class="forum_images" style="background-image: url(guest/images/discuss-img.png); position: relative;">
               <a href="#" class="thm-btn testimonials-one__btn" style="position: absolute; right: 40px; bottom: 20px;"><span>Join Our Forum
               Now</span></a>
            </div>
         </div>
      </div>
   </div>
</section>
--}}
    <section class="sec-pad-top sec-pad-bottom about-one">
        <div class="about-one__shape-1 float-bob-y">
            <img src="{{ asset('guest/images/shapes/about-1-1.png') }}" alt="">
        </div>
        <!-- /.about-one__shape-1 -->
        <div class="about-one__shape-2 float-bob-x">
            <img src="{{ asset('guest/images/shapes/about-1-1.png') }}" alt="">
        </div>
        <!-- /.about-one__shape-2 -->
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-one__images" data-wow-duration="1500ms">
                        <img src="{{ asset('guest/images/sahil-makkar.png') }}" alt="">
                    </div>
                    <!-- /.about-one__images -->
                </div>
                <div class="col-lg-6 offset-lg-1 mt-30 position-relative">
                    <div class="about-one__content">
                        <div class="sec-title">
                            <p class="sec-title__tagline">Meet Our Team </p>
                            <!-- /.sec-title__tagline -->
                            <h2 class="sec-title__title">The Chairman</h2>
                        </div>
                        <!-- /.sec-title -->
                        <!-- <ul class="list-unstyled about-one__list">
                                      <li>
                                      </ul> -->
                        {{-- 
               <p class="about-one__text">13 years of Experience as a <span>Chartered Accountant</span>, Alumnus
                  of
                  <span>Indian School of Business (ISB)</span> and Executive Education from <span> Indian
                  Institute of
                  Management (IIM)</span>- Bangalore. Educationist teaching finance to <span> Civil Services
                  aspirants </span>
                  and <span> MBA executives</span> for 12 years. He has also done post Qualification certificate
                  courses
                  on Company Valuations, Concurrent Audit of Banks, Anti-Money Laundering Laws.
               </p>
               --}}
                        <p class="about-one__text"> <span>Chairman & CEO</span> of Punjab Angels Network, Fellow
                            <span>Chartered Accountant</span>, An Alumnus of <span>Indian School of Buisness (ISB)</span>
                            and has done Executive Education Programme from <span>Indian Institute of Management (IIM) –
                                Bangalore. </span>
                        </p>
                        <p class="read-more-para">Sahil Makkar is a Nationally recognized Exponential Thought Leader,
                            Strategic Business/Startup & Scale-up Advisor, He has years of experience in assisting
                            Start-up’s/ Corporates clients in raising capital both equity and debt, mergers and
                            acquisitions, Scaling up Businesses. </p>
                        <div class="about-two__btns">
                            <a href="{{ route('our-team') }}#chairman" class="thm-btn about-two__btn">
                                <span>Read More</span>
                            </a>
                        </div>
                        {{-- 
               <a href="https://www.linkedin.com/in/casahilmakkar/">
                  <div class="about-one__meta clearfix">
                     <img src="{{ asset('guest/images/resources/ceo.png') }}" alt="">
               <a href="https://www.linkedin.com/in/casahilmakkar/" target="_blank">
               <h3 class="about-one__name">Mr. Sahil Makkar</h3>
               </a>
               <p class="about-one__designation">Chairman &amp; CEO</p>
               </div>
               </a> --}}
                        <!-- /.about-one__meta -->
                    </div>
                    <!-- /.about-one__content -->
                </div>
                <!-- /.col-lg-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    <section class="sec-pad-top sec-pad-bottom sponsor-carousel">
        <div class="container">
            <div class="sec-title text-center">
                <p class="sec-title__tagline">The masterminds of the Business World</p>
                <!-- /.sec-title__tagline -->
                <h2 class="sec-title__title"> Board of Advisors
                </h2>
                <p>Our Eminent Board of advisor constitutes brilliant minds from distinct domains with years of experience.
                </p>
            </div>
            <div class="row justify-content-center">
                @foreach ($board_adviser as $board_adviser)
                    <div class="col-lg-3 col-md-6">
                        <div class="item mb-20">
                            <div class="gallery-card">
                                <div class="gallery-card__image" style="    justify-content: center; display: flex;">
                                    @if ($board_adviser->image)
                                        <img src="{{ asset($board_adviser->image) }}"
                                            alt="{{ $board_adviser->image_alt }}">
                                    @else
                                        <img src="{{ asset('guest/images/businsess_placeholder2.png') }}"
                                            alt="placeholder-business-image">
                                    @endif
                                </div>
                                <div class="gallery-card__content">
                                    <a href="{{ $board_adviser->linkedin }}" target="_blank">
                                        <h4>{{ $board_adviser->name }}</h4>
                                        <p>{{ $board_adviser->position }}</p>
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- /.sec-pad-top sec-pad-bottom -->
    <section class="sec-pad-top testimonials-one testimonials-new-bg testimonials-one--bottom-pd-lg">
        <div class="testimonials-one__bg" style="background-image: url(guest/images/backgrounds/partner-bg-1.png);"></div>
        <!-- /.testimonials-one__bg -->
        <div class="testimonials-one__gallery">
        </div>
        <!-- /.testimonials-one__gallery -->
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-lg-5">
                    <div class="testimonials-one__content">
                        <div class="sec-title">
                            <p class="sec-title__tagline">Faces Behind the Fortune:</p>
                            <h2 class="sec-title__title">Our Network of Visionary Investors </h2>
                        </div>
                        <!-- /.sec-title -->
                        <!-- <p class="testimonials-one__text">Proin a lacus arcu. Nullam id dui eu orci maximus. <br>
                                      Cras
                                      at auctor lectus, pretium tellus.</p> -->
                        <a href="{{ route('our-team') }}" class="thm-btn testimonials-one__btn"><span>See All
                                Investors</span></a>
                    </div>
                    <!-- /.testimonials-one__content -->
                </div>
                <!-- /.col-lg-5 -->
                <div class="col-lg-7">
                    <div class="thm-tns__carousel" id="testimonials-one-carousel-1"
                        data-tns-options='{
               "container": "#testimonials-one-carousel-1",
               "loop": true,
               "autoplay": true,
               "items": 1,
               "gutter": 0,
               "mouseDrag": true,
               "touch": true,
               "nav": false,
               "autoplayButtonOutput": false,
               "controls": false
               }'>
                        <div class="item">
                            <div class="testimonials-card">
                                <i class="paroti-icon-quote testimonials-card__icon"></i>
                                <img src="{{ asset('guest/images/shapes/testimonials-item-bg-1-1.png') }}"
                                    class="testimonials-card__bg" alt="">
                                <p class="testimonials-card__text">At Punjab Angels Network, we are dedicated to building a
                                    vibrant entrepreneurial ecosystem by connecting visionary investors with promising
                                    startups.
                                </p>
                                <!-- /.testimonials-card__text -->
                                <br>
                            </div>
                            <!-- /.testimonials-one__card -->
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-7 -->
            </div>
            <!-- /.row -->
        </div>
    </section>
    <!-- /.testimonials-one -->
    <section class="gallery-one">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($investors as $investors)
                    <div class="col-lg-3 col-md-6 mb-20">
                        <div class="item">
                            <div class="gallery-card">
                                <div class="gallery-card__image">
                                    @if ($investors->image)
                                        <img src="{{ asset($investors->image) }}" alt="{{ $investors->image_alt }}">
                                    @else
                                        <img src="{{ asset('guest/images/businsess_placeholder.png') }}"
                                            alt="placeholder-business-image">
                                    @endif
                                </div>
                                <div class="gallery-card__content">
                                    <a href="{{ $investors->linkedin }}" target="_blank">
                                        <h4>{{ $investors->name }}</h4>
                                        <p>{{ $investors->position }}</p>
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="sec-pad-top sec-pad-bottom donation-two">
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-md-12 col-lg-4">
                    <div class="sec-title">
                        <!-- <p class="sec-title__tagline">Expert Team Members</p>/.sec-title__tagline -->
                        <h2 class="sec-title__title">
                            Building Entrepreneurship Ecosystem
                        </h2>
                    </div>
                    <!-- /.sec-title -->
                    <div class="about-two__btns">
                        <a href="{{ route('contact') }}" class="thm-btn about-two__btn">
                            <span>Talk With Us</span>
                        </a>
                    </div>
                    <!-- /.donation-two__text -->
                </div>
                <!-- /.col-md-12 -->
                <div class="col-md-12 col-lg-6">
                    <div class="thm-owl__carousel owl-carousel owl-theme donation-two__carousel"
                        data-owl-options='{
               "items": 1,
               "margin": 0,
               "loop": true,
               "nav": false,
               "dots": false,
               "autoplay": true,
               "responsive": {
               "0": {
               "items": 1
               },
               "576": {
               "items": 2,
               "margin": 30
               }
               }
               }'>
                        <div class="item">
                            <div class="donation-card-two donation-card-two-custom" style="--accent-color: #fdbe44;">
                                <div class="donation-card-two__bg"></div>
                                <h3 class="donation-card-two__title">
                                    <a href="#">Startups </a>
                                </h3>
                                <p class="donation-card-two__text">Idea, Innovation, Technology, Passion</p>
                                <div class="donation-card-two__shape"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="donation-card-two donation-card-two-custom">
                                <div class="donation-card-two__bg"></div>
                                <h3 class="donation-card-two__title">
                                    <a href="#">Turnaround Consultants </a>
                                </h3>
                                <p class="donation-card-two__text">Guiding direction for the ecosystem</p>
                                <div class="donation-card-two__shape"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="donation-card-two donation-card-two-custom" style="--accent-color: #8139e7;">
                                <div class="donation-card-two__bg"></div>
                                <h3 class="donation-card-two__title">
                                    <a href="#">Corporates</a>
                                </h3>
                                <p class="donation-card-two__text">Support system for the ecosystem, aspirations for
                                    IPO
                                </p>
                                <div class="donation-card-two__shape"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="donation-card-two donation-card-two-custom" style="--accent-color: #8139e7;">
                                <div class="donation-card-two__bg"></div>
                                <h3 class="donation-card-two__title">
                                    <a href="#">Investors</a>
                                </h3>
                                <p class="donation-card-two__text">Boosting entrepreneurship and economic growth</p>
                                <div class="donation-card-two__shape"></div>
                            </div>
                            <!-- /.donation-card-two -->
                        </div>
                        <div class="item">
                            <div class="donation-card-two donation-card-two-custom" style="--accent-color: #8139e7;">
                                <div class="donation-card-two__bg"></div>
                                <h3 class="donation-card-two__title"><a href="#">Academia</a>
                                </h3>
                                <p class="donation-card-two__text">Research partner, Creating talent in the region
                                </p>
                                <div class="donation-card-two__shape"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="donation-card-two donation-card-two-custom" style="--accent-color: #8139e7;">
                                <div class="donation-card-two__bg"></div>
                                <h3 class="donation-card-two__title">
                                    <a href="#">BMO's</a>
                                </h3>
                                <p class="donation-card-two__text">Connecting partners, Awareness about development
                                    happening around the world
                                </p>
                                <div class="donation-card-two__shape"></div>
                            </div>
                        </div>
                    </div>
                    <!-- /.donation-two__carousel -->
                </div>
            </div>
            <!-- /.row -->
        </div>
    </section>
    <!-- /.sec-pad-top sec-pad-bottom -->
    <section class="sec-pad-top sec-pad-bottom cta-one">
        <div class="cta-one__bg" style="background-image: url(guest/images/backgrounds/CTA.png);"></div>
        <div class="cta-one__shape">
        </div>
        <!-- /.cta-one__shape -->
        <!-- /.cta-one__bg -->
        <div class="container  text-center">
            <div class="sec-title">
                <h2 class="sec-title__title">Take the Ultimate Growth wings from your <br>
                    Angel Investors
                </h2>
            </div>
            <!-- /.sec-title -->
            <a href="{{ route('contact') }}" class="thm-btn cta-one__btn"><span>Get Started</span></a>
        </div>
    </section>
    @if ($dynamic_partner->isNotEmpty())
        <section class="sec-pad-top sec-pad-bottom sponsor-carousel">
            <div class="container-fluid">
                <div class="sec-title text-center">
                    <p class="sec-title__tagline">Powering Prosperity Together: </p>
                    <!-- /.sec-title__tagline -->
                    <h2 class="sec-title__title"> Meet Our Dynamic Partners
                    </h2>
                </div>
                <div class="thm-tns__carousel" id="sponsor-carousel-1-1"
                    data-tns-options='{
         "container": "#sponsor-carousel-1-1",
         "loop": true,
         "autoplay": true,
         "items": 2,
         "gutter": 30,
         "mouseDrag": true,
         "touch": true,
         "nav": false,
         "autoplayButtonOutput": false,
         "controls": false,
         "responsive": {
         "0": {
         "items": 2,
         "gutter": 30
         },
         "576": {
         "items": 3,
         "gutter": 30
         },
         "768": {
         "items": 4,
         "gutter": 30
         },
         "992": {
         "items": 4,
         "gutter": 50
         },
         "1200": {
         "items": 5,
         "gutter": 100
         }
         }
         }'>
                    @foreach ($dynamic_partner as $dynamic_partner)
                        <div class="item">
                            @if ($dynamic_partner->image)
                                <a href="{{ $dynamic_partner->website_url }}" target="_blank">
                                    <img src="{{ asset($dynamic_partner->image) }}"
                                        alt="{{ $dynamic_partner->image_alt }}">
                                </a>
                            @else
                                <a href="#">
                                    <img src="{{ asset('guest/images/businsess_placeholder.png') }}"
                                        alt="placeholder-business-image">
                                </a>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- /.sec-pad-top sec-pad-bottom -->
    @endif
    <div class="container">
        <div class="sec-title text-center">
            <p class="sec-title__tagline"> Connect, Collaborate, conquer: </p>
            <!-- /.sec-title__tagline -->
            <h2 class="sec-title__title "> Join Our Events Network for Success </h2>
        </div>
        <div class="row">
            <div class="col-lg-3 d-flex justify-content-center">
                <div class="box-item">
                    <div class="flip-box">
                        <div class="flip-box-front text-center"
                            style="background-image: url('guest/images/drone_shot_v0_bvbh6et7i4w91.avif');">
                            <div class="overlay"></div>
                            <div class="inner color-white">
                                <h3 class="flip-box-header">Weekly Events</h3>
                                <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png')}}" alt=""
                                    class="flip-box-img">
                            </div>
                        </div>
                        <div class="flip-box-back text-center"
                            style="background-image: url('guest/images/download.jpg');">
                            <div class="overlay"></div>
                            <div class="inner color-white">
                                <h3 class="flip-box-header">Tricity</h3>
                                <p>- Chandigarh</p>
                                <p>- Panchkula</p>
                                <p>- Mohali</p>
                                <!-- <button class="flip-box-button">Learn More</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 d-flex justify-content-center">
                <div class="box-item">
                    <div class="flip-box">
                        <div class="flip-box-front text-center"
                            style="background-image: url('guest/images/locations/group-business-people-having-meeting.jpg');">
                            <div class="overlay"></div>
                            <div class="inner color-white">
                                <h3 class="flip-box-header">Monthly Events</h3>
                                <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png')}}" alt=""
                                    class="flip-box-img">
                            </div>
                        </div>
                        <div class="flip-box-back text-center"
                            style="background-image: url('guest/images/locations/monthly.jpg');">
                            <div class="overlay"></div>
                            <div class="inner color-white">
                                <h3 class="flip-box-header">Northen India</h3>
                                <p>- Ludhiana</p>
                                <p>- Amritsar</p>
                                <p>- Gurugram</p>
                                <p>- Shimla</p>
                                <!-- <button class="flip-box-button">Learn More</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 d-flex justify-content-center">
                <div class="box-item">
                    <div class="flip-box">
                        <div class="flip-box-front text-center filter-"
                            style="background-image: url('guest/images/locations/quaterly-1.avif');">
                            <div class="overlay"></div>
                            <div class="inner color-white">
                                <h3 class="flip-box-header">Quaterly Events</h3>
                                <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png')}}" alt=""
                                    class="flip-box-img">
                            </div>
                        </div>
                        <div class="flip-box-back text-center"
                            style="background-image: url('guest/images/locations/quaterly-2.jpg');">
                            <div class="overlay"></div>
                            <div class="inner color-white">
                                <h3 class="flip-box-header">Business Hubs of India</h3>
                                <p>- Mumbai </p>
                                <p>- Bengaluru</p>
                                <p>- Hyderabad</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 d-flex justify-content-center">
                <div class="box-item">
                    <div class="flip-box">
                        <div class="flip-box-front text-center filter-"
                            style="background-image: url('https://s25.postimg.cc/l2q9ujy4f/cta-4.png');">
                            <div class="overlay"></div>
                            <div class="inner color-white">
                                <h3 class="flip-box-header">Annual Events</h3>
                                <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png')}}" alt=""
                                    class="flip-box-img">
                            </div>
                        </div>
                        <div class="flip-box-back text-center"
                            style="background-image: url('https://s25.postimg.cc/l2q9ujy4f/cta-4.png');">
                            <div class="overlay"></div>
                            <div class="inner color-white">
                                <h3 class="flip-box-header">Business Hubs of the World</h3>
                                <p>- UK</p>
                                <p>- US</p>
                                <p>- Canada</p>
                                <p>- Australia</p>
                                <p>- South Africa</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if ($startup_portfolio->isNotEmpty())
        <section class="sec-pad-top sec-pad-bottom sponsor-carousel">
            <div class="container-fluid">
                <div class="sec-title text-center">
                    <p class="sec-title__tagline">Explore an Insight to our proficiency- </p>
                    <!-- /.sec-title__tagline -->
                    <h2 class="sec-title__title"> STARTUPS PORTFOLIO
                    </h2>
                </div>
                <div class="thm-tns__carousel" id="sponsor-carousel-1"
                    data-tns-options='{
         "container": "#sponsor-carousel-1",
         "loop": true,
         "autoplay": true,
         "items": 1,
         "gutter": 30,
         "mouseDrag": true,
         "touch": true,
         "nav": false,
         "autoplayButtonOutput": false,
         "controls": false,
         "responsive": {
         "0": {
         "items": 2,
         "gutter": 5
         },
         "576": {
         "items": 3,
         "gutter": 10
         },
         "768": {
         "items": 4,
         "gutter": 10
         },
         "992": {
         "items": 5,
         "gutter": 25
         },
         "1200": {
         "items": 6,
         "gutter": 25
         }
         }
         }'>
                    @foreach ($startup_portfolio as $startup_portfolio)
                        <div class="item">
                            @if ($startup_portfolio->image)
                                <a href="{{ $startup_portfolio->website_url }}" target="_blank">
                                    <img src="{{ asset($startup_portfolio->image) }}"
                                        alt="{{ $startup_portfolio->image_alt }}">
                                </a>
                            @else
                                <a href="#">
                                    <img src="{{ asset('guest/images/businsess_placeholder.png') }}"
                                        alt="placeholder-business-image">
                                </a>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- /.sec-pad-top sec-pad-bottom -->
    @endif
    <section class="funfact-two sec-pad-top sec-pad-bottom"
        style="background-image: url(guest/images/backgrounds/funfact-bg-1-1.png);">
        <div class="funfact-two__shape"></div>
        <!-- /.funfact-two__shape -->
        <div class="container">
            <div class="sec-title text-center">
                <p class="sec-title__tagline text-white">Let’s support us to help them</p>
                <!-- /.sec-title__tagline -->
                <h2 class="sec-title__title text-white">Join your hands with us for <br>a better life and future</h2>
            </div>
            <!-- /.sec-title -->
            <ul class="list-unstyled funfact-two__list">
                <li class="funfact-two__list__item">
                    <div class="funfact-two__list__icon">
                        <i class="paroti-icon-campaign"></i>
                    </div>
                    <!-- /.funfact-two__list__icon -->
                    <h3 class="funfact-two__list__count count-box text-white">
                        <span class="count-text" data-stop="100" data-speed="1500"></span>+<!-- /.count-text -->
                    </h3>
                    <!-- /.funfact-two__list__count count-box -->
                    <p class="funfact-two__list__text text-white">Total Events</p>
                    <!-- /.funfact-two__list__text -->
                </li>
                <!-- /.funfact-two__list__item -->
                <li class="funfact-two__list__item" style="--accent-color: #fdbe44;">
                    <div class="funfact-two__list__icon">
                        <i class="paroti-icon-budget"></i>
                    </div>
                    <!-- /.funfact-two__list__icon -->
                    <h3 class="funfact-two__list__count count-box text-white">
                        <span class="count-text" data-stop="56" data-speed="1500"></span><!-- /.count-text -->
                    </h3>
                    <!-- /.funfact-two__list__count count-box -->
                    <p class="funfact-two__list__text text-white">Investors</p>
                    <!-- /.funfact-two__list__text -->
                </li>
                <!-- /.funfact-two__list__item -->
                <li class="funfact-two__list__item" style="--accent-color: #138999;">
                    <div class="funfact-two__list__icon">
                        <i class="paroti-icon-social-campaign"></i>
                    </div>
                    <!-- /.funfact-two__list__icon -->
                    <h3 class="funfact-two__list__count count-box text-white">
                        <span class="count-text" data-stop="20" data-speed="1500"></span><!-- /.count-text -->
                    </h3>
                    <!-- /.funfact-two__list__count count-box -->
                    <p class="funfact-two__list__text text-white">Partners</p>
                    <!-- /.funfact-two__list__text -->
                </li>
                <!-- /.funfact-two__list__item -->
                <li class="funfact-two__list__item" style="--accent-color: #8139e7;">
                    <div class="funfact-two__list__icon">
                        <i class="paroti-icon-help"></i>
                    </div>
                    <!-- /.funfact-two__list__icon -->
                    <h3 class="funfact-two__list__count count-box text-white">
                        <span class="count-text" data-stop="12" data-speed="1500"></span><!-- /.count-text -->
                    </h3>
                    <!-- /.funfact-two__list__count count-box -->
                    <p class="funfact-two__list__text text-white">Board of Advisors</p>
                    <!-- /.funfact-two__list__text -->
                </li>
                <!-- /.funfact-two__list__item -->
            </ul>
            <!-- /.list-unstyled -->
        </div>
    </section>
    <!-- /.funfact-two -->
    <section class=" sec-pad-top sec-pad-bottom">
        <div class="container">
            <div class="sec-title text-center">
                <p class="sec-title__tagline"> Join the Network </p>
                <!-- /.sec-title__tagline -->
                <h2 class="sec-title__title sub-title-h">Discover the power of membership with <br>India's largest
                    revenue-based
                    financing platform
                </h2>
            </div>
            <!-- /.sec-title -->
            <div class="c-testimonials">
                <ul class="c-testimonials__items swiper-wrapper">
                    <!-- CARD 1 -->
                    <!-- <li class="c-testimonials__item c-card-testimonial swiper-slide">
                                   <div class="c-card-testimonial__profile">
                                    <img src="{{ asset('guest/images/Network/startups.png') }}" alt="" class="c-card-testimonial__image">
                                   </div>
                                   
                                   <div class="c-card-testimonial__description">
                                   
                                   
                                    <div class="c-card-testimonial__author">
                                     Start-Ups
                                     <div class="under-line"></div>
                                    </div>
                                    <br>
                                   
                                    <div class="c-card-testimonial__excerpt">
                                     <ul>
                                      <li>Curated networking events and investor pitch opportunities
                                   
                                      </li>
                                      <li> Mentorship and guidance from experienced entrepreneurs and industry experts
                                   
                                      </li>
                                      <li>Access to educational resources, online workshops, and webinars
                                   
                                      </li>
                                      <li> Assistance in fundraising and connections with potential investors
                                   
                                      </li>
                                      <li> Exclusive access to funding opportunities
                                   
                                      </li>
                                      <li>Discounted co-working space and infrastructure support through workspace
                                       partners
                                   
                                      </li>
                                      <li>Cost-effective professional services with partner organizations
                                   
                                      </li>
                                      <li>Funding options available starting from as low as 1 Lakh</li>
                                     </ul>
                                    </div>
                                   
                                    <a href="#" class="c-card-testimonial__link" target="_blank">
                                     Become a member
                                    </a>
                                    <div class="border-design">
                                     <span class="c-card-testimonial__job">
                                      Startups interested in Mentorship or Fundraising, Please click here
                                     </span>
                                    </div>
                                   </div>
                                   </li> -->
                    <!-- CARD 2 -->
                    <li class="c-testimonials__item c-card-testimonial swiper-slide">
                        <div class="c-card-testimonial__profile">
                            <img src="{{ asset('guest/images/Network/investors.png') }}" alt=""
                                class="c-card-testimonial__image">
                        </div>
                        <div class="c-card-testimonial__description">
                            <div class="c-card-testimonial__author">
                                Investors
                                <div class="under-line"></div>
                            </div>
                            <br>
                            <div class="c-card-testimonial__excerpt">
                                <ul>
                                    <li>Gain exclusive entry to a network of promising startups and investment
                                        opportunities
                                    </li>
                                    <li>Enjoy exclusive access to comprehensive due diligence reports and market
                                        insights
                                    </li>
                                    <li> Access curated investment deals exclusively available to you
                                    </li>
                                    <li>Receive priority consideration for investment deals
                                    </li>
                                    <li>
                                        Attend invitations-only pitch events and exclusive networking sessions for
                                        investors
                                    </li>
                                    <li>Benefit from end-to-end support for startup investments
                                    </li>
                                    <li>Participate in investor masterclasses and workshops for continuous learning
                                    </li>
                                    <li>Explore opportunities to join investment syndicates and co-investment deals
                                    </li>
                                    <li>Seize the opportunity to start investing from as low as 1 Lakh onward</li>
                                </ul>
                            </div>
                            <a href="{{ route('investor-enrollment') }}" class="c-card-testimonial__link"
                                target="_blank">
                                Begin Your Investment Journey
                            </a>
                            {{-- 
                  <div class="border-design">
                     <span class="c-card-testimonial__job">
                     Investors, interested in investing with PAN, Please <a href=""> Click Here</a>
                     </span>
                  </div>
                  --}}
                        </div>
                    </li>
                    <li class="c-testimonials__item c-card-testimonial swiper-slide">
                        <div class="c-card-testimonial__profile">
                            <img src="{{ asset('guest/images/Network/corprates.png') }}" alt=""
                                class="c-card-testimonial__image">
                        </div>
                        <div class="c-card-testimonial__description">
                            <div class="c-card-testimonial__author">
                                Corporates
                                <div class="under-line"></div>
                            </div>
                            <br>
                            <div class="c-card-testimonial__excerpt">
                                <ul>
                                    <li>Exclusive invites to curated networking events and pitch sessions
                                    </li>
                                    <li>Entry to a wealth of educational resources, online workshops, and webinars
                                    </li>
                                    <li>Connect with a network of promising startups and investors
                                    </li>
                                    <li>Attend masterclasses and in-person workshops for hands-on learning
                                    </li>
                                    <li>Avail discounted co-working space and infrastructure support through our
                                        workspace partners
                                    </li>
                                    <li>Tap into cost-effective professional services provided by our partner
                                        organization
                                    </li>
                                </ul>
                            </div>
                            <a href="{{ route('corporate-membership-enrollment') }}" class="c-card-testimonial__link simple-link"
                                target="_blank">
                                Get Started With Corporate Membership
                            </a>
                            {{-- 
                  <div class="border-design">
                     <span class="c-card-testimonial__job">
                     Corporates interested in Membership, Please <a href=""> Click Here</a>
                     </span>
                  </div>
                  --}}
                        </div>
                    </li>
                </ul>
                <div class="c-testimonials__pagination"></div>
                <div class="c-testimonials__arrows">
                    <button class="c-testimonials__arrow-prev">Prev</button>
                    <button class="c-testimonials__arrow-next">Next</button>
                </div>
            </div>
        </div>
    </section>
    @if ($upcoming_event->isNotEmpty() || $past_event->isNotEmpty())
<section class="sec-pad-top sec-pad-bottom section">
  <div class="container">
    <div class="row">
      <!-- Upcoming Events -->
      <div class="col-lg-5">
        <div class="sec-title text-center">
          <p class="sec-title__tagline">Watch our latest Events</p>
          <h2 class="sec-title__title">Latest Events</h2>
        </div>
        @if ($upcoming_event->isNotEmpty())
          <div class="blog-carousel">
            <div class="thm-tns__carousel" id="blog-carousel-1"
                 data-tns-options='{
                  "container": "#blog-carousel-1",
                  "loop": true,
                  "autoplay": true,
                  "items": 1,
                  "mouseDrag": true,
                  "touch": true,
                  "nav": false,
                  "autoplayButtonOutput": false,
                  "controls": false,
                  "responsive": {
                    "0": { "items": 1, "gutter": 0 },
                    "768": { "items": 1, "gutter": 30 },
                    "992": { "items": 1, "gutter": 30 },
                    "1200": { "items": 1, "gutter": 30 }
                  }
                }'>
              @foreach ($upcoming_event as $event)
                <div class="item">
                  <div class="blog-card">
                    <div class="blog-card__image">
                      <img src="{{ asset($event->image) }}" alt="{{ $event->image_alt }}">
                      <div class="blog-card__date">
                        <?php $date = \Carbon\Carbon::parse($event->publish_date); ?>
                        <span>{{ $date->format('d') }}</span>{{ $date->format('M') }}<br>{{ $date->format('Y') }}
                      </div>
                    </div>
                    <div class="blog-card__content">
                      <h3 class="blog-card__title">
                        <a href="{{ route('event.detail', [$event->slug]) }}">{{ $event->heading }}</a>
                      </h3>
                      <a href="{{ route('event.detail', [$event->slug]) }}" class="blog-card__links">
                        <i class="fa fa-angle-double-right"></i> Read More
                      </a>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        @else
          <div class="alert alert-warning">No Events Found!</div>
        @endif
      </div>

      <!-- Past Events -->
      <div class="col-lg-5 offset-lg-2">
        <div class="sec-title text-center">
          <p class="sec-title__tagline">Watch our Past Events</p>
          <h2 class="sec-title__title">Past Events</h2>
        </div>
        @if ($past_event->isNotEmpty())
          <div class="blog-carousel">
            <div class="thm-tns__carousel" id="blog-carousel-2"
                 data-tns-options='{
                  "container": "#blog-carousel-2",
                  "loop": true,
                  "autoplay": true,
                  "items": 1,
                  "mouseDrag": true,
                  "touch": true,
                  "nav": false,
                  "autoplayButtonOutput": false,
                  "controls": false,
                  "responsive": {
                    "0": { "items": 1, "gutter": 0 },
                    "768": { "items": 1, "gutter": 30 },
                    "992": { "items": 1, "gutter": 30 },
                    "1200": { "items": 1, "gutter": 30 }
                  }
                }'>
              @foreach ($past_event as $event)
                <div class="item">
                  <div class="blog-card">
                    <div class="blog-card__image">
                      <img src="{{ asset($event->image) }}" alt="{{ $event->image_alt }}">
                      <div class="blog-card__date">
                        <?php $date = \Carbon\Carbon::parse($event->publish_date); ?>
                        <span>{{ $date->format('d') }}</span>{{ $date->format('M') }}<br>{{ $date->format('Y') }}
                      </div>
                    </div>
                    <div class="blog-card__content">
                      <h3 class="blog-card__title">
                        <a href="{{ route('event.detail', [$event->slug]) }}">{{ $event->heading }}</a>
                      </h3>
                      <a href="{{ route('event.detail', [$event->slug]) }}" class="blog-card__links">
                        <i class="fa fa-angle-double-right"></i> Read More
                      </a>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        @else
          <div class="alert alert-warning">No Events Found!</div>
        @endif
      </div>
    </div>
  </div>
</section>
@endif

    <section class="sec-pad-top testimonials-one testimonials-one--bottom-pd-lg testimonials-one--bottom-pd-lg-auto"
        style="background-image: url('{{ asset('guest/images/testimonial-bg.jpg') }}'); background-size: cover;">
        <div class="testimonials-one__bg"></div>
        <!-- /.testimonials-one__bg -->
        <div class="testimonials-one__gallery">
        </div>
        <!-- /.testimonials-one__gallery -->
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-lg-5">
                    <div class="testimonials-one__content">
                        <div class="sec-title">
                            <p class="sec-title__tagline">Voices of Victory: </p>
                            <h2 class="sec-title__title"> Stories that Speak Real Success Stories </h2>
                        </div>
                        <!-- /.sec-title -->
                        <!-- <p class="testimonials-one__text">Proin a lacus arcu. Nullam id dui eu orci maximus. <br>
                                      Cras
                                      at auctor lectus, pretium tellus.</p> -->
                    </div>
                    <!-- /.testimonials-one__content -->
                </div>
                <!-- /.col-lg-5 -->
                <div class="col-lg-7">
                    <div class="thm-tns__carousel" id="testimonials-one-carousel-7"
                        data-tns-options='{
               "container": "#testimonials-one-carousel-7",
               "loop": true,
               "autoplay": true,
               "items": 1,
               "gutter": 0,
               "mouseDrag": true,
               "touch": true,
               "nav": false,
               "autoplayButtonOutput": false,
               "controls": false
               }'>
                        <div class="item">
                            <div class="testimonials-card">
                                <i class="paroti-icon-quote testimonials-card__icon"></i>
                                <img src="{{ asset('guest/images/shapes/testimonials-item-bg-1-1.png') }}"
                                    class="testimonials-card__bg" alt="">
                                <p class="testimonials-card__text">"We are really grateful to the Punjab Angels Network,
                                    especially Sahil Sir, for their continuous support during our early days.They believed
                                    in our startup's idea, provided us with guidance and coaching, and were instrumental in
                                    laying the groundwork for our success. PAN assisted us in showcasing our solutions to
                                    audiences across several channels, which helped us land our first client as well. We
                                    look forward to continuing our path of innovation and impact with the PAN community." .
                                </p>
                                <!-- /.testimonials-card__text -->
                                <div class="testimonials-card__meta clearfix">
                                    <h3 class="testimonials-card__name">Arjun Mittal</h3>
                                    <!-- /.testimonials-card__name -->
                                    <p class="testimonials-card__designation">CEO Envinova Smart tech</p>
                                    <!-- /.testimonials-card__designation -->
                                </div>
                                <!-- /.testimonials-card__meta -->
                            </div>
                            <!-- /.testimonials-one__card -->
                        </div>
                        <div class="item">
                            <div class="testimonials-card">
                                <i class="paroti-icon-quote testimonials-card__icon"></i>
                                <img src="{{ asset('guest/images/shapes/testimonials-item-bg-1-1.png') }}"
                                    class="testimonials-card__bg" alt="">
                                <p class="testimonials-card__text">"Our startup journey was significantly smoothened
                                    by Punjab Angels. Beyond just securing crucial funds, the platform played an
                                    important role in connecting us with key players and industry influencers. Their
                                    amazing support is a true explanation of their commitment to our success." .
                                </p>
                                <!-- /.testimonials-card__text -->
                                <div class="testimonials-card__meta clearfix">
                                    <img src="{{ asset('guest/images/resources/testim-3.png') }}" alt="">
                                    <h3 class="testimonials-card__name">Rishav</h3>
                                    <!-- /.testimonials-card__name -->
                                    <p class="testimonials-card__designation">S.Manager</p>
                                    <!-- /.testimonials-card__designation -->
                                </div>
                                <!-- /.testimonials-card__meta -->
                            </div>
                            <!-- /.testimonials-one__card -->
                        </div>
                        <div class="item">
                            <div class="testimonials-card">
                                <i class="paroti-icon-quote testimonials-card__icon"></i>
                                <img src="{{ asset('guest/images/shapes/testimonials-item-bg-1-1.png') }}"
                                    class="testimonials-card__bg" alt="">
                                <p class="testimonials-card__text">"Being an investor with Punjab Angels has been a
                                    strategic and fulfilling choice. The platform not only aligns with my vision for
                                    innovative investments but also fosters a sense of community where proactive
                                    collaboration thrives. Proud to contribute to the vibrant genre of success they
                                    cultivate."
                                </p>
                                <!-- /.testimonials-card__text -->
                                <div class="testimonials-card__meta clearfix">
                                    <img src="{{ asset('guest/images/resources/testim-2.png') }}" alt="">
                                    <h3 class="testimonials-card__name">Manish</h3>
                                    <!-- /.testimonials-card__name -->
                                    <p class="testimonials-card__designation">Investor</p>
                                    <!-- /.testimonials-card__designation -->
                                </div>
                                <!-- /.testimonials-card__meta -->
                            </div>
                            <!-- /.testimonials-one__card -->
                        </div>
                        <div class="item">
                            <div class="testimonials-card">
                                <i class="paroti-icon-quote testimonials-card__icon"></i>
                                <img src="{{ asset('guest/images/shapes/testimonials-item-bg-1-1.png') }}"
                                    class="testimonials-card__bg" alt="">
                                <p class="testimonials-card__text">"The Foundation Course offered by Punjab Angels
                                    proved to be a game-changer for our startup. It wasn't just a learning
                                    experience; it was a tailored roadmap that guided us from the inception of our
                                    idea to laying the groundwork for a successful business. Our sincere gratitude
                                    for this invaluable resource."
                                </p>
                                <!-- /.testimonials-card__text -->
                                <div class="testimonials-card__meta clearfix">
                                    <img src="{{ asset('guest/images/resources/testim-1.png') }}" alt="">
                                    <h3 class="testimonials-card__name">Anand</h3>
                                    <!-- /.testimonials-card__name -->
                                    <p class="testimonials-card__designation">CEO/Founder</p>
                                    <!-- /.testimonials-card__designation -->
                                </div>
                                <!-- /.testimonials-card__meta -->
                            </div>
                            <!-- /.testimonials-one__card -->
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-7 -->
            </div>
            <!-- /.row -->
        </div>
    </section>
    @if ($blogs->isNotEmpty())
        <section class="sec-pad-top sec-pad-bottom">
            <div class="container">
                <div class="sec-title text-center">
                    <p class="sec-title__tagline">Watch our latest blogs</p>
                    <h2 class="sec-title__title">Latest blogs</h2>
                </div>
                @if ($blogs->isNotEmpty())
                    <div class="blog-carousel">
                        <div class="thm-tns__carousel " id="blog-carousel-3"
                            data-tns-options='{
            "container": "#blog-carousel-3",
            "loop": true,
            "autoplay": true,
            "items": 1,
            "gutter": 0,
            "mouseDrag": true,
            "touch": true,
            "nav": false,
            "autoplayButtonOutput": false,
            "controls": false,
            "responsive": {
            "0": {
            "items": 1,
            "gutter": 0
            },
            "576": {
            "items": 1,
            "gutter": 0
            },
            "768": {
            "items": 2,
            "gutter": 30
            },
            "992": {
            "items": 2,
            "gutter": 30
            },
            "1200": {
            "items": 3,
            "gutter": 30
            }
            }
            }'>
                            @foreach ($blogs as $blogs)
                                <div class="item">
                                    <div class="blog-card ">
                                        <div class="blog-card__image">
                                            <img src="{{ asset($blogs->image) }}" alt="{{ $blogs->image_alt }}">
                                            <div class="blog-card__date">
                                                <?php $date = \Carbon\Carbon::parse($blogs->publish_date); ?>
                                                <span>{{ $date->format('d') }}</span>{{ $date->format('M') }}<br>{{ $date->format('Y') }}
                                            </div>
                                        </div>
                                        <div class="blog-card__content">
                                            {{-- 
                     <ul class="blog-card__meta list-unstyled">
                        <li>
                           <i class="fa fa-user"></i>
                           <a href="#">by Admin</a>
                        </li>
                        <li>
                           <i class="fa fa-comments"></i>
                           <a href="#">02 comments</a>
                        </li>
                     </ul>
                     --}}
                                            <h3 class="blog-card__title"><a
                                                    href="{{ route('blog.detail', [$blogs->slug]) }}">{{ $blogs->heading }}</a>
                                            </h3>
                                            <a href="{{ route('blog.detail', [$blogs->slug]) }}"
                                                class="blog-card__links">
                                                <i class="fa fa-angle-double-right"></i>
                                                Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @else
                    <div class="alert alert-warning" role="alert">
                        No Blog Found!
                    </div>
                @endif
            </div>
        </section>
    @else
    @endif
    <!-- <section class="newsletter-one">
                       <div class="newsletter-one__bg"
                        style="background-image: url(guest/images/backgrounds/newsletter-1-1.png);"></div>
                       
                       <div class="newsletter-one__shape float-bob-x">
                        <img src="{{ asset('guest/images/shapes/newsletter-1-1.png') }}" alt="">
                       </div>
                       <div class="container">
                        <div class="newsletter-one__icon float-bob-y">
                         <img src="{{ asset('guest/images/shapes/newsletter-1-2.png') }}" alt="">
                        </div>
                        <div class="row">
                         <div class="col-lg-7">
                          <div class="sec-title">
                           <p class="sec-title__tagline">Amplify Your Venture;</p>
                           <h2 class="sec-title__title"> Subscribe Our Newsletter</h2>
                          </div>
                          <form action="#" class="mc-form newsletter-one__form">
                           <input type="email" placeholder="Your email">
                           <button type="submit" class="newsletter-one__form__btn">
                            Subscribe
                           </button>
                          </form>
                          <div class="mc-response"></div>
                         </div>
                        </div>
                       </div>
                       </section> -->
@endsection
@section('page_level_script')
@endsection
