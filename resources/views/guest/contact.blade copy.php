@extends('layouts.guest.guest')

@php $seo=StaticPageSeo();@endphp
    @php $meta_title=$seo->contactus_meta;@endphp
    @php $meta_desc=$seo->contactus_description;@endphp
    @php $meta_key=$seo->contactus_keyword;@endphp
@section('title', $meta_title)
@section('description',$meta_desc)
@section('keywords',$meta_key)

@section('page_level_style')

@endsection

@section('content')
<!-- Breadcrumb -->
<section class="breadcrumb-outer text-center" style="background-image: url('{{asset('images/contactus.png')}}');">
    <div class="container">
        <div class="breadcrumb-content">
            <h2 class="white">Contact Us</h2>
            </ul>
            </nav>
        </div>
    </div>
    <div class="overlay"></div>
</section>
<!-- BreadCrumb Ends -->

<!-- contact starts -->
<section class="contact-main">
    <div class="container">
        <div class="contact-info mar-bottom-30">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fa fa-map-marker-alt"></i>
                        </div>
                        @php $setting=Settings();@endphp
                        <div class="info-content">
                            <p>E-196, Industrial Area, 8B, Mohali, Punjab</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="info-content phone">
                            <p>{{$setting->contact}} </p>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="info-item">
                        <div class="info-icon">
                            <i class="fa fa-envelope envolope-p"></i>
                        </div>
                        <div class="info-content">
                            <p>{{$setting->email}}</p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-map">
            <div class="row">
                <div class="col-md-6">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13721.302026933145!2d76.6887593!3d30.7092483!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390feeffec957451%3A0x80ecbd2b77dc29b8!2sUnify%20Holidays!5e0!3m2!1sen!2sin!4v1681827860253!5m2!1sen!2sin"
                        width="100%" height="549" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-6">
                    <div id="contact-form1" class="contact-form">
                        <h3>Keep in Touch</h3>
                        @include('layouts.admin.alertContactmessage')
                        <div id="contactform-error-msg"></div>

                        <form name="contactform" id="contactform" method="POST" action="{{route('submit-contact')}}" enctype="multipart/form-data">
                         @csrf
                         <input type="hidden" name="type" value="contact-us">   
                        <div class="form-group">
                                <input type="text" name="first_name" value="{{ old('first_name') }}" class="form-control" id="fname"
                                    placeholder="First Name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="last_name" value="{{ old('last_name') }}" class="form-control" id="lname"
                                    placeholder="Last Name" required>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="number" name="phone_no" value="{{ old('phone_no') }}" class="form-control" id="phnumber" placeholder="Phone" required>
                            </div>
                            <div class="textarea">
                                <textarea name="message" placeholder="Enter a message" required>{{ old('message') }}</textarea>
                            </div>
                            <div class="comment-btn text-right mar-top-15">
                                <button type="submit" class="biz-btn">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact Ends -->
<!-- footer starts -->
@endsection

@section('page_level_script')
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/plugin.js')}}"></script>
 
    <script src="{{asset('assets/js/menu.js')}}"></script>
  
    <script src="{{asset('assets/js/custom-nav.js')}}"></script>
  
@endsection