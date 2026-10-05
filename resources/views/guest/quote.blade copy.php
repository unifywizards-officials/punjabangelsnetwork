@extends('layouts.guest.guest')
    @php $seo=StaticPageSeo();@endphp
    @php $meta_title=$seo->get_quote_meta;@endphp
    @php $meta_desc=$seo->get_quote_description;@endphp
    @php $meta_key=$seo->get_quote_keyword;@endphp
@section('title', $meta_title)
@section('description',$meta_desc)
@section('keywords',$meta_key)

@section('page_level_style')
<style>
@import url(https://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {
    margin: 0;
    padding: 0;
}

html {
    height: 100%;
    background: #6441A5; /* fallback for old browsers */
    background: -webkit-linear-gradient(to left, #6441A5, #2a0845); /* Chrome 10-25, Safari 5.1-6 */
}
section {
    padding: 95px 0 98px;

}


/*form styles*/
#msform {
    text-align: center;
    position: relative;
    margin-top: 30px;
    z-index: 999999;
}

#msform fieldset {
    background: rgb(255 255 255 / 66%);
    border: 0 none;
    border-radius: 25px;
    box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
    padding: 20px 30px;
    box-sizing: border-box;
    width: 65%;
    margin: 0 auto;
    position: relative;
}

/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
    display: none;
}

/*inputs*/
#msform input, #msform textarea {
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 10px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 13px;
    border-radius: 12px;
}

#msform input:focus, #msform textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #ee0979;
    outline-width: 0;
    transition: All 0.5s ease-in;
    -webkit-transition: All 0.5s ease-in;
    -moz-transition: All 0.5s ease-in;
    -o-transition: All 0.5s ease-in;
}

/*buttons*/
#msform .action-button {
    width: 100px;
    background: #190912;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 33px;
    margin: 10px 5px;
}

#msform .action-button:hover, #msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #ee0979;
}

#msform .action-button-previous {
    width: 100px;
    background: #C5C5F1;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#msform .action-button-previous:hover, #msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #C5C5F1;
}

/*headings*/
.fs-title {
    font-size: 28px;
    text-transform: uppercase;
    color: #2C3E50;
    margin-bottom: 10px;
    letter-spacing: 2px;
    font-weight: bold;
}

.fs-subtitle {
    font-weight: normal;
    font-size: 16px;
    color: #666;
    margin-bottom: 20px;
}
.btn-success {

    padding: 10px 30px;
 
}

.get-quotes:after {
    content: "";
    background: rgb(255 255 255 / 47%);
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    position: absolute;
}

.get-quotes {
    position: relative;
}


.alert {

    text-align: justify;
    /* font-size: 14px; */

}

.alert-dismissable .close, .alert-dismissible .close {
    position: relative;
    top: 0px;
    right: 0px;
    color: inherit;
}
button.close{
    display: none;
}
@media (max-width : 726px){
    #msform fieldset {
  
    width: 90%;

}

}
</style>
@endsection

@section('content')
<!-- Breadcrumb -->
<section class="breadcrumb-outer text-center" style="background-image: url('{{asset('images/blog_banner.png')}}');">
    <div class="container">
        <div class="breadcrumb-content">
            <h2 class="white">Get A Quote</h2>

            </ul>
            </nav>
        </div>
    </div>
    <div class="overlay"></div>
</section>
<!-- BreadCrumb Ends -->

<!-- contact starts -->
<section class="contact-main get-quotes" style="background-image: url('{{asset('images/quote.jpg')}}'); background-size: cover;background-repeat: no-repeat;">
<div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form id="msform" method="POST" action="{{route('submit-quote')}}" enctype="multipart/form-data">
            @csrf
                <fieldset>
                    <h2 class="fs-title">Please Fill Out Your Details</h2>
                    <h3 class="fs-subtitle">Our team will get back to you shortly!</h3>
                    @include('layouts.admin.alertQuotemessage')
                    <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" required/>
                    <input type="number" name="contact" placeholder="Contact Number" value="{{ old('contact') }}" required/>
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required/>
                    <input type="number" name="no_of_person" placeholder="Enter No Of Person" value="{{ old('no_of_person') }}" required/>
                    <textarea  name="message" placeholder="Enter Your Message" required>{{ old('message') }}</textarea>
                    <button type="submit" class="btn btn-success btn-user float-right mb-3">Send</button>
                </fieldset>
            </form>
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

    <script>
        $(document).ready(function(){
    $('#myForm').on('submit', function(event){
        event.preventDefault(); // Prevent default form submission
        
        var formData = $(this).serialize(); // Serialize form data
        
        $.ajax({
            url: '{{ route("form.submit") }}', // Specify your Laravel route for form submission
            type: 'POST',
            data: formData,
            success: function(response){
                // Handle success response
                $('#errors').empty(); // Clear previous error messages
                alert('Form submitted successfully!');
            },
            error: function(xhr, status, error){
                // Handle error response
                var errors = xhr.responseJSON.errors;
                $('#errors').empty(); // Clear previous error messages
                $.each(errors, function(key, value) {
                    $('#errors').append('<p>' + value + '</p>'); // Display each validation error
                });
            }
        });
    });
});
    </script>
@endsection