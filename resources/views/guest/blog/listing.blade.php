@extends('layouts.guest.master')


@section('page_level_style')
@endsection

@section('content')

    <section class="page-header" style="background-image: url(guest/images/backgrounds/page-header-1-1.jpg);">
        <div class="container">
            <ul class="list-unstyled breadcrumb-one">
                <li><a href="{{ route('homepage') }}">Home</a></li>
                <li><span>Blog</span></li>
            </ul><!-- /.list-unstyled breadcrumb-one -->
            <h2 class="page-header__title">Blog page</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <section class="sec-pad-top sec-pad-bottom">
        <div class="container">
            @if ($blog->isNotEmpty())
                <div class="row gutter-y-30">
                    @foreach ($blog as $data)
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="blog-card">
                                <div class="blog-card__image">
                                    <img src="{{ asset($data->image) }}" alt="{{ $data->image_alt }}">
                                    <div class="blog-card__date">
                                        <?php $date = \Carbon\Carbon::parse($data->publish_date); ?>
                                        <span>{{ $date->format('d') }}</span>{{ $date->format('F') }}<br><br>{{ $date->format('Y') }}
                                    </div><!-- /.blog-card__date -->
                                </div><!-- /.blog-card__image -->
                                <div class="blog-card__content">
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
                                    <h3 class="blog-card__title"><a
                                            href="{{ route('blog.detail', [$data->slug]) }}">{{ $data->heading }}</a></h3>
                                    <!-- /.blog-card__title -->
                                    <a href="{{ route('blog.detail', [$data->slug]) }}" class="blog-card__links">
                                        <i class="fa fa-angle-double-right"></i>
                                        Read More</a><!-- /.blog-card__links -->
                                </div><!-- /.blog-card__content -->
                            </div><!-- /.blog-card -->
                        </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    @endforeach
                    <div class="d-flex justify-content-center">
                        {!! $blog->links() !!}
                    </div>
                </div><!-- /.row -->
            @else
                @include('guest.event.no_data')
            @endif
        </div><!-- /.container -->
    </section><!-- /.sec-pad-top -->
@endsection

@section('page_level_script')
    <script>
        $(document).ready(function() {
            $(document).ready(function() {
                // $('#example2').DataTable();
            });
        });
    </script>
@endsection
