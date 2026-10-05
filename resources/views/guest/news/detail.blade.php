@extends('layouts.guest.master')

@section('title', $blog->meta_title)
@section('description', $blog->meta_description)
@section('keywords', $blog->meta_keyword)

@section('page_level_style')

@endsection

@section('content')

    <section class="page-header" style="background-image: url(guest/images/backgrounds/page-header-1-1.jpg);">
        <div class="container">
            <ul class="list-unstyled breadcrumb-one">
                <li><a href="{{ route('homepage') }}">Home</a></li>
                <li><span>News</span></li>
            </ul><!-- /.list-unstyled breadcrumb-one -->
            <h2 class="page-header__title">News post</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <section class="sec-pad-top sec-pad-bottom blog-details">
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-lg-8">
                    <div class="blog-details__content clearfix">
                        <div class="blog-details__image">

                            <img src="{{ asset($blog->image) }}" alt="{{ $blog->image_alt }}">
                            <div class="blog-card__date">
                                <?php $date = \Carbon\Carbon::parse($blog->publish_date); ?>
                                <span>{{ $date->format('d') }}</span>{{ $date->format('F') }}<br>{{ $date->format('Y') }}
                            </div><!-- /.blog-card__date -->
                        </div><!-- /.blog-details__image -->
                        <ul class="blog-card__meta list-unstyled">
                            <li>
                                <i class="fa fa-user"></i>
                                <a href="#">by Admin</a>
                            </li>
                            {{-- <li>
									<i class="fa fa-comments"></i>
									<a href="#">02 comments</a>
								</li> --}}
                        </ul><!-- /.blog-card__meta -->
                        <h3 class="blog-card__title">{{ $blog->heading }}</h3><!-- /.blog-card__title -->
                        {!! $blog->long_description !!}
                    </div><!-- /.blog-details__content -->
                    <div class="blog-details__bottom">
                        <p class="blog-details__tags">
                            <span>Tags</span>
                            @foreach ($blog->news_category as $category)
                                <a href="#">{{ $category->category_name->category_name }}</a>
                            @endforeach
                        </p>
                        <div class="blog-details__social">
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-pinterest"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div><!-- /.blog-details__bottom -->

                </div><!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__single--search">
                            {{-- <form action="#">
									<input type="text" placeholder="Search here..">
									<button type="submit"><i class="paroti-icon-magnifying-glass"></i></button>
								</form> --}}
                        </div><!-- /.sidebar__single -->
                        <div class="sidebar__single sidebar__single--posts">
                            <h3 class="sidebar__title">Recent posts</h3><!-- /.sidebar__title -->
                            <ul class="list-unstyled sidebar__post">
                                @foreach ($recent_post as $recent_post)
                                    <li><a href="{{ route('news.detail', [$recent_post->slug]) }}">
                                            <img src="{{ asset($recent_post->image) }}" alt="{{ $recent_post->image_alt }}"
                                                width="60">

                                            <span class="sidebar__post__title">{{ $recent_post->heading }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div><!-- /.sidebar__single -->
                        <div class="sidebar__single sidebar__single--lists">
                            <h3 class="sidebar__title">Categories</h3><!-- /.sidebar__title -->
                            <ul class="list-unstyled sidebar__lists">
                                @foreach ($blog->news_category as $category)
                                    <li><a href="#">{{ $category->category_name->category_name }}</a></li>
                                @endforeach
                            </ul>
                        </div><!-- /.sidebar__single -->
                        <div class="sidebar__single sidebar__single--tags">
                            <h3 class="sidebar__title">Tags</h3><!-- /.sidebar__title -->
                            <p class="sidebar__tags">
                                @foreach ($blog->news_category as $category)
                                    <a href="#">{{ $category->category_name->category_name }}</a>
                                @endforeach
                            </p>
                        </div><!-- /.sidebar__single -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.sec-pad-top sec-pad-bottom -->
@endsection

@section('page_level_script')
    <script></script>
@endsection
