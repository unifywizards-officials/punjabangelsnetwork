@extends('layouts.guest.master')

@section('page_level_style')
<style>
    #chairman h2{
        margin-bottom: 30px
    }
</style>
@endsection

@section('content')
    <section class="page-header" style="background-image: url(guest/images/backgrounds/team.png);">
        <div class="container">
            <ul class="list-unstyled breadcrumb-one">
                <li><a href="index.php">Home</a></li>
                <li><span>Team </span></li>
            </ul><!-- /.list-unstyled breadcrumb-one -->
            <h2 class="page-header__title">Faces Behind the Magic: <br> Meet Our Extraordinary Team </h2>

        </div><!-- /.container -->
    </section><!-- /.page-header -->



    <section class="about-three">
        <div class="about-three__shape wow slideInLeft" data-wow-duration="1500ms" style="z-index: -1;"></div>
        <!-- /.about-three__shape -->
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-md-12 col-lg-5">
                    <div class="about-three__content">
                        <div class="sec-title">
                            <p class="sec-title__tagline">Our Team:</p><!-- /.sec-title__tagline -->
                            <h2 class="sec-title__title"> Beyond Titles, A Crew <br>of Talents and Experience </h2>
                        </div><!-- /.sec-title -->
                        <div class="about-three__text">Our team is the heartbeat of our organization, a diverse and
                            talented group of individuals who bring a wealth of experience and passion to the table.
                            Committed to turning dreams into reality, each team member plays a unique role. United
                            with a shared vision, we thrive on collaboration, innovation, and a relentless pursuit
                            of excellence. Meet the faces behind the magic, the driving force that propels us
                            towards new heights. </div><!-- /.about-three__text -->


                    </div><!-- /.about-three__content -->
                </div><!-- /.col-md-12 col-lg-5 -->
                <div class="col-md-12 col-lg-7">
                    <div class="about-three__image">
                        <img src="{{ asset('guest/images/resources/our-team-main.jpg') }}" alt="">
                    </div><!-- /.about-three__image -->
                </div><!-- /.col-md-12 col-lg-7 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>



   <!-- /.sec-pad-top sec-pad-bottom -->

    <section class="sec-pad-top sec-pad-bottom" id="chairman">
        <div class="container">
            <div class="sec-title text-center ">
                <div class="row justify-content-center">
                <a href="https://www.linkedin.com/in/casahilmakkar/" class=" col-lg-3">
                    <div class="about-one__meta clearfix ">
                        <img src="{{ asset('guest/images/resources/ceo.png') }}" alt="">
                        <h3 class="about-one__name">Mr. Sahil Makkar</h3>
                        <!-- /.about-one__name -->
                        <p class="about-one__designation">Chairman & CEO</p>
                        <!-- /.about-one__designation -->
                    </div>
                </a>
            </div>
                
                <!-- /.sec-title__tagline -->
                <h2 class="sec-title__title"> Visionary Leader Driving Start-Up Success!
                </h2>
                <p class="about-one__text"> <span>Chairman & CEO</span> of Punjab Angels Network, Fellow <span>Chartered Accountant</span>, An Alumnus of <span>Indian School of Buisness (ISB)</span> and has done Executive Education Programme from  <span>Indian Institute of Management (IIM) – Bangalore. </span></p>
            <p>Sahil Makkar has written two Books , first one: How to raise Start-up funding in India and second one: How to Manage Finance @ Start-up's.</p>
            <p>Sahil Makkar has 2 TEDx Talk under his belt.</p>
            <p>Sahil Makkar is a Nationally recognized Exponential Thought Leader, Strategic Business/Startup & Scale-up Advisor, He has years of experience in assisting Start-up’s/ Corporates clients in raising capital both equity and debt, mergers and acquisitions, Scaling up Businesses. He has exceptional levels of contacts in the investment banking, Fund houses and collaborated with private equity, venture capital, family offices and high-net worth individuals. </p>
           <p>Sahil Makkar is an Innovation Evangelist, Business Strategist on the outside and Altruist, Philosopher on the inside, and a million things in between. He is focussed on shaping the future of humanity from ‘mindset to heartset’. As an Innovation catalyst and Transdisciplinary expert Sahil assists organizations to spearhead their innovation agenda using exponential technologies. He has over 15+ years’ experience.</p>
           <p>He belongs to tribes of global change-makers, future shapers, innovators, imaginers and activators. He is particularly passionate about developing frugal innovations for helping bridge the digital divide (transforming it into digital opportunities) and empower under-privileged communities by democratizing cutting-edge tech.</p>
           <p>He believes that with a positive and abundant mindset and use of exponential tech and activating   relevant communities and ecosystems we can make the impossible possible.</p>
        
        
        </div>
            
        </div>
    </section>
    <section class="sec-pad-top sec-pad-bottom sponsor-carousel">
        <div class="container">
            <div class="sec-title text-center">
                <p class="sec-title__tagline">Expert Team Members</p>
                <!-- /.sec-title__tagline -->
                <h2 class="sec-title__title"> Board of Advisors
                </h2>
                <p>Our Eminent Board of advisor constitutes brilliant minds from distinct domains with years of
                    experience.</p>
            </div>
            <div class="row justify-content-center">
                @foreach ($board_adviser as $board_adviser)
                    <div class="item col-lg-3 col-md-6 col-sm-12 p-t-30">
                        <div class="gallery-card">
                            <div class="gallery-card__image">

                                @if ($board_adviser->image)
                                    <img src="{{ asset($board_adviser->image) }}" alt="{{ $board_adviser->image_alt }}">
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
                @endforeach

            </div>
        </div>
    </section><!-- /.sec-pad-top sec-pad-bottom -->

  


    <section class="sec-pad-top sec-pad-bottom sponsor-carousel">
        <div class="container">
            <div class="sec-title text-center">
                <p class="sec-title__tagline">TEAM MEMBER</p>
                <!-- /.sec-title__tagline -->
                <h2 class="sec-title__title"> Our Investors
                </h2>
                <!-- <p>Expert Turnaround Specialists who revive struggling businesses and drive sustainable growth. Unlock your business’s full potential with our team.</p> -->
            </div>

            <div class="row justify-content-center">
                @foreach ($investors as $investors)
                    <div class="item col-lg-3 col-md-6 col-sm-12 p-t-30">
                        <div class="gallery-card">
                            <div class="gallery-card__image">

                                @if ($investors->image)
                                    <img src="{{ asset($investors->image) }}" alt="{{ $investors->image_alt }}">
                                @else
                                    <img src="{{ asset('guest/images/businsess_placeholder2.png') }}"
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
                @endforeach

            </div>

        </div>
    </section>
    <!-- /.sec-pad-top sec-pad-bottom -->
@endsection

@section('page_level_script')
@endsection
