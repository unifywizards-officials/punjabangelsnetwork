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
	@media screen and (min-width: 1100px) and (max-width: 1796px){
		@media screen and (min-width: 1100px) and (max-width: 1796px){
	.donations-card__content {
    min-height: 319px;
}
}
}
</style>
@endsection

@section('content')




<section class="page-header" style="background-image: url(guest/images/fund-raiser-bg.jpg);">
	<div class="container">
		<ul class="list-unstyled breadcrumb-one">
			<li><a href="index.php">Home</a></li>
			<li><span>Fund Raising </span></li>
		</ul><!-- /.list-unstyled breadcrumb-one -->
		<h1 class="page-header__title ">Fund Raising for Ecosystem Enablers <br>Bridging Visions, Fueling Growth! </h1>
		<p class="text-white mt-20 banner-para">Welcome to Punjab Angels Network—a dynamic platform where visionary startups meet forward-thinking investors. </p>
	</div><!-- /.container -->
</section>
<section class="sec-pad-top sec-pad-bottom about-four">

	<div class="container">
		<div class="sec-title text-center">
			<p class="sec-title__tagline">What We Offer </p><!-- /.sec-title__tagline -->
			<h2 class="sec-title__title">Empowering Innovation with Flexible Funding </h2>
		</div><!-- /.sec-title -->

		<div class="row gutter-y-60">
			<div class="col-md-12 col-lg-5">
				<div class="about-four__image wow fadeInLeft" data-wow-duration="1500ms">
					<img src="{{asset('/guest/images/fundraising-1.jpg')}}" alt="">

				</div><!-- /.about-four__image -->
			</div><!-- /.col-md-12 -->
			<div class="col-md-12 col-lg-7">
				<div class="about-four__content">
					<p>
						Fund Raising for Ecosystem Enablers is a pioneering initiative designed to seamlessly connect startups with investors. We understand that both parties seek not just financial gains but also flexibility and security. <br> That's why we offer:
					</p>
					<!-- /.about-four__content__text -->
					<ul class="list-unstyled about-four__list">
						<li class="about-four__list__item">
							<i class="fa fa-check-circle"></i>
							<h3 class="about-four__list__title">Flexible Exit Option: </h3>
							<!-- /.about-four__list__title -->
							<p class="about-four__list__text">Annual exit opportunities ensuring liquidity for investors. </p>
							<!-- /.about-four__list__text -->
						</li>
						<li class="about-four__list__item">
							<i class="fa fa-check-circle"></i>
							<h3 class="about-four__list__title">Diverse Investment Sizes:</h3>
							<!-- /.about-four__list__title -->
							<p class="about-four__list__text">Tailored investment options starting from 2 Lakhs up to 10 Lakhs. </p>
							<!-- /.about-four__list__text -->
						</li>
						<li class="about-four__list__item">
							<i class="fa fa-check-circle"></i>
							<h3 class="about-four__list__title">Growth Reports:</h3>
							<!-- /.about-four__list__title -->
							<p class="about-four__list__text"> Regular updates on the performance of your investments. </p>
							<!-- /.about-four__list__text -->
						</li>
					</ul><!-- /.list-unstyled -->
				</div><!-- /.about-four__content -->
			</div><!-- /.col-md-12 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>


