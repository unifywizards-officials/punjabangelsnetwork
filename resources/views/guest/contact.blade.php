@extends('layouts.guest.master')

@section('page_level_style')
@endsection

@section('content')
    <section class="page-header" style="background-image: url(guest/images/backgrounds/contact-bg.png);">
        <div class="container">
            <ul class="list-unstyled breadcrumb-one">
                <li><a href="index.php">Home</a></li>
                <li><span>Contact</span></li>
            </ul><!-- /.list-unstyled breadcrumb-one -->
            <h2 class="page-header__title">Contact us</h2>
        </div><!-- /.container -->
    </section><!-- /.page-header -->
    <section class="contact-info">
        <div class="container">
            <div class="contact-info__inner wow fadeInUp" data-wow-duration="1500ms"
                style="background-image: url(guest/images/backgrounds/contact-info-bg-1-1.jpg);">
                <div class="row gutter-y-30">
                    <div class="col-lg-4 col-md-12">
                        <div class="contact-info__item">
                            <div class="contact-info__icon">
                                <i class="fas fa-envelope-open"></i>
                            </div><!-- /.contact-info__icon -->
                            <p class="contact-info__text">
                                <a href="mailto:info@punjabangelsnetwork.com">info@punjabangelsnetwork.com</a><br>
                                <!-- <a href="mailto:info@company.com">info@company.com</a> -->
                            </p><!-- /.contact-info__text -->
                        </div><!-- /.contact-info__item -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 col-md-12">
                        <div class="contact-info__item">
                            <div class="contact-info__icon">
                                <i class="fa fa-map"></i>
                            </div><!-- /.contact-info__icon -->
                            <a href="https://maps.app.goo.gl/ZiWSu1rZg8gnzart8">
                                <p class="contact-info__text">Plot No. C 201-202 (c),
                                    Platina Tower, Phase 8 B,
                                    Sector 74,
                                    Industrial Area, Mohali,<br>
                                    Punjab – 160071 INDIA</p>
                            </a><!-- /.contact-info__text -->
                        </div><!-- /.contact-info__item -->
                    </div><!-- /.col-lg-4 -->
                    <div class="col-lg-4 col-md-12">
                        <div class="contact-info__item">
                            <div class="contact-info__icon">
                                <i class="fa fa-mobile"></i>
                            </div><!-- /.contact-info__icon -->
                            <p class="contact-info__text">
                                <a href="tel:+91 98786 00316">+91 98786 00316</a><br>
                                <a href="tel:+91 98728 08007">+91 98728 08007</a>
                            </p><!-- /.contact-info__text -->
                        </div><!-- /.contact-info__item -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.contact-info__inner -->
        </div><!-- /.container -->
    </section>
    <section class="sec-pad-top sec-pad-bottom contact-one">
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-lg-4">
                    <div class="sec-title">
                        <p class="sec-title__tagline">Contact with us</p><!-- /.sec-title__tagline -->
                        <h2 class="sec-title__title">Love to hear
                            from you</h2>
                    </div><!-- /.sec-title -->
                    <p class="contact-one__text">Punjab Angels Network will turnaround the MSME Company by providing group
                        non-conflicting consulting for a duration of 6 – 12 months.</p>
                    <div class="contact-one__social">
                        <a href="https://x.com/PunjabAngelsNW" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/punjabangelsnetwork/" target="_blank"><i
                                class="fab fa-facebook"></i></a>
                        <a href="https://www.linkedin.com/company/punjabangelsnetwork/" target="_blank"><i
                                class="fab fa-linkedin"></i></a>
                        <a href="https://www.instagram.com/punjabangelsnetwork/" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                    </div><!-- /.contact-one__social -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-8">
                    <form name="contactForm" class="contact-one__form" id="msform" enctype="multipart/form-data">
                        <input type="hidden" id="type" name="type" value="contact-us">
                    <div class="row">
    <div class="col-md-12">
        <input 
            type="text" 
            id="fullname" 
            placeholder="Your full name" 
            name="name"
            required
            pattern="^[A-Za-z]{3,}\s+[A-Za-z]{3,}(\s+[A-Za-z]{3,})*$"
            title="Enter your full name. Only letters and spaces allowed."
        >
        <div class="invalid-feedback" id="fullname-error"></div>
    </div>

 <div class="col-md-6">
    <input 
        type="email"
        id="email" 
        placeholder="Email address" 
        name="email"
        required
    >
    <div class="invalid-feedback" id="email-error"></div>
</div>

<div class="col-md-6">
    <input 
        type="phone"
        id="phone" 
        placeholder="Phone number"
        name="phone"
        required
        pattern="^\+?[0-9]{10,15}$"
        title="Enter a valid phone number (10–15 digits, optional leading +)."
    >
    <div class="invalid-feedback" id="phone-error"></div>
</div>

    <div class="col-md-12">
        <textarea 
            name="message" 
            id="message" 
            placeholder="Write a message"
            required
        ></textarea>
        <div class="invalid-feedback" id="message-error"></div>
    </div>

    <div class="col-md-12">
        <button type="submit" id="submitquote" class="thm-btn contact-one__btn">
            <span>Send message</span>
        </button>
    </div>
</div>

                    </form>
                    <div class="result"></div><!-- /.result -->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
    <section class="google-map">

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d109774.15233170998!2d76.685973!3d30.705965!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fee56505158fd%3A0x55c1fa7366d1e969!2sPunjab%20Angels%20Network!5e0!3m2!1sen!2sus!4v1703580748163!5m2!1sen!2sus"
            class="google-map__two" allowfullscreen></iframe>
    </section><!-- /.google-map -->
@endsection

@section('page_level_script')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {
            $('#msform').on('submit', function(event) {
                event.preventDefault(); // Prevent default form submission
                var formData = new FormData(this); // Create FormData object from form
                $.ajax({
                    url: '{{ route('submit-contact') }}', // Specify your Laravel route for form submission
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // Handle success response
                        $('#msform')[0].reset();
                        $('.invalid-feedback').text('');
                        $('#msform .is-invalid').removeClass('is-invalid');
                        // alert('Form submitted successfully!');
                        Swal.fire({
                            title: 'Thanks!',
                            text: 'Thanks, We will get back to you soon!',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        });
                    },
                    error: function(xhr, status, error) {
                        // Handle error response
                        var errors = xhr.responseJSON.errors;
                        $('.invalid-feedback').text('');
                        $('#msform .is-invalid').removeClass('is-invalid');
                        $.each(errors, function(key, value) {
                            $('#' + key).addClass('is-invalid');
                            $('#' + key).siblings('.invalid-feedback').text(value[0])
                        });
                    }
                });
            });
        });
    </script>
@endsection
