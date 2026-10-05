@extends('layouts.guest.master')
@section('title', $blog->meta_title)
@section('description', $blog->meta_description)
@section('keywords', $blog->meta_keyword)
@section('page_level_style')
<style>
   span {
   color: black;
   }
   .events-card_title {
   color: black;
   }
   a {
   color: gray;
   }
</style>
@endsection
@section('content')
<section class="page-header" style="background-image: url('{{ asset('guest/images/events/events-d-1.jpg') }}');">
   <div class="container">
      <ul class="list-unstyled breadcrumb-one">
         <li><a href="{{ route('homepage') }}">Home</a></li>
         <li><span>Captech 2024</span></li>
      </ul>
      <!-- /.list-unstyled breadcrumb-one -->
      <h2 class="page-header__title">Captech 2024 Sydney,Australia</h2>
   </div>
   <!-- /.container -->
</section>
<!-- /.page-header -->
<section class="sec-pad-top sec-pad-bottom events-details">
   <div class="container">
      <div class="row gutter-y-60">
         <div class="col-lg-8">
            <div class="events-details__content">
               <h3 class="events-card_title">{{ $blog->heading }}</h3>
               <!-- /.events-card_title -->
               {!! $blog->long_description !!}
               @php
               $currentDate = \Carbon\Carbon::now()->format('Y-m-d');
               $publishDate = \Carbon\Carbon::parse($blog->start_date)->format('Y-m-d');
               @endphp
               @if ($currentDate >= $publishDate)
               <div class="alert alert-warning" role="alert">
                  Event registration closed.
               </div>
               @else
               <!--<a href="{{ route('eventFormView', [$blog->slug]) }}"-->
               <!--    class="thm-btn events-details__btn"><span>Register-->
               <!--        your-->
               <!--        seat</span>-->
               <!--</a>-->
               <!--<a href="https://rzp.io/l/Transform11"-->
               <!--    class="thm-btn events-details__btn"><span>Register your seat</span>-->
               <!--</a>-->
               @if($blog->type == 'captech')
               <a href="{{ route('eventForm.view', [$blog->slug]) }}"
                  class="thm-btn events-details__btn"><span>Register your seat</span>
               </a>
               <!--<a href="{{ $blog->payment_link }}"-->
               <!--class="thm-btn events-details__btn"><span>Register your seat</span>-->
               <!--</a>-->
               @else
               <a href="{{ route('eventForm.view', [$blog->slug]) }}"
                  class="thm-btn events-details__btn"><span>Register your seat</span>
               </a>
               @endif
               @endif
            </div>
            <!-- /.events-details__content -->
         </div>
         <!-- /.col-lg-8 -->
         <div class="col-lg-4">
            <div class="events-details__sidebar">
               <div class="events-details__image">
                  <div class="slider">
                     <div class="thm-tns__carousel" id="image-slider" 
                        data-tns-options='{
                        "container": "#image-slider",
                        "loop": true,
                        "autoplay": true,
                        "items": 1,
                        "gutter": 0,
                        "mouseDrag": true,
                        "touch": true,
                        "nav": false,
                        "autoplayButtonOutput": false,
                        "controls": false
                        }'>
                        <div class="item">
                           <img src="{{ asset('captech24/1st_image.jpg') }}" alt="1st_image">
                        </div>
                        <div class="item">
                           <img src="{{ asset('captech24/2nd_image.jpg') }}" alt="2nd_image">
                        </div>
                        <div class="item">
                           <img src="{{ asset('captech24/3rd_image.jpg') }}" alt="3rd_image">
                        </div>
                        <div class="item">
                           <img src="{{ asset('captech24/4th_image.jpg') }}" alt="4th_image">
                        </div>
                        <div class="item">
                           <img src="{{ asset('captech24/5th_image.jpg') }}" alt="5th_image">
                        </div>
                        
                     </div>
                  </div>
                  <hr>
               </div>
               <div class="events-details_sidebar_single">
                  <div class="events-details_sidebar_info">
                     <!-- <p>
                        <span><b>Starting time:</b></span>
                        {{ \Carbon\Carbon::createFromFormat('H:i', $blog->start_time)->format('h:i A') }}
                        </p> -->
                     <p>
                        <span><b>Date:</b></span>
                        {{ \Carbon\Carbon::parse($blog->publish_date)->format('d F, Y') }}
                     </p>
                     <p>
                        <span><b>Category:</b></span>
                        @foreach ($blog->event_category as $category)
                        {{-- <a href="#">{{$category->category_name->category_name}}</a> --}}
                        <a href="#">{{ $category->category_name->category_name }}</a>,
                        @endforeach
                     </p>
                     <!-- <p>
                        <span><b>Website:</b></span>
                        @if ($blog->website)
                            <a href="{{ $blog->website }}"></a>
                        @else
                            N/A
                        @endif
                        </p> -->
                     <p>
                        <span><b>Location:</b></span>
                        {{ $blog->location }}
                     </p>
                  </div>
                  <!-- /.events-details_sidebar_info -->
               </div>
               <!-- /.events-details_sidebar_single -->
               {{-- 
               <div class="events-details_sidebar_single">
                  <iframe
                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                     class="events-details_sidebar_map" allowfullscreen></iframe>
               </div>
               <!-- /.events-details_sidebar_single --> --}}
               <div class="events-details_sidebar_single">
                  <div class="events-details_sidebar_social">
                     <a href="https://x.com/PunjabAngelsNW" target="_blank"><i class="fab fa-twitter"></i></a>
                     <a href="https://www.facebook.com/punjabangelsnetwork/" target="_blank"><i
                        class="fab fa-facebook"></i></a>
                     <a href="https://www.linkedin.com/company/punjabangelsnetwork/" target="_blank"><i
                        class="fab fa-linkedin"></i></a>
                     <a href="https://www.instagram.com/punjabangelsnetwork/" target="_blank"><i
                        class="fab fa-instagram"></i></a>
                  </div>
               </div>
               <!-- /.events-details_sidebar_single -->
            </div>
            <!-- /.events-details__sidebar -->
         </div>
         <!-- /.col-lg-4 -->
      </div>
      <!-- /.row -->
   </div>
   <!-- /.container -->
</section>
<!-- /.sec-pad-top sec-pad-bottom -->
@endsection
@section('page_level_script')
<script></script>
@endsection