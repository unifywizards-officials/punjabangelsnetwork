@extends('layouts.guest.master')

@section('page_level_style')
    <style>
        .donations-card {
            background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
            border-radius: 8px
        }
    </style>
@endsection

@section('content')
    <section class="page-header" style="background-image: url(guest/images/backgrounds/partner-bg.png);">
        <div class="container">
            <ul class="list-unstyled breadcrumb-one">
                <li><a href="index.php">Home</a></li>
                <li><span>Partners</span></li>
            </ul><!-- /.list-unstyled breadcrumb-one -->
            <h2 class="page-header__title">Building Bridges, Creating Impact: Meet Our Partners </h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->









    @if ($partner_in_action->isNotEmpty())
        <section class="sec-pad-top sec-pad-bottom ">
            <div class="container">
                <div class="sec-title text-center">
                    <p class="sec-title__tagline">Nurturing Success:</p><!-- /.sec-title__tagline -->
                    <h2 class="sec-title__title sub-title-h"> Our Growth Partners in Action </h2>
                </div>

                <div class="col-md-12 col-lg-12">
                    <div class="thm-owl__carousel owl-carousel owl-theme donation-two__carousel"
                        data-owl-options='{
						"items": 1,
						"margin": 0,
						"loop": true,
						"autoplayTimeout": 1500,
						"nav": false,
						"dots": false,
						"autoplay": true,
						"responsive": {
							"0": {
								"items": 1
							},
							"700": {
								"items": 2,
								"margin": 10
							},
							"1000": {
								"items": 3,
								"margin": 20
							},
							"1200": {
								"items": 3,
								"margin": 30
							}
						}
					}'>

                        @foreach ($partner_in_action as $item)
                            <div class="donations-card">
                                <div class="donations-card__image">
                                    @if ($item->image)
                                        <a href="{{ $item->website_url }}" target="_blank">
                                            <img src="{{ asset($item->image) }}" alt="{{ $item->image_alt }}">
                                        </a>
                                    @else
                                        <a href="#">
                                            <img src="{{ asset('guest/images/businsess_placeholder2.png') }}"
                                                alt="placeholder-business-image">
                                        </a>
                                    @endif
                                    <!-- /.donations-card__category -->
                                </div><!-- /.donations-card__image -->
                                <!-- /.donations-card__content -->
                            </div><!-- /.donations-card -->
                            <!-- /.donations-card -->
                        @endforeach
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section>
    @endif

    @if ($ecosystem_partner->isNotEmpty())
        <section class="sec-pad-top sec-pad-bottom" style="background-color: #f7f7f7" ,>
            <div class="container">
                <div class="sec-title text-center">
                    <p class="sec-title__tagline">Our </p><!-- /.sec-title__tagline -->
                    <h2 class="sec-title__title sub-title-h"> Ecosystem Partners, Our Strength. </h2>
                </div>
                <div class="row gutter-y-30">

                    @foreach ($ecosystem_partner as $ecosystem_partner)
                        <div class="col-md-6 col-lg-4">
                            <div class="donations-card">
                                <div class="donations-card__image">

                                    @if ($ecosystem_partner->image)
                                        <a href="{{ $ecosystem_partner->website_url }}" target="_blank">
                                            <img src="{{ asset($ecosystem_partner->image) }}"
                                                alt="{{ $ecosystem_partner->image_alt }}">
                                        </a>
                                    @else
                                        <a href="#">
                                            <img src="{{ asset('guest/images/businsess_placeholder2.png') }}"
                                                alt="placeholder-business-image">
                                        </a>
                                    @endif
                                    <!-- /.donations-card__category -->
                                </div><!-- /.donations-card__image -->
                                <!-- /.donations-card__content -->
                            </div><!-- /.donations-card -->
                        </div><!-- /.col-md-6 col-lg-4 -->
                    @endforeach

                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.sec-pad-top sec-pad-bottom -->
    @endif






















    @if ($institutional_partner->isNotEmpty())
        <section class="sec-pad-top sec-pad-bottom ">
            <div class="container">
                <div class="sec-title text-center">
                    <p class="sec-title__tagline">Our </p><!-- /.sec-title__tagline -->
                    <h2 class="sec-title__title sub-title-h"> Strategic Allies, Shared Success: Our Institutional Partners
                    </h2>
                </div>


                <div class="col-md-12 col-lg-12">
                    <div class="thm-owl__carousel owl-carousel owl-theme donation-two__carousel"
                        data-owl-options='{
						"items": 1,
						"margin": 0,
						"loop": true,
						"autoplayTimeout": 1500,
						"nav": false,
						"dots": false,
						"autoplay": true,
						"responsive": {
							"0": {
								"items": 1
							},
							"700": {
								"items": 2,
								"margin": 10
							},
							"1000": {
								"items": 3,
								"margin": 20
							},
							"1200": {
								"items": 4,
								"margin": 30
							}
						}
					}'>

                        @foreach ($institutional_partner as $institutional_partner)
                            <div class="donations-card">
                                <div class="donations-card__image">

                                    @if ($institutional_partner->image)
                                        <a href="{{ $institutional_partner->website_url }}" target="_blank">
                                            <img src="{{ asset($institutional_partner->image) }}"
                                                alt="{{ $institutional_partner->image_alt }}">
                                        </a>
                                    @else
                                        <a href="#">
                                            <img src="{{ asset('guest/images/businsess_placeholder2.png') }}"
                                                alt="placeholder-business-image">
                                        </a>
                                    @endif
                                    <!-- /.donations-card__category -->
                                </div><!-- /.donations-card__image -->
                                <!-- /.donations-card__content -->
                            </div><!-- /.donations-card -->
                        @endforeach


                    </div>
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.sec-pad-top sec-pad-bottom -->
    @endif
@endsection

@section('page_level_script')
@endsection
