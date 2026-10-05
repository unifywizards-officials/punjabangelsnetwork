@extends('layouts.guest.master')

@section('title','Blogs')
@section('description','Blogs')
@section('keywords','Blogs')

@section('page_level_style')

@endsection

@section('content')
<!--====== Page title area Start ======-->
<section class="page-title-area">
    <div class="container">
        <div class="page-title-content text-center">
            <h1 class="page-title">{{$pageData->top_heading}}</h1>

            <ul class="breadcrumb-nav">
                <li><a href="/">Home</a></li>
                <li class="active">{{$pageData->top_heading}}</li>
            </ul>
        </div>
    </div>
    <div class="page-title-effect d-none d-md-block">
        <img class="particle-1 animate-zoom-fade" src="assets/img/particle/particle-1.png" alt="particle One">
        <img class="particle-2 animate-rotate-me" src="assets/img/particle/particle-2.png" alt="particle Two">
        <img class="particle-3 animate-float-bob-x" src="assets/img/particle/particle-3.png" alt="particle Three">
        <img class="particle-4 animate-float-bob-y" src="assets/img/particle/particle-4.png" alt="particle Four">
        <img class="particle-5 animate-float-bob-y" src="assets/img/particle/particle-5.png" alt="particle Five">
    </div>
</section>
<!--====== Page title area End ======-->

<!--====== Start Blog Standard Loop ======-->
<section class="blog-area p-t-80 p-b-80">
    <div class="container">
        <div class="row justify-content-center">

            @foreach($blog as $blog)
            <div class="col-lg-6">
                <div class="blog-post-items p-r-20 p-r-lg-0">
                    <div class="single-blog-post">
                        <div class="post-thumbnail">
                            @if($blog->image)
                            <img src="{{asset($blog->image)}}" alt="{{$blog->image_alt}}">
                            @else
                            <img src="assets/img/press-release/p-1.png" alt="blog thumbnail one">
                            @endif
                        </div>
                        <div class="post-content">
                            <ul class="post-meta">
                                <li> <i class="far fa-user"></i>Unify Medicraft</li>
                                <li> <i class="far fa-calendar-alt"></i>{{ \Carbon\Carbon::parse($blog->publish_date)->format('d M Y') }}
                                </li>
                                <li> <i class="far fa-user"></i>
                                @foreach($blog->blog_category as $data)
                                {{$data->category_name->category_name}},
                                @endforeach
                                </li>
                            </ul>
                            <h4 class="post-title">
                                <a href="{{route('blog.detail',[$blog->slug])}}">{{$blog->heading}}</a>
                            </h4>
                            <div class="post-excerpt">
                        
                            {{Illuminate\Support\Str::limit($blog->short_description, 126)}}
                            </div>

                            <a href="{{route('blog.detail',[$blog->slug])}}" class="post-read-more pres-btn-2">Learn
                                More <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
            @endforeach


            
        </div>
    </div>
</section>
<!--====== End Blog Standard Loop ======-->


<!--====== Newsletter Area Start ======-->
@include('layouts.guest.common.subscribe')
<!--====== Newsletter Area End ======-->



<!--====== Start Scroll To Top ======-->
<a href="#" class="back-to-top" id="scroll-top">
    <i class="far fa-angle-up"></i>
</a>
<!--====== End Scroll To Top ======-->
@endsection

@section('page_level_script')
@endsection
