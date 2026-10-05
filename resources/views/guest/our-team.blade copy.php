@extends('layouts.guest.master')

@section('page_level_style')

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
                            <img src="{{asset('guest/images/resources/our-team-main.jpg')}}" alt="">
                        </div><!-- /.about-three__image -->
                    </div><!-- /.col-md-12 col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>



        <section class="sec-pad-top sec-pad-bottom about-one">
            <div class="about-one__shape-1 float-bob-y">
                <img src="{{asset('guest/images/shapes/about-1-1.png')}}" alt="">
            </div><!-- /.about-one__shape-1 -->
            <div class="about-one__shape-2 float-bob-x">
                <img src="{{asset('guest/images/shapes/about-1-1.png')}}" alt="">
            </div><!-- /.about-one__shape-2 -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-one__images wow fadeInLeft" data-wow-duration="1500ms">
                            <img src="{{asset('guest/images/sahil-makkar.png')}}" alt="">
                            <img src="{{asset('guest/images/resources/secoandry.png')}}" alt="">
                        </div><!-- /.about-one__images -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="about-one__content">
                            <div class="sec-title">

                                <h2 class="sec-title__title">The Chairman </h2>
                            </div><!-- /.sec-title -->
                            <!-- /.about-one__list -->

                            <p class="about-one__text"> 11 years of Experience as a Chartered Accountant, Alumnus of
                                Indian School of Business (ISB) and Executive Education from Indian Institute of
                                Management (IIM)- Bangalore. Educationist teaching finance to Civil Services aspirants
                                and MBA executives for 12 years. He has also done post Qualification certificate courses
                                on Company Valuations, Concurrent Audit of Banks, Anti-Money Laundering Laws. </p>
                            <div class="about-one__meta clearfix">
                                <img src="{{asset('guest/images/resources/ceo.png')}}" alt="">
                                <h3 class="about-one__name">Mr. Sahil Makkar</h3>
                                <!-- /.about-one__name -->
                                <p class="about-one__designation">CEO & CO Founder</p>
                                <!-- /.about-one__designation -->
                            </div><!-- /.about-one__meta -->
                        </div><!-- /.about-one__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.sec-pad-top sec-pad-bottom -->


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
                <div class="row">
                    @foreach($board_adviser as $board_adviser)
                    <div class="item col-lg-3 col-md-6 col-sm-12 p-t-30">
                        <div class="gallery-card">
                            <div class="gallery-card__image">
                                <img src="{{asset($board_adviser->image)}}" alt="{{$board_adviser->image_alt}}">
                            </div>
                            <div class="gallery-card__content">
                                <a class="img-popup" href="#">
                                    <h4>{{$board_adviser->name}}</h4>
                                    <p>{{$board_adviser->position}}</p><br>
                                    <a href="{{$board_adviser->linkedin}}"><i class="fab fa-linkedin"></i></a>
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
                    <h2 class="sec-title__title"> Turnaround Specialist
                    </h2>
                    <p>Expert Turnaround Specialists who revive struggling businesses and drive sustainable growth. Unlock your business’s full potential with our team.</p>
                </div>

                <div class="row">
                    @foreach($turn_around_specialist as $turn_around_specialist)
                    <div class="item col-lg-3 col-md-6 col-sm-12 p-t-30">
                        <div class="gallery-card">
                            <div class="gallery-card__image">
                                <img src="{{asset($turn_around_specialist->image)}}" alt="{{$turn_around_specialist->image_alt}}">
                            </div>
                            <div class="gallery-card__content">
                                <a class="img-popup" href="#">
                                    <h4>{{$turn_around_specialist->name}}</h4>
                                    <p>{{$turn_around_specialist->position}}</p><br>
                                    <a href="{{$turn_around_specialist->linkedin}}"><i class="fab fa-linkedin"></i></a>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>

            </div>
        </section>
        
        
        <section class="sec-pad-top sec-pad-bottom sponsor-carousel">
            <div class="container">
                <div class="sec-title text-center">
                    <p class="sec-title__tagline">TEAM MEMBER</p>
                    <!-- /.sec-title__tagline -->
                    <h2 class="sec-title__title"> Our Investors
                    </h2>
                    <!-- <p>Expert Turnaround Specialists who revive struggling businesses and drive sustainable growth. Unlock your business’s full potential with our team.</p> -->
                </div>

                <div class="row">
                    @foreach($investors as $investors)
                    <div class="item col-lg-3 col-md-6 col-sm-12 p-t-30">
                        <div class="gallery-card">
                            <div class="gallery-card__image">
                                <img src="{{asset($investors->image)}}" alt="{{$investors->image_alt}}">
                            </div>
                            <div class="gallery-card__content">
                                <a class="img-popup" href="#">
                                    <h4>{{$investors->name}}</h4>
                                    <p>{{$investors->position}}</p><br>
                                    <a href="{{$investors->linkedin}}"><i class="fab fa-linkedin"></i></a>
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