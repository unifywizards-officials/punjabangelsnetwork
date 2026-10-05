@extends('layouts.guest.master')

@section('page_level_style')


<style>

@media screen and (min-width: 1100px) and (max-width: 1796px){
	.donation-card-three__content {
   
    min-height: 304px;
}
}
</style>
@endsection

@section('content')

<section class="page-header"
			style="background-image: url(guest/images/backgrounds/about-banner.png); position: relative;">
			<div class="overlay"></div>
			<div class="container " style="position: relative;">
				<ul class="list-unstyled breadcrumb-one">
					<li><a href="index.php">Home</a></li>
					<li><span>About</span></li>
				</ul>
				<h1 class="page-header__title">“We Make Eligible Startups  <br>

We Make Eligible Investors”  </h1>
<p class="text-white mt-20 banner-para">Welcome to Punjab Angels Network, a platform dedicated to accelerating and nurturing the entrepreneurial and start-up ecosystem in North India</p>
				

			</div><!-- /.container -->
		</section><!-- /.page-header -->
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
							<img src="{{asset('guest/images/resources/maiin.png')}}" alt="">
							<img src="{{asset('guest/images/resources/secoandry.png')}}" alt="">
						</div><!-- /.about-one__images -->
					</div><!-- /.col-lg-6 -->
					<div class="col-lg-5 offset-lg-1">
						<div class="about-one__content">
							<div class="sec-title">
								<p class="sec-title__tagline"> Who We Are?</p><!-- /.sec-title__tagline -->
								<h2 class="sec-title__title">We help you Flex Up Your Business Game </h2>
							</div><!-- /.sec-title -->
							<ul class="list-unstyled about-one__list d-none-1000-1200">
								<li>
									<i class="fa fa-check-circle"></i>
									Reliability
								</li>
								<li>
									<i class="fa fa-check-circle"></i>
									Resilience
								</li>
							</ul><!-- /.about-one__list -->
							<div class="about-one__tagline">Punjab Angels Network is ready to bridge the gap between investors, entrepreneurs, incubators, and experts, creating a dynamic environment </div><!-- /.about-one__tagline -->
							<p class="about-one__text"> At Punjab Angels Network, we believe in the power of collaboration and the potential of your visionary ideas. We bring together a diverse community of investors, entrepreneurs, incubators, and a vast resource pool on a common platform.  </p>
							<p class="about-one__text">By fostering these connections, we build a strong support system that fuels the success of innovative business ideas and helps scale up every entrepreneurial venture. </p>
							<!-- /.about-one__meta -->
						</div><!-- /.about-one__content -->
					</div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.sec-pad-top sec-pad-bottom -->

		<section class="sec-pad-top sec-pad-bottom donation-two">
			<div class="container">
				<div class="row gutter-y-60">
					<div class="col-md-12 col-lg-4">
						<div class="sec-title">
							<!-- <p class="sec-title__tagline">Expert Team Members</p>/.sec-title__tagline -->
							<h2 class="sec-title__title">
								We're Working Round the Clock To build Entrepreneurship Ecosystem </h2>
						</div><!-- /.sec-title -->
						<a href="{{ route('contact') }}">
							<button class="cta-one__btn thm-btn">
								<span>Contact Us</span>
							</button></a>
						<!-- /.donation-two__text -->
					</div><!-- /.col-md-12 -->
					<div class="col-md-12 col-lg-6">
						<div class="thm-owl__carousel owl-carousel owl-theme donation-two__carousel" data-owl-options='{
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
								"1000": {
									"items": 2,
									"margin": 15
								},
								"1200": {
									"items": 2,
									"margin": 30
								}
							}
						}'>
						<div class=" wow fadeInUp" data-wow-duration="1500ms">
								<div class="donation-card-three">
									<div class="donation-card-three__image">
										<img src="{{asset('guest/images/service-images/2.jpg')}}" alt="">
									</div><!-- /.donation-card-three__image -->
									<div class="donation-card-three__content">
										<div class="donation-card-three__icon">
											<img src="{{asset('guest/images/icons/startup-5492127-983693.png')}}" alt="">
										</div><!-- /.donation-card-three__icon -->
										<h3 class="donation-card-three__title"><a href="#">Startups
											</a></h3><!-- /.donation-card-three__title -->
										<p class="donation-card-three__text">Idea, Innovation, Technology, Passion: Our
											Core Values
										</p><!-- /.donation-card-three__text -->
									</div><!-- /.donation-card-three__content -->
								</div><!-- /.donation-card-three -->
							</div>
							<div class=" wow fadeInUp" data-wow-duration="1500ms">
								<div class="donation-card-three">
									<div class="donation-card-three__image">
										<img src="{{asset('guest/images/service-images/1.jpg')}}" alt="">
									</div><!-- /.donation-card-three__image -->
									<div class="donation-card-three__content">
										<div class="donation-card-three__icon">
											<img src="{{asset('guest/images/icons/consultant-1646573-983693.png')}}" alt="">
										</div><!-- /.donation-card-three__icon -->
										<h3 class="donation-card-three__title"><a
												href="#">Turnaround Consultants </a></h3>
										<!-- /.donation-card-three__title -->
										<p class="donation-card-three__text">Steering the Ecosystem in the Right
											Direction
										</p><!-- /.donation-card-three__text -->
									</div><!-- /.donation-card-three__content -->
								</div><!-- /.donation-card-three -->
							</div>
							
							<div class=" wow fadeInUp" data-wow-duration="1500ms">
								<div class="donation-card-three">
									<div class="donation-card-three__image">
										<img src="{{asset('guest/images/service-images/3.jpg')}}" alt="">
									</div><!-- /.donation-card-three__image -->
									<div class="donation-card-three__content">
										<div class="donation-card-three__icon">
											<img src="{{asset('guest/images/icons/corporate-2147268-983693.png')}}" alt="">
										</div><!-- /.donation-card-three__icon -->
										<h3 class="donation-card-three__title"><a
												href="#">Corporates </a></h3>
										<!-- /.donation-card-three__title -->
										<p class="donation-card-three__text">Ecosystem Support and the Goal of Achieving
											IPOs
										</p><!-- /.donation-card-three__text -->
									</div><!-- /.donation-card-three__content -->
								</div><!-- /.donation-card-three -->
							</div>
							<div class=" wow fadeInUp" data-wow-duration="1500ms">
								<div class="donation-card-three">
									<div class="donation-card-three__image">
										<img src="{{asset('guest/images/service-images/inv.jpg')}}" alt="">
									</div><!-- /.donation-card-three__image -->
									<div class="donation-card-three__content">
										<div class="donation-card-three__icon">
											<img src="{{asset('guest/images/icons/investor-4588484-983693.png')}}" alt="">
										</div><!-- /.donation-card-three__icon -->
										<h3 class="donation-card-three__title"><a href="#">Investors
											</a></h3><!-- /.donation-card-three__title -->
										<p class="donation-card-three__text">Fueling Entrepreneurship and Economic
											Progress
										</p><!-- /.donation-card-three__text -->
									</div><!-- /.donation-card-three__content -->
								</div><!-- /.donation-card-three -->
							</div>
							<div class=" wow fadeInUp" data-wow-duration="1500ms">
								<div class="donation-card-three">
									<div class="donation-card-three__image">
										<img src="{{asset('guest/images/service-images/Edu.jpg')}}" alt="">
									</div><!-- /.donation-card-three__image -->
									<div class="donation-card-three__content">
										<div class="donation-card-three__icon">
											<img src="{{asset('guest/images/service-images/Education-icon.png')}}" alt="">
										</div><!-- /.donation-card-three__icon -->
										<h3 class="donation-card-three__title"><a href="#">Academia
											</a></h3><!-- /.donation-card-three__title -->
										<p class="donation-card-three__text">Research Partnership and Cultivating
											Regional Talent
										</p><!-- /.donation-card-three__text -->
									</div><!-- /.donation-card-three__content -->
								</div><!-- /.donation-card-three -->
							</div>
							<div class=" wow fadeInUp" data-wow-duration="1500ms">
								<div class="donation-card-three">
									<div class="donation-card-three__image">
										<img src="{{asset('guest/images/service-images/BMO.jpg')}}" alt="">
									</div><!-- /.donation-card-three__image -->
									<div class="donation-card-three__content">
										<div class="donation-card-three__icon">
											<img src="{{asset('guest/images/icons/business-graph-5497778-983693.png')}}" alt="">
										</div><!-- /.donation-card-three__icon -->
										<h3 class="donation-card-three__title"><a href="#">BMO's
											</a></h3><!-- /.donation-card-three__title -->
										<p class="donation-card-three__text"> Building Connections, Spreading Awareness
											of Global Developments.
										</p><!-- /.donation-card-three__text -->
									</div><!-- /.donation-card-three__content -->
								</div><!-- /.donation-card-three -->
							</div>
						</div><!-- /.donation-two__carousel -->
					</div>
				</div><!-- /.row -->
			</div>
		</section>



		<section class="sec-pad-top sec-pad-bottom about-four">
			<img src="assets/images/shapes/about-4-2.png" alt="" class="float-bob-x about-four__shape">
			<div class="container">
				<div class="sec-title text-center">
					<p class="sec-title__tagline">What We Do </p><!-- /.sec-title__tagline -->
					<h2 class="sec-title__title">Turning Your Ideas into a Strategic Blueprint</h2>
				</div><!-- /.sec-title -->

				<div class="row gutter-y-60">
					<div class="col-md-12 col-lg-5">
						<div class="about-four__image wow fadeInLeft" data-wow-duration="1500ms">
							<img src="{{asset('/guest/images/resources/about-4-1.jpg')}}" alt="">
							
						</div><!-- /.about-four__image -->
					</div><!-- /.col-md-12 -->
					<div class="col-md-12 col-lg-7">
						<div class="about-four__content">
							
							<!-- /.about-four__content__text -->
							<ul class="list-unstyled about-four__list">
								<li class="about-four__list__item">
									<i class="fa fa-check-circle"></i>
									<h3 class="about-four__list__title">Connecting Innovators and Investors</h3>
									<!-- /.about-four__list__title -->
									<p class="about-four__list__text">We create opportunities for meaningful collaborations by connecting investors with promising start-ups and entrepreneurs. </p>
									<!-- /.about-four__list__text -->
								</li>
								<li class="about-four__list__item">
									<i class="fa fa-check-circle"></i>
									<h3 class="about-four__list__title">Building a Strong Community</h3>
									<!-- /.about-four__list__title -->
									<p class="about-four__list__text">Our network is more than just a meeting point; it’s a community of like-minded individuals and organizations working together. </p>
									<!-- /.about-four__list__text -->
								</li>
								<li class="about-four__list__item">
									<i class="fa fa-check-circle"></i>
									<h3 class="about-four__list__title">Promoting Regional Growth</h3>
									<!-- /.about-four__list__title -->
									<p class="about-four__list__text">We aim to position North-India as a premier destination for start-up activity, where future unicorns and entrepreneurial success stories are born.  </p>
									<!-- /.about-four__list__text -->
								</li>
							</ul><!-- /.list-unstyled -->
						</div><!-- /.about-four__content -->
					</div><!-- /.col-md-12 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section>

		<section class="sec-pad-top cta-one cta-one--pad-bottom">
			<div class="cta-one__bg" style="background-image: url(guest/images/backgrounds/about-cta.jpg);"></div>
			
			<!-- /.cta-one__shape -->
			<!-- /.cta-one__bg -->
			<div class="container  text-center">
				<div class="sec-title">
					<p class="sec-title__tagline">Ready to transform your financial future?</p><!-- /.sec-title__tagline -->
					<h2 class="sec-title__title">Seize the opportunity now and  <br>
						Propel  your venture to new heights!
					</h2>
				</div><!-- /.sec-title -->
				<a href="{{ route('contact') }}" class="thm-btn cta-one__btn"><span>Talk To Us</span></a>
			</div><!-- /.container -->
		</section>

		
		<!-- <section class="cta-four sec-pad-top">
			<div class="container-fluid">
				<div class="sec-title text-center">
					<p class="sec-title__tagline"> Your Success Journey Starts Here: </p>
					<h2 class="sec-title__title sub-title-h">Discover Our Range of Services </h2>
				</div>
				<div class="row">
					<div class="col-lg-4">
						<div class="cta-four__item">
							<div class="cta-four__item__bg"
								style="background-image: url(guest/images/backgrounds/startup.png);"></div>
						
							<div class="cta-four__item__icon">
								<i class="paroti-icon-heart"></i>
							</div>
							<h3 class="cta-four__item__title"><a href="{{ route('contact') }}">Startups </a>
							</h3>
							<ul>
								<li>Existing Incubation Centers

								</li>
								<li> Mentorship
								</li>
								<li>
									Due Diligence </li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="cta-four__item" style="--accent-color: #8139e7;">
							<div class="cta-four__item__bg"
								style="background-image: url(guest/images/backgrounds/fundraise.png);"></div>
							
							<div class="cta-four__item__icon">
								<i class="paroti-icon-help-1"></i>
							</div>
							<h3 class="cta-four__item__title"><a href="{{ route('contact') }}">Fundraise </a> </h3>
							<ul>
								<li>Seed Investors 

									</li>
								<li> Angel Investors 
									</li>
								<li>
									
									Bank Funding  </li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="cta-four__item" style="--accent-color: #138999;">
							<div class="cta-four__item__bg"
								style="background-image: url(guest/images/backgrounds/MSME.png);"></div>
						
							<div class="cta-four__item__icon">
								<i class="paroti-icon-food-basket"></i>
							</div>
							<h3 class="cta-four__item__title"><a href="{{ route('contact') }}">MSME</a>
							</h3>
							<ul>
								<li>Network Platform 
								</li>
								<li>Industry – Academia Linkages 
								</li>
								<li>	
									Turnaround/ Growth Consulting</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section> -->


	


		<section class="faq-one">
			<div class="faq-one__bg" style="background: url(guest/images/backgrounds/FAQ-bg.png); background-size: cover;"></div>
			<!-- /.faq-one__bg -->
			<div class="container">
				<div class="row gutter-y-60">
					<div class="col-lg-6">
						<div class="faq-one__content">
							<div class="sec-title text-start">
								<p class="sec-title__tagline">Why Choose Us?</p><!-- /.sec-title__tagline -->
								<h2 class="sec-title__title">Boost Your Chances for Entrepreneurial Success with Punjab Angels Network.</h2>
							</div><!-- /.sec-title -->
							
							<!-- /.faq-one__content__text -->
							<div class="accordion faq-one__accordion" id="faq-one__accordion-1">
								<div class="accordion-item faq-one__accordion__item">
									<h2 class="accordion-header faq-one__accordion__header"
										id="faq-one__accordion-1__heading-1">
										<button class="accordion-button faq-one__accordion__button" type="button"
											data-bs-toggle="collapse" data-bs-target="#faq-one__accordion-1__collapse-1"
											aria-expanded="true" aria-controls="faq-one__accordion-1__collapse-1">
											Comprehensive Support
											<span class="faq-one__accordion__icon"></span>
											<!-- /.faq-one__accordion__icon -->
										</button>
									</h2>
									<div id="faq-one__accordion-1__collapse-1"
										class="accordion-collapse collapse show faq-one__accordion__collapse"
										aria-labelledby="faq-one__accordion-1__heading-1"
										data-bs-parent="#faq-one__accordion-1">
										<div class="accordion-body faq-one__accordion__body"><ul>
											<li>Financial Advisory </li>
											<li>R&D Consultancy</li>
											<li>Market Research Support</li>
											<li>Legal Services</li>
										</ul></div>
									</div>
								</div>
								<div class="accordion-item faq-one__accordion__item">
									<h2 class="accordion-header faq-one__accordion__header"
										id="faq-one__accordion-1__heading-2">
										<button class="accordion-button faq-one__accordion__button collapsed"
											type="button" data-bs-toggle="collapse"
											data-bs-target="#faq-one__accordion-1__collapse-2" aria-expanded="false"
											aria-controls="faq-one__accordion-1__collapse-2">
											Expert Guidance
											<span class="faq-one__accordion__icon"></span>
										</button>
									</h2>
									<div id="faq-one__accordion-1__collapse-2"
										class="accordion-collapse faq-one__accordion__collapse collapse"
										aria-labelledby="faq-one__accordion-1__heading-2"
										data-bs-parent="#faq-one__accordion-1">
										<div class="accordion-body faq-one__accordion__body">
											
									
											Our network includes professional entrepreneurs, industry experts, and experienced investors who offer valuable mentorship and strategic insights. </div>
									</div>
								</div>



								<div class="accordion-item faq-one__accordion__item">
									<h2 class="accordion-header faq-one__accordion__header"
										id="faq-one__accordion-1__heading-3">
										<button class="accordion-button faq-one__accordion__button collapsed"
											type="button" data-bs-toggle="collapse"
											data-bs-target="#faq-one__accordion-1__collapse-3" aria-expanded="false"
											aria-controls="faq-one__accordion-1__collapse-3">
											Growth-Oriented Programs
											<span class="faq-one__accordion__icon"></span>
										</button>
									</h2>
									<div id="faq-one__accordion-1__collapse-3"
										class="accordion-collapse faq-one__accordion__collapse collapse"
										aria-labelledby="faq-one__accordion-1__heading-3"
										data-bs-parent="#faq-one__accordion-1">
										<div class="accordion-body faq-one__accordion__body">Our initiatives, like the Innovation Catalyst Alliance, provide startups with the resources and opportunities they need to grow, while offering investors flexible exit options and comprehensive growth reports. </div>
									</div>
								</div>



								



							</div>
						</div><!-- /.faq-one__content -->
					</div><!-- /.col-lg-6 -->
					<div class="col-lg-6">
						<div class="faq-one__image">
							<img src="{{asset('guest/images/resources/Entrepreneurial-Success.png')}}" alt="">
						</div><!-- /.faq-one__image -->
					</div><!-- /.col-lg-6 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section>


@endsection

@section('page_level_script')
@endsection