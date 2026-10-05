@extends('layouts.guest.master')

@section('page_level_style')
    <style>
        .sec-pad-bottom {
            padding-bottom: 4.5rem;
        }

        .sec-pad-top {
            padding-top: 4.5rem;
        }

        .about-one__shape-2 {
            bottom: 0;
            z-index: -1;
            right: 0;
        }

        .about-two__info {
            grid-gap: 0;
        }

        .sec-title__title {
            font-size: 2.2rem;
        }
    </style>
@endsection

@section('content')
    <section class="page-header" style="background-image: url(guest/images/backgrounds/school-college-bg.jpg);">
        <div class="container">
            <ul class="list-unstyled breadcrumb-one">
                <li><a href="index.php">Home</a></li>
                <li><span>School/College </span></li>
            </ul><!-- /.list-unstyled breadcrumb-one -->
            <h1 class="page-header__title ">Building the Future of Entrepreneurship </h1>
            <p class="text-white mt-20 banner-para">Our mission extends beyond businesses; we are committed to nurturing
                colleges and schools to understand venture investing as a powerful asset class. </p>
        </div><!-- /.container -->
    </section>



    <section class="sec-pad-top sec-pad-bottom about-one">
        <div class="about-one__shape-1 float-bob-y">
            <img src="{{ asset('guest/images/shapes/about-1-1.png') }}" alt="">
        </div><!-- /.about-one__shape-1 -->
        <div class="about-one__shape-2 float-bob-x">
            <img src="{{ asset('guest/images/shapes/about-1-1.png') }}" alt="">
        </div><!-- /.about-one__shape-2 -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-one__images wow fadeInLeft" data-wow-duration="1500ms">
                        <img src="{{ asset('guest/images/resources/coll-1.jpg') }}" alt="">
                        <img src="{{ asset('guest/images/resources/coll-2.jpg') }}" alt="">
                    </div><!-- /.about-one__images -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-5 offset-lg-1">
                    <div class="about-one__content">
                        <div class="sec-title">
                            <p class="sec-title__tagline"> Lets Nurture Youth</p><!-- /.sec-title__tagline -->
                            <h2 class="sec-title__title">It’s Time to Empower Educational Institutions </h2>
                        </div><!-- /.sec-title -->
                        <!-- /.about-one__list -->
                        <div class="about-one__tagline">At Punjab Angels Network, we believe in empowering educational
                            institutions to actively participate in the entrepreneurial journey. </div>
                        <!-- /.about-one__tagline -->
                        <p class="about-one__text"> By partnering with us, colleges and schools can create platforms where
                            students and faculty can learn, invest, and grow. </p>
                        <div class="about-two__btns">
                            <a href="{{ route('contact') }}" class="thm-btn about-two__btn">
                                <span>Talk To Experts</span>
                            </a><!-- /.thm-btn about-two__btn -->
                        </div>
                        <!-- /.about-one__meta -->
                    </div><!-- /.about-one__content -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <section class="sec-pad-top sec-pad-bottom about-two">

        <div class="container">
            <div class="row gutter-y-60">
                <!-- /.col-md-12 col-lg-6 -->
                <div class="col-md-12 col-lg-6">
                    <div class="about-two__content">
                        <div class="sec-title">
                            <p class="sec-title__tagline">Our Support</p><!-- /.sec-title__tagline -->
                            <h2 class="sec-title__title"> Comprehensive Support for Colleges/Schools</h2>
                        </div><!-- /.sec-title -->
                        <p class="about-two__text">We provide an extensive range of support to help colleges and schools
                            build a thriving startup ecosystem: </p><!-- /.about-two__text -->
                        <!-- <ul class="list-unstyled about-two__info">
            <li class="about-two__info__item"> -->

                        <h3 class="about-two__info__title">Funding Support </h3><!-- /.about-two__info__title -->
                        <!-- </li> -->
                        <!-- <li class="about-two__info__item" style="--accent-color: #8139e7;">
             <i class="paroti-icon-solidarity"></i>
             <h3 class="about-two__info__title">Donate to the
              new cause</h3>
            </li> -->
                        <!-- </ul> -->
                        <p class="about-two__text">Access to a prominent network of investors eager to invest in early-stage
                            startups with innovative ideas and scalable business models. </p><!-- /.list-unstyled -->

                        <h3 class="about-two__info__title">Expert Services </h3>
                        <ul class="list-unstyled about-two__info">
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Financial Advisory
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                R&D Consultancy
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Market Research Support
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                HR Consultancy
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Digital Market Handling
                            </li>
                            <li>
                                <i class="fa fa-check-circle"></i>
                                Legal and Regulatory Services
                            </li>
                        </ul><!-- /.list-unstyled -->
                        <div class="about-two__btns">
                            <a href="{{ route('contact') }}" class="thm-btn about-two__btn">
                                <span>Talk With Us</span>
                            </a><!-- /.thm-btn about-two__btn -->
                        </div><!-- /.about-two__btns -->
                    </div><!-- /.about-two__content -->
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="about-two__image">
                        <!-- /.about-two__image__shape-3 -->
                        <img src="{{ asset('guest/images/resources/colll-3.jpg') }}" class="wow fadeInLeft"
                            data-wow-duration="1500ms" alt="">
                        <!-- /.about-two__image__caption -->
                    </div><!-- /.about-two__image -->
                </div><!-- /.col-md-12 col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>

    <section class="faq-one">
        <div class="faq-one__bg" style="background: url(guest/images/backgrounds/FAQ-bg.png); background-size: cover;">
        </div>
        <!-- /.faq-one__bg -->
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-lg-6">
                    <div class="faq-one__content">
                        <div class="sec-title text-start">
                            <p class="sec-title__tagline">Why Choose Us?</p><!-- /.sec-title__tagline -->
                            <h2 class="sec-title__title">Tailored Services for Startups </h2>
                            <p>
                                Our dedicated services for startups ensure that promising ideas receive the support they
                                need to flourish:
                            </p>
                        </div><!-- /.sec-title -->


                        <!-- /.faq-one__content__text -->
                        <div class="accordion faq-one__accordion" id="faq-one__accordion-1">
                            <div class="accordion-item faq-one__accordion__item">
                                <h2 class="accordion-header faq-one__accordion__header"
                                    id="faq-one__accordion-1__heading-1">
                                    <button class="accordion-button faq-one__accordion__button" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-one__accordion-1__collapse-1"
                                        aria-expanded="true" aria-controls="faq-one__accordion-1__collapse-1">
                                        Boosting Visibility and Engagement
                                        <span class="faq-one__accordion__icon"></span>
                                        <!-- /.faq-one__accordion__icon -->
                                    </button>
                                </h2>
                                <div id="faq-one__accordion-1__collapse-1"
                                    class="accordion-collapse collapse show faq-one__accordion__collapse"
                                    aria-labelledby="faq-one__accordion-1__heading-1"
                                    data-bs-parent="#faq-one__accordion-1">
                                    <div class="accordion-body faq-one__accordion__body">Effective marketing is crucial for
                                        the success of any startup. We offer comprehensive marketing support to enhance
                                        brand visibility and engagement: </div>
                                </div>
                            </div>
                            <div class="accordion-item faq-one__accordion__item">
                                <h2 class="accordion-header faq-one__accordion__header"
                                    id="faq-one__accordion-1__heading-2">
                                    <button class="accordion-button faq-one__accordion__button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-one__accordion-1__collapse-2"
                                        aria-expanded="false" aria-controls="faq-one__accordion-1__collapse-2">
                                        Startup Services
                                        <span class="faq-one__accordion__icon"></span>
                                    </button>
                                </h2>
                                <div id="faq-one__accordion-1__collapse-2"
                                    class="accordion-collapse faq-one__accordion__collapse collapse"
                                    aria-labelledby="faq-one__accordion-1__heading-2"
                                    data-bs-parent="#faq-one__accordion-1">
                                    <div class="accordion-body faq-one__accordion__body">
                                        <ul>
                                            <li>Calling for Startup Applications </li>
                                            <li>Assistance with Startup Scrutiny and Preliminary Due Diligence </li>
                                            <li>Support in the Startup Selection Process </li>
                                            <li>Startup Data Management </li>
                                            <li>Providing Summaries and 2-Pager Documents for Jury Members </li>
                                            <li>Glossary and Sample Documents for Startups (Founder Agreements, Term Sheets,
                                                etc.) </li>
                                            <li>Team Building Support for the Selection Committee </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>



                            <div class="accordion-item faq-one__accordion__item">
                                <h2 class="accordion-header faq-one__accordion__header"
                                    id="faq-one__accordion-1__heading-3">
                                    <button class="accordion-button faq-one__accordion__button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#faq-one__accordion-1__collapse-3"
                                        aria-expanded="false" aria-controls="faq-one__accordion-1__collapse-3">
                                        Marketing Support
                                        <span class="faq-one__accordion__icon"></span>
                                    </button>
                                </h2>
                                <div id="faq-one__accordion-1__collapse-3"
                                    class="accordion-collapse faq-one__accordion__collapse collapse"
                                    aria-labelledby="faq-one__accordion-1__heading-3"
                                    data-bs-parent="#faq-one__accordion-1">
                                    <div class="accordion-body faq-one__accordion__body">
                                        <ul>
                                            <li>Social Media Management (Including Setup) </li>
                                            <li>Regular Content Posting on Social Media </li>
                                            <li>Digital Marketing </li>
                                            <li>Content Creation </li>
                                            <li>Brand Visibility </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>







                        </div>
                    </div><!-- /.faq-one__content -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="faq-one__image">
                        <img src="{{ asset('guest/images/resources/Entrepreneurial-Success.png') }}" alt="">
                    </div><!-- /.faq-one__image -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
@endsection

@section('page_level_script')
@endsection
