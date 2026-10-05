@extends('layouts.guest.master')


@section('page_level_style')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.css" />
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
					<div class="col-4">
						<div class="form-group">
							<label>Keywords</label>
							<input type="text" class="form-control" name="keywords" placeholder="Enter Keywords">
						</div>
					</div>
					<div class="col-4">	
						<div class="form-group">
							<label>Location</label>
							<input type="text" class="form-control" name="keywords" placeholder="Enter Location">
						</div>
					</div>
					<div class="col-4">
						<label>Date Range</label>
						<div id="reportrange" class="form-control">
							
							<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
							<span></span> <b class="caret"></b>
						</div>
					</div>	
				</div>
				<br>
				<div class="row gutter-y-30">
                 @foreach($blog as $event)
					<div class="col-md-12 col-lg-4">
						<div class="events-card">
							<div class="events-card__image">
								<img src="{{asset($event->image)}}" alt="{{$event->image_alt}}">
								<img src="{{asset($event->image)}}" class="events-card__image--hover" alt="{{$event->image_alt}}">
							</div><!-- /.events-card__image -->
							<div class="events-card__content">
                                 <?php $date = \Carbon\Carbon::parse($event->publish_date); ?>
								<div class="events-card__date">{{$date->format('d')}} {{$date->format('F')}}</div><!-- /.events-card__date -->
								<ul class="events-card__meta list-unstyled">
									<li>
										<i class="fa fa-clock"></i>
										<a href="#">{{ \Carbon\Carbon::createFromFormat('H:i', $event->start_time)->format('h:i A') }}</a>
									</li>
									<li>
										<i class="fa fa-map-marker-alt"></i>
										<a href="#">{{$event->city}}</a>
									</li>
								</ul><!-- /.blog-card__meta -->
								<h3 class="events-card__title"><a href="{{ route('event.detail', [$event->slug]) }}">{{$event->heading}}</a></h3><!-- /.events-card__title -->
							</div><!-- /.events-card__content -->
						</div><!-- /.events-card -->
					</div><!-- /.col-md-12 col-lg-4 -->
				  @endforeach	
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section><!-- /.sec-pad-top sec-pad-bottom -->
@endsection

@section('page_level_script')
<script type="text/javascript" src="https://momentjs.com/downloads/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.js"></script>

<script type="text/javascript">
$(function() {

    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }

    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);

    cb(start, end);
    
});
</script>

<script>
$(document).ready(function() {
    $(document).ready(function() {
        // $('#example2').DataTable();
    });
});
</script>
@endsection