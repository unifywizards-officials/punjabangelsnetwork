@extends('layouts.guest.master')


@section('page_level_style')
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.css" />
    <style>
        label.search-labels {
            font-weight: 700;
            font-size: 15px;
            color: black;
        }


        .events-card__content {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(var(--paroti-black-rgb, 20, 64, 71), 0.95);
            padding: 30px;
        }

        .event-img {
            max-width: 100%;
            height: auto;
            border: 1px solid #dee2e6;
            border-radius: 5px;
        }

        .form-control {
            padding: .75rem 1rem;
            color: #495057;
            background-color: #f8f9fa;
            border-radius: .25rem;
        }
    </style>
    <style>
    .my-slider .item img {
        width: 100%;
        height: auto;
        display: block;
    }
    .height-trt{
        padding-bottom: 5.3rem !important;
    }
    .funfact-two__shape {
    position: absolute;
    bottom: -5px;}
    .card-with-bg{
      --bg: #e8e8e8;
  --contrast: #f4f4f4;
  --grey: #93a1a1;
  position: relative;
  padding: 9px;
  background-color: var(--bg);
  border-radius: 35px;
  box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
    }
    .card-overlay {
  position: absolute;
  inset: 0;
  pointer-events: none;
  background: repeating-conic-gradient(var(--bg) 0.0000001%, var(--grey) 0.000104%) 60% 60%/600% 600%;
  filter: opacity(10%) contrast(105%);
}
.card-inner {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  overflow: hidden;
      padding: 31px 28px;
  background-color: var(--contrast);
  border-radius: 30px;
  /* Content style */
  font-size: 30px;
  font-weight: 900;
  color: #6e6e6e;
  text-align: center;
  font-family: monospace;
}

    .card-with-bg img{
        margin-bottom: 10px;
    }
     @media (max-width: 576px) {
   .text-start {
   text-align: left !important;
   }
   .card-with-bg{
        padding:14px 20px;
   }
   .card-inner { padding: 20px 12px;
   }}
   
   .h-400px{
       height: 286px;
   }
   
   
</style>
<style>
  .highlight {
    color: #963393;
  }
</style>


@endsection

@section('content')
    <section class="page-header" style="background-image: url(guest/images/events/events-d-1.jpg);">
        <div class="container">
            <ul class="list-unstyled breadcrumb-one">
                <li><a href="{{ route('homepage') }}">Home</a></li>
                <li><span>Events</span></li>
            </ul><!-- /.list-unstyled breadcrumb-one -->
            <h2 class="page-header__title">Events page</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->

    <section class="sec-pad-top sec-pad-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <label class="search-labels">Keywords</label>
                        <input type="text" class="form-control" id="keywords" name="keywords"
                            placeholder="Search By Keywords">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="form-group">
                        <label class="search-labels">City</label>
                        <input type="text" class="form-control" id="location" name="location"
                            placeholder="Search By City">
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <label for="daterange" class="search-labels">Select Date Range</label>
                    <input type="text" id="reportrange" name="reportrange" class="form-control"
                        placeholder="Pick a date range">
                </div>
            </div>
            <br>
            <br>


            @if ($event->isNotEmpty())
                <div id="products">
                    @include('guest.event.partial_list')
                </div>

                <div id="pagination">
                    @include('guest.event.pagination')
                </div>
            @else
                @include('guest.event.no_data')
            @endif
            <div class="row gutter-y-30">
            </div>

        </div><!-- /.container -->
    </section><!-- /.sec-pad-top sec-pad-bottom -->
    
    <section class="sec-pad-top sec-pad-bottom sponsor-carousel">
    <div class="container-fluid">
        <div class="sec-title text-center">
            <p class="sec-title__tagline">Explore an Insight to our Events</p>
            <h2 class="sec-title__title">Punjab Angels Network Past Events</h2>
        </div>
        <div class="my-slider h-100"> 
            <div class="item h-100">
                <iframe class="w-100 h-400px"  src="https://www.youtube.com/embed/6OVThmxanRE?si=CTvpk76xJcNo09W0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
               <div class="item h-100">
               <iframe class="w-100 h-400px"   src="https://www.youtube.com/embed/morsqAU8SFE?si=VkYoM4HkhABqPkJD" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="item h-100">
               <iframe class="w-100 h-400px"  src="https://www.youtube.com/embed/ep49Bhpr2QE?si=shmLgxSsVQDX0RW-" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="item h-100"> 
               <iframe class="w-100 h-400px"  src="https://www.youtube.com/embed/d6ETiXWO34I?si=uOjsUx9idU6p_vUV" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="item h-100">
               <iframe class="w-100 h-400px"  src="https://www.youtube.com/embed/pptWxwdKkj0?si=QHAsNjhiKNWSZjUu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="item h-100">
                <iframe class="w-100 h-400px"  src="https://www.youtube.com/embed/HQOvBTKGi0I?si=JnAgmYP9I6lNF3kz" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="item h-100">
                <iframe class="w-100 h-400px"  src="https://www.youtube.com/embed/A5U52XsfCt8?si=iQC4inB4V4lAZmrR" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="item h-100">
               <iframe  class="w-100 h-400px" src="https://www.youtube.com/embed/PuNwPHDbFNs?si=GtrvlazchF6urrgt" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="item h-100">
               <iframe class="w-100 h-400px"  src="https://www.youtube.com/embed/ICO_njsRcq8?si=_HolLFLcSwciBpvI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
             <div class="item h-100">
               <iframe  class="w-100 h-400px" src="https://www.youtube.com/embed/Ps-cZhIaTnA?si=9DU3ZBwm1x4uPmT0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="item h-100">
               <iframe class="w-100 h-400px"  src="https://www.youtube.com/embed/rnzPsfeLhFA?si=uPgIzQRv1gciwyxY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
             
         
            
        </div>
    </div>
