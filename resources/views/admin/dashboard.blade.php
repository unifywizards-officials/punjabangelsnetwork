@extends('layouts.admin.master')

@section('title','Admin-Dashboard')

@section('page_level_style')

@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <!-- <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol> -->
            </div>
        </div>
    </div>
</div>

<section class="content">

@if(Auth::user()->role=='admin')
<?php $route_blog='admin.manage-blog.index';?>
<?php $route_event='admin.manage-event.index';?>
@elseif(Auth::user()->role=='event-manager')
<?php $route_blog='event-manager.manage-blog.index';?>
<?php $route_event='event-manager.manage-event.index';?>
@elseif(Auth::user()->role=='seo-manager')
<?php $route_blog='seo-manager.manage-blog.index';?>
<?php $route_event='seo-manager.manage-event.index';?>
@else
@endif


@if(Auth::user()->role == 'admin' || Auth::user()->role == 'event-manager' || Auth::user()->role == 'seo-manager')
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-3 col-6">

                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$total_blog}}</h3>
                        <p>Total Blogs</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-blog"></i>
                    </div>
                    <a href="{{ route($route_blog) }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">

                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$total_event}}</h3>
                        <p>Total Events</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-calendar-days"></i>
                    </div>
                    <a href="{{ route($route_event) }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            
        </div>

    </div>
    @elseif(Auth::user()->role == 'user')
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-3 col-6">

                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{$active_quote}}</h3>
                        <p>Total Quote</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-blog"></i>
                    </div>
                    <a href="{{ route('user.quotedata.list') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3>{{$active_contact}}</h3>
                        <p>Total Contact</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-blog"></i>
                    </div>
                    <a href="{{ route('user.contactdata.list') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

    </div>
    @else   
    @endif
</section>
@endsection

@section('page_level_script')
@endsection