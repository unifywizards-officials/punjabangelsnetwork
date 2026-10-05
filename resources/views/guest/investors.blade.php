@extends('layouts.guest.master')

@section('page_level_style')
<style>
	.sec-pad-bottom {
    padding-bottom: 4.5rem;
}
.sec-pad-top {
    padding-top: 4.5rem;
}

@media screen and (min-width: 1100px) and (max-width: 1796px){
	.donations-card__content {
    min-height: 319px;
}
}



</style>
@endsection

@section('content')
<section class="page-header" style="background-image: url(guest/images/backgrounds/investors-bg-main.jpg);">
	<div class="container">
		<ul class="list-unstyled breadcrumb-one">
			<li><a href="index.php">Home</a></li>
			<li><span>Investors </span></li>
		</ul><!-- /.list-unstyled breadcrumb-one -->
		<h1 class="page-header__title ">Overcome Investment Challenges with Punjab Angels Network </h1>
		<p class="text-white mt-20 banner-para">We understand the hurdles investors face!  <br> Our tailored investment solutions ensure that both startups & investors thrive.  </p>
	</div><!-- /.container -->
</section><!-- /.page-header -->

<section class="sec-pad-top sec-pad-bottom">
			<div class="container">
				<div class="sec-title ">
					<p class="sec-title__tagline">Invest Now</p><!-- /.sec-title__tagline -->
					<h2 class="sec-title__title">Overcome Investment Challenges with Us! </h2>
					<p>Our mission is to address the following hurdles head-on, ensuring a seamless and rewarding investment experience: </p>
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
								<div class="donations-card__content">
									<h3 class="donations-card__title"><a href="donations-details.html">Lack of Easy Exit Option </a></h3><!-- /.donations-card__title -->
									<p class="donations-card__text">This lack of liquidity can be a significant deterrent, especially for those who need to reallocate their funds or cash out their investments promptly. </p>
									
								</div><!-- /.donations-card__content -->
							</div><!-- /.donations-card -->
						</div><!-- /.item -->
						<div class="item">
							<div class="donations-card" style="--accent-color: #8139e7;">
								<!-- /.donations-card__image -->
								<div class="donations-card__content">
									<h3 class="donations-card__title"><a href="donations-details.html">Lack of Due Diligence & Investment Expertise </a></h3><!-- /.donations-card__title -->
									<p class="donations-card__text">Without comprehensive evaluation and insights, identifying viable investment opportunities and mitigating risks becomes challenging. </p>
									<!-- /.donations-card__amount -->
								</div><!-- /.donations-card__content -->
							</div><!-- /.donations-card -->
						</div><!-- /.item -->
						<div class="item">
							<div class="donations-card" style="--accent-color: #fdbe44;">
								<!-- /.donations-card__image -->
								<div class="donations-card__content">
									<h3 class="donations-card__title"><a href="donations-details.html">Unawareness of Important Investment Clauses </a></h3><!-- /.donations-card__title -->
									<p class="donations-card__text">Lack of awareness can lead to unfavorable terms and conditions, which might not align with the investor’s financial goals and risk tolerance. </p>
									<!-- /.donations-card__amount -->
								</div><!-- /.donations-card__content -->
							</div><!-- /.donations-card -->
						</div><!-- /.item -->
						<div class="item">
							<div class="donations-card">
								<!-- /.donations-card__image -->
								<div class="donations-card__content">
									<h3 class="donations-card__title"><a href="donations-details.html">Risk Management of Startups </a></h3><!-- /.donations-card__title -->
									<p class="donations-card__text">Investors must be vigilant about the possible risks & be prepared to navigate. This can be overwhelming without the right support and guidance. </p>
									<!-- /.donations-card__amount -->
								</div><!-- /.donations-card__content -->
							</div><!-- /.donations-card -->
						</div><!-- /.item -->
						<!-- /.item -->
					</div><!-- /.thm-tns__carousel -->
				</div><!-- /.donations-carousel -->
			</div><!-- /.container -->
		</section><!-- /.sec-pad-top sec-pad-bottom -->



		<!-- <section class="sec-pad-top sec-pad-bottom about-four">
			
			<div class="container">
				<div class="sec-title text-center">
					<p class="sec-title__tagline">What We Offer </p>
					<h2 class="sec-title__title">Our Comprehensive Solutions </h2>
				</div>

				<div class="row gutter-y-60">
					<div class="col-md-12 col-lg-5">
						<div class="about-four__image wow fadeInLeft" data-wow-duration="1500ms">
							<img src="{{asset('/guest/images/resources/investor-1.jpg')}}" alt="">
							
						</div>
					</div>
					<div class="col-md-12 col-lg-7">
						<div class="about-four__content">
							
						
							<ul class="list-unstyled about-four__list">
								<li class="about-four__list__item">
									<i class="fa fa-check-circle"></i>
									<h3 class="about-four__list__title">Flexible Exit Option </h3>
								
									<p class="about-four__list__text">To address the liquidity hindrance, we provide a flexible exit option. It ensures that they can access their capital when needed and maintain financial agility.  </p>
								
								</li>
								<li class="about-four__list__item">
									<i class="fa fa-check-circle"></i>
									<h3 class="about-four__list__title">Diverse Investment Sizes </h3>
									
									<p class="about-four__list__text">We offer investment opportunities in various lot sizes: 2 Lakhs, 4 Lakhs, 8 Lakhs, & 10 Lakhs. This structure accommodates investors with different capacities.   </p>
								
								</li>
								<li class="about-four__list__item">
									<i class="fa fa-check-circle"></i>
									<h3 class="about-four__list__title">Regular Growth Reports </h3>
									
									<p class="about-four__list__text">Our investors receive timely growth reports on invested startups and MSMEs. This offers valuable insights into the performance and progress of their investments. </p>
									
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section> -->


		<section class="sec-pad-top sec-pad-bottom about-two">
	<img src="{{asset('guest/images/shapes/about-1-1.png')}}" class="about-two__shape-1 float-bob-x" alt="">
	<div class="container">
		<div class="row gutter-y-60">
			<div class="col-md-12 col-lg-6">
				<div class="about-two__image">
					<div class="about-two__image__shape-1"></div>
					<div class="about-two__image__shape-2"></div>
					<div class="about-two__image__shape-3"></div>
					<img src="{{asset('/guest/images/resources/investor-2.jpg')}}" class="wow fadeInLeft" data-wow-duration="1500ms" alt="">
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
						<p class="sec-title__tagline"> Architects of Ambition- </p><!-- /.sec-title__tagline -->
						<h2 class="sec-title__title">Join Us in Shaping the Future!</h2>
					</div><!-- /.sec-title -->
					<p class="about-two__text">At Punjab Angels Network, we are committed to building a robust entrepreneurial ecosystem.  </p> <br>
					<p class="about-two__text"> Be part of a transformative journey where your investments fuel innovation and success. </p><!-- /.about-two__text -->
				<br>	<p class="about-two__text"> Ready to Make a Difference?  </p>	<!-- <ul class="list-unstyled about-two__info">
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
							<span>Connect with Us! </span>
						</a>
					</div>
				</div>
			</div>
		</div><!-- /.row -->
	</div>
</section>


@endsection

@section('page_level_script')
@endsection