<section class="sec-pad-top sec-pad-bottom">
	<div class="container">
		<div class="sec-title ">
			<p class="sec-title__tagline">-------</p><!-- /.sec-title__tagline -->
			<h2 class="sec-title__title">Comprehensive Services for Startups </h2>
			<p>At Punjab Angels Network, we provide a holistic suite of services to support startups: </p>
		</div><!-- /.sec-title -->

		<div class="donations-carousel">
			<div class="thm-tns__carousel" id="donations-carousel-1" data-tns-options='{
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
						<!-- /.donations-card__image -->
						<div class="donations-card__content content-height">
							<h3 class="donations-card__title"><a href="donations-details.html">Financial Planning & Taxation </a></h3><!-- /.donations-card__title -->
							<p class="donations-card__text">Extensive GST & IT compliance service with expense management </p>

						</div><!-- /.donations-card__content -->
					</div><!-- /.donations-card -->
				</div><!-- /.item -->
				<div class="item">
					<div class="donations-card" style="--accent-color: #8139e7;">
						<!-- /.donations-card__image -->
						<div class="donations-card__content content-height">
							<h3 class="donations-card__title"><a href="donations-details.html">Funding Support</a></h3><!-- /.donations-card__title -->
							<p class="donations-card__text">Simplifying your fundraising journey with expert guidance & Unparalleled Insights. </p>
							<!-- /.donations-card__amount -->
						</div><!-- /.donations-card__content -->
					</div><!-- /.donations-card -->
				</div><!-- /.item -->
				<div class="item">
					<div class="donations-card" style="--accent-color: #fdbe44;">
						<!-- /.donations-card__image -->
						<div class="donations-card__content content-height">
							<h3 class="donations-card__title"><a href="donations-details.html">Mentorship Programs</a></h3><!-- /.donations-card__title -->
							<p class="donations-card__text">Engage in our Accelerator Programs, Masterclasses, and Podcasts for unparalleled growth insights. </p>
							<!-- <p class="donations-card__text">Accelerator Programs, Masterclasses, & Podcasts providing insights.   </p> -->
							<!-- /.donations-card__amount -->
						</div><!-- /.donations-card__content -->
					</div><!-- /.donations-card -->
				</div><!-- /.item -->
				<div class="item">
					<div class="donations-card">
						<!-- /.donations-card__image -->
						<div class="donations-card__content content-height">
							<h3 class="donations-card__title"><a href="donations-details.html">Due Diligence Assistance</a></h3><!-- /.donations-card__title -->
							<p class="donations-card__text">Navigate through investment clauses, marketing, and other crucial decisions. </p>
							<!-- /.donations-card__amount -->
						</div><!-- /.donations-card__content -->
					</div><!-- /.donations-card -->
				</div>
				<div class="item">
					<div class="donations-card">
						<!-- /.donations-card__image -->
						<div class="donations-card__content content-height">
							<h3 class="donations-card__title"><a href="donations-details.html">Foundation Course for Start-Ups</a></h3><!-- /.donations-card__title -->
							<p class="donations-card__text">From idea inception to IPO readiness, ensure your startup's success. </p>
							<!-- /.donations-card__amount -->
						</div><!-- /.donations-card__content -->
					</div><!-- /.donations-card -->
				</div><!-- /.item -->
				<!-- /.item -->
			</div><!-- /.thm-tns__carousel -->
		</div><!-- /.donations-carousel -->
	</div><!-- /.container -->
</section><!-- /.sec-pad-top sec-pad-bottom -->

<section class="about-three">
	<div class="about-three__shape wow slideInLeft" data-wow-duration="1500ms" style="z-index: -1;"></div>
	<!-- /.about-three__shape -->
	<div class="container">
		<div class="row gutter-y-60">
			<div class="col-md-12 col-lg-5">
				<div class="about-three__content">
					<div class="sec-title">
						<p class="sec-title__tagline">Residency Immersion Program </p><!-- /.sec-title__tagline -->
						<h2 class="sec-title__title">Custom Solutions for Startups and Investors </h2>
					</div><!-- /.sec-title -->
					<div class="about-three__text">Immerse yourself in our expert-driven Residency Program. </div><!-- /.about-three__text -->
					<div class="about-three__text">We provide 3 days of intensive sessions covering the knowledge of marketing, finance, legalities and technology every month. You will get expert guidance from top industry veterans along with comprehensive business education through weekly online classes. </div>
					<div class="about-three__text">We are always there for you with 24/7 mentorship and guidance. You will get real life feedback by participating in online and offline pitch sessions. We will also provide you with the chance to visit monthly events where you can build connections and explore opportunities. </div>
				</div><!-- /.about-three__content -->
			</div><!-- /.col-md-12 col-lg-5 -->
			<div class="col-md-12 col-lg-7">
				<div class="about-three__image">
					<img src="{{asset('guest/images/fund-wide.jpg')}}" alt="">
				</div><!-- /.about-three__image -->
			</div><!-- /.col-md-12 col-lg-7 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>
