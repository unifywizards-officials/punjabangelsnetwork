@extends('layouts.guest.master')

@php $seo=StaticPageSeo();@endphp
    @php $meta_title=$seo->visa_meta;@endphp
    @php $meta_desc=$seo->visa_description;@endphp
    @php $meta_key=$seo->visa_keyword;@endphp
@section('title', $meta_title)
@section('description',$meta_desc)
@section('keywords',$meta_key)

@section('page_level_style')

@endsection

@section('content')

<!-- Breadcrumb -->
<section class="breadcrumb-outer text-center" style="background-image: url('{{asset('images/visa_insurance.png')}}');">
    <div class="container">
        <div class="breadcrumb-content">
            <h2 class="white banner-left">Visa & Insurance</h2>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">

                </ul>
            </nav>
        </div>
    </div>
    <div class="overlay"></div>
</section>
<!-- BreadCrumb Ends -->

<!-- tour list starts -->
<section class="list">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="trend-box">
                    <div class="row">
                        {!! $visa_insurance->visa_details !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- tour list ends -->
@endsection

@section('page_level_script')
@endsection