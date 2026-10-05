@extends('layouts.guest.master')

@section('page_level_style')

@endsection

@section('content')

<section class="page-header" style="background-image: url(guest/images/events/events-d-1.jpg);">
			<div class="container">
				<ul class="list-unstyled breadcrumb-one">
					<li><a href="index.php">Home</a></li>
					<li><span>Events</span></li>
				</ul><!-- /.list-unstyled breadcrumb-one -->
				<h2 class="page-header__title">Events page</h2>
			</div><!-- /.container -->
		</section><!-- /.page-header -->

		<section class="sec-pad-top sec-pad-bottom">
			<div class="container">
				<div class="row gutter-y-30">
					<div class="col-md-12 col-lg-4">
						<div class="events-card">
							<div class="events-card__image">
								<img src="{{asset('guest/images/events/events-1.png')}}" alt="">
								<img src="{{asset('guest/images/events/events-1.png')}}" class="events-card__image--hover" alt="">
							</div><!-- /.events-card__image -->
							<div class="events-card__content">
								<div class="events-card__date">20 Aug</div><!-- /.events-card__date -->
								<ul class="events-card__meta list-unstyled">
									<li>
										<i class="fa fa-clock"></i>
										<a href="#">8:00 pm</a>
									</li>
									<li>
										<i class="fa fa-map-marker-alt"></i>
										<a href="#">New York</a>
									</li>
								</ul><!-- /.blog-card__meta -->
								<h3 class="events-card__title"><a href="event-details.php">Play for their world
										with us</a></h3><!-- /.events-card__title -->
							</div><!-- /.events-card__content -->
						</div><!-- /.events-card -->
					</div><!-- /.col-md-12 col-lg-4 -->
					<div class="col-md-12 col-lg-4">
						<div class="events-card">
							<div class="events-card__image">
								<img src="{{asset('guest/images/events/events-1.png')}}" alt="">
								<img src="{{asset('guest/images/events/events-1.png')}}" class="events-card__image--hover" alt="">
							</div><!-- /.events-card__image -->
							<div class="events-card__content">
								<div class="events-card__date">20 Aug</div><!-- /.events-card__date -->
								<ul class="events-card__meta list-unstyled">
									<li>
										<i class="fa fa-clock"></i>
										<a href="#">8:00 pm</a>
									</li>
									<li>
										<i class="fa fa-map-marker-alt"></i>
										<a href="#">New York</a>
									</li>
								</ul><!-- /.blog-card__meta -->
								<h3 class="events-card__title"><a href="event-details.php">Play for their world
										with us</a></h3><!-- /.events-card__title -->
							</div><!-- /.events-card__content -->
						</div><!-- /.events-card -->
					</div><!-- /.col-md-12 col-lg-4 -->
					<div class="col-md-12 col-lg-4">
						<div class="events-card">
							<div class="events-card__image">
								<img src="{{asset('guest/images/events/events-1.png')}}" alt="">
								<img src="{{asset('guest/images/events/events-1.png')}}" class="events-card__image--hover" alt="">
							</div><!-- /.events-card__image -->
							<div class="events-card__content">
								<div class="events-card__date">20 Aug</div><!-- /.events-card__date -->
								<ul class="events-card__meta list-unstyled">
									<li>
										<i class="fa fa-clock"></i>
										<a href="#">8:00 pm</a>
									</li>
									<li>
										<i class="fa fa-map-marker-alt"></i>
										<a href="#">New York</a>
									</li>
								</ul><!-- /.blog-card__meta -->
								<h3 class="events-card__title"><a href="event-details.php">Play for their world
										with us</a></h3><!-- /.events-card__title -->
							</div><!-- /.events-card__content -->
						</div><!-- /.events-card -->
					</div><!-- /.col-md-12 col-lg-4 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.sec-pad-top sec-pad-bottom -->
@endsection

@section('page_level_script')
@endsection