<section class="faq-one">
	<div class="faq-one__bg" style="background: url(guest/images/backgrounds/FAQ-bg.png); background-size: cover;"></div>
	<!-- /.faq-one__bg -->
	<div class="container">
		<div class="row gutter-y-60">
			<div class="col-lg-6">
				<div class="faq-one__content">
					<div class="sec-title text-start">
						<p class="sec-title__tagline">Value for Investors and Experts </p><!-- /.sec-title__tagline -->
						<h2 class="sec-title__title">Unlock Opportunities with Punjab Angels Network</h2>
					</div><!-- /.sec-title -->

					<!-- /.faq-one__content__text -->
					<div class="accordion faq-one__accordion" id="faq-one__accordion-1">
						<div class="accordion-item faq-one__accordion__item">
							<h2 class="accordion-header faq-one__accordion__header" id="faq-one__accordion-1__heading-1">
								<button class="accordion-button faq-one__accordion__button" type="button" data-bs-toggle="collapse" data-bs-target="#faq-one__accordion-1__collapse-1" aria-expanded="true" aria-controls="faq-one__accordion-1__collapse-1">
									For Investors:
									<span class="faq-one__accordion__icon"></span>
									<!-- /.faq-one__accordion__icon -->
								</button>
							</h2>
							<div id="faq-one__accordion-1__collapse-1" class="accordion-collapse collapse show faq-one__accordion__collapse" aria-labelledby="faq-one__accordion-1__heading-1" data-bs-parent="#faq-one__accordion-1">
								<div class="accordion-body faq-one__accordion__body">
									<ul>
										<li><b>Equity Shares: </b> Minimum 1% equity in invested startups. </li>
										<li><b>Expert Role: </b>Opportunity to serve as an expert or faculty in our Residency Program. </li>
										<li><b>Membership Benefits: </b> Complimentary Investor Membership of Punjab Angels Network. </li>
									</ul>
								</div>
							</div>
						</div>
						<div class="accordion-item faq-one__accordion__item">
							<h2 class="accordion-header faq-one__accordion__header" id="faq-one__accordion-1__heading-2">
								<button class="accordion-button faq-one__accordion__button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-one__accordion-1__collapse-2" aria-expanded="false" aria-controls="faq-one__accordion-1__collapse-2">
								For Experts/Faculty: 
									<span class="faq-one__accordion__icon"></span>
								</button>
							</h2>
							<div id="faq-one__accordion-1__collapse-2" class="accordion-collapse faq-one__accordion__collapse collapse" aria-labelledby="faq-one__accordion-1__heading-2" data-bs-parent="#faq-one__accordion-1">
								<div class="accordion-body faq-one__accordion__body"><ul>
										<li><b>Remuneration: </b> Competitive pay for Residency Program participation.  </li>
										<li><b>Advisory Shares: </b>Gain advisory shares in companies you guide. </li>
										<li><b>Additional Fees: </b> Compensation for extra services and sessions provided to startups.  </li>
									</ul></div>
							</div>
						</div>



						







					</div>
				</div><!-- /.faq-one__content -->
			</div><!-- /.col-lg-6 -->
			<div class="col-lg-6">
				<div class="faq-one__image">
					<img src="{{asset('guest/images/sahil-m-fund-raising.jpg')}}" alt="">
				</div><!-- /.faq-one__image -->
			</div><!-- /.col-lg-6 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</section>
<section class="sec-pad-top cta-one sec-pad-bottom">
			<div class="cta-one__bg" style="background-image: url(guest/images/backgrounds/about-cta.jpg);"></div>
			
			<!-- /.cta-one__shape -->
			<!-- /.cta-one__bg -->
			<div class="container  text-center">
				<div class="sec-title">
					<p class="sec-title__tagline">Join the Future of Innovation </p><!-- /.sec-title__tagline -->
					<h2 class="sec-title__title">Join us today and take your startup to new heights. Together, we can turn entrepreneurial dreams into reality. 
					</h2>
				</div><!-- /.sec-title -->
				<a href="{{ route('contact') }}" class="thm-btn cta-one__btn"><span>Talk To Us</span></a>
			</div><!-- /.container -->
		</section>















@endsection

@section('page_level_script')
@endsection