</section>
@endsection

@section('page_level_script')
    <script type="text/javascript" src="https://momentjs.com/downloads/moment.min.js"></script>
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.js"></script>



    <script type="text/javascript">
        $(document).ready(function() {
            function fetchProducts(page = 1) {
                var keywords = $('#keywords').val();
                var location = $('#location').val();
                var dateRange = $('#reportrange').val();
                var startDate = dateRange ? dateRange.split(' - ')[0] : '';
                var endDate = dateRange ? dateRange.split(' - ')[1] : '';
                console.log(startDate)
                console.log(endDate)

                $.ajax({
                    url: '{{ route('events.list') }}',
                    method: 'GET',
                    data: {
                        keywords: keywords,
                        location: location,
                        start_date: startDate,
                        end_date: endDate,
                        page: page
                    },
                    success: function(response) {
                        $('#products').html(response.event);
                        $('#pagination').html(response.pagination);
                        console.log(response.event)
                        // if (response.event && response.event.length > 0) {

                        // } else {
                        //     console.log(response.event)
                        // // If response.event is empty, show a message or handle the empty state
                        // console.log('No events found.');
                        // }


                    }
                });
            }

            // Fetch products on filter change
            $('#keywords, #location').on('keyup', function() {
                // console.log('dsadasds');
                fetchProducts();
            });

            // Fetch products on date range picker change
            // Initialize the date range picker
            $('#reportrange').daterangepicker({
                autoUpdateInput: false,
                locale: {
                    cancelLabel: 'Clear'
                }

            });

            // Set the input field with the selected date range
            $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
                $(this).val(picker.startDate.format('YYYY-MM-DD') + ' - ' + picker.endDate.format(
                    'YYYY-MM-DD'));
                fetchProducts();
            });

            // Clear the input field if the user cancels the selection
            $('#reportrange').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
                fetchProducts();

            });

            // Fetch products on pagination link click
            $(document).on('click', '.pagination a', function(e) {
                e.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                fetchProducts(page);
            });
        });
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        tns({
            container: ".my-slider",
            loop: true,
            autoplay: true,
            mouseDrag: true,
            touch: true,
            nav: false,
            autoplayButtonOutput: false,
            controls: false,
            gutter: 20,
            responsive: {
                0: { items: 1, gutter: 10 },
                576: { items: 1, gutter: 10 },
                768: { items: 1, gutter: 15 },
                992: { items: 2, gutter: 20 },
                1200: { items: 2, gutter: 25 }
            }
        });
    });
</script>
@endsection
