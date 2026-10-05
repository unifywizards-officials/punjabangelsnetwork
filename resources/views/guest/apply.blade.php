@extends('layouts.guest.master')

@section('page_level_style')



<style>
    p.banner-para {
        line-height: 19px;
        margin-top: 20px;
    }
</style>

<style>
    .loader {
        display: none; /* Hide the loader by default */
        position: fixed;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        border: 16px solid #f3f3f3;
        border-radius: 50%;
        border-top: 16px solid #3498db;
        width: 120px;
        height: 120px;
        animation: spin 2s linear infinite;
        z-index: 99999999;

    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }
</style>


<link rel="stylesheet" href="{{asset('guest/css/filepond.css')}}">
<link rel="stylesheet" id="cpswitch" href="{{asset('guest/css/apply.css')}}">
<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet">

@endsection

@section('content')




<section class="sec-pad-top sec-pad-bottom about-five">
    <div class="container">
        <div class="row gutter-y-60">
            <div class="col-md-12 col-lg-6">
                <div class="about-five__content">
                    <div class="sec-title text-start">
                        <p class="sec-title__tagline">Explore Your Business Potential </p><!-- /.sec-title__tagline -->
                        <h2 class="sec-title__title">Dedicated To Taking Your Business Towards Improved Heights! </h2>
                    </div><!-- /.sec-title -->
                    <div class="about-five__text">Our platform offers a unique opportunity to connect with industry experts, secure funding, and gain valuable mentorship. If you have a groundbreaking idea or a scalable business model, now is the time to take the leap and join our thriving ecosystem. </div>
                    <blockquote class="about-five__blockquote">
                        <i class="paroti-icon-quote"></i>
                        Apply now and embark on an exciting journey of growth and success with Punjab Angels Network!
                    </blockquote>
                    <div class="about-five__person">
                        <div class="about-five__person__image">
                            <img src="assets/images/resources/about-5-p-1.png" alt="">
                        </div><!-- /.about-five__person__image -->
                        <!-- /.about-five__person__content -->
                    </div><!-- /.about-five__person -->
                    <div class="about-five__content__arrow float-bob-x"></div>
                    <!-- /.about-five__content__arrow -->
                </div><!-- /.about-five__content -->
            </div><!-- /.col-md-12 col-lg-6 -->
            <div class="col-md-12 col-lg-6">
                <div class="row gutter-y-30">
                    <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                        <div class="about-five__item" style="--accent-color: var(--paroti-base);">
                            <div class="about-five__item__icon">
                               <img src="{{asset('guest/images/icons/networking.png')}}" alt="">
                            </div><!-- /.about-five__item__icon -->

                            <!-- /.about-five__item__title -->
                            <p class="about-five__item__tagline">Gain access to a network of investors</p>
                            <!-- /.about-five__item__tagline -->
                        </div><!-- /.about-five__item -->
                    </div><!-- /.col-sm-12 col-md-6 -->
                    <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="about-five__item" style="--accent-color: var(--paroti-secondary);">
                            <div class="about-five__item__icon">
                            <img src="{{asset('guest/images/icons/guidance.png')}}" alt="">
                            </div><!-- /.about-five__item__icon -->

                            <!-- /.about-five__item__title -->
                            <p class="about-five__item__tagline">Benefit from guidance and insights </p>
                            <!-- /.about-five__item__tagline -->
                        </div><!-- /.about-five__item -->
                    </div><!-- /.col-sm-12 col-md-6 -->
                    <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="about-five__item" style="--accent-color: var(--paroti-primary);">
                            <div class="about-five__item__icon">
                            <img src="{{asset('guest/images/icons/technical-support.png')}}" alt="">
                            </div><!-- /.about-five__item__icon -->

                            <!-- /.about-five__item__title -->
                            <p class="about-five__item__tagline">Get assistance in areas like financial advisory </p>
                            <!-- /.about-five__item__tagline -->
                        </div><!-- /.about-five__item -->
                    </div><!-- /.col-sm-12 col-md-6 -->
                    <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="about-five__item" style="--accent-color: #8139e7;">
                            <div class="about-five__item__icon">
                            <img src="{{asset('guest/images/icons/conference.png')}}" alt="">
                            </div><!-- /.about-five__item__icon -->

                            <!-- /.about-five__item__title -->
                            <p class="about-five__item__tagline">Participate in exclusive events and workshops </p>
                            <!-- /.about-five__item__tagline -->
                        </div><!-- /.about-five__item -->
                    </div><!-- /.col-sm-12 col-md-6 -->
                </div><!-- /.row -->
            </div><!-- /.col-md-12 col-lg-6 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.sec-pad-top -->


<nav id="menu">

</nav>
<!-- Menu End -->

<!-- Header End -->

<!-- Sub Header -->
<div class="container">
<div class="sub-header" style="padding-left: 20px;">
   
        <h1>Fill the Form to Transform Your Business</h1>
    </div>
</div>
<!-- Sub Header End -->

<!-- Main -->
<main>


    <div class="contact">
        <div class="container">
        <!-- Loader Element -->
        <div class="loader" id="loader"></div>
            <!-- Form -->
            <form  id="contactForm" name="contactForm" enctype="multipart/form-data">
                <input type="hidden" id="image_id" name="image_id">
                <div class="row">
                    <div class="col-lg-8" id="mainContent">
                        <!-- Personal Details -->
                        <div class="row box first">
                            <div class="box-header">
                                <h3><strong>1</strong>Personal Details</h3>
                                <p>Please enter your details and designation in your company.</p>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input id="full_name" class="form-control" name="full_name" placeholder="Enter Full Name" type="text" />
                                    <div id="full_name" class="invalid-feedback"></div>
                                </div>
                               
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input id="email" class="form-control" name="email" placeholder="Enter VALID EMAIL and check the result" type="email"  />
                                    <div id="email" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input id="phone_no" class="form-control" name="phone_no" placeholder="Enter Phone e.g.: +363012345" type="text"/>
                                    <div id="phone_no" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input id="designation" class="form-control" name="designation" placeholder="Enter your Designation" type="text"/>
                                    <div id="designation" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="hidden" id="subject" name="subject" value="General Information" />
                                    <select id="subjectList" class="wide" name="subjectList">
                                        <option value="0">General Information</option>
                                        <option value="1">Subject Topic 1</option>
                                        <option value="2">Subject Topic 2</option>
                                        <option value="3">Subject Topic 3</option>
                                    </select>
                                </div>
                            </div> -->
                        </div>
                        <!-- Personal Details End -->
                        <!-- Message -->
                        <div class="row box">
                            <div class="box-header">
                                <h3><strong>2</strong>Company Details</h3>
                                <p>Please enter your company details here</p>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input id="company_url" class="form-control" name="company_url" placeholder="Enter url of company website" type="text"  />
                                    <div id="company_url" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input id="company_location" class="form-control" name="company_location" placeholder="Enter your company location" type="text" />
                                    <div id="company_location" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input id="industry_type" class="form-control" name="industry_type" placeholder="Please enter Industry Type" type="text" />
                                    <div id="industry_type" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                <input id="company_name" class="form-control" name="company_name" placeholder="Enter your Company Name" type="text"/>
                                    <div id="company_name" class="invalid-feedback"></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="hidden" id="subject" name="subject" value="General Information" />
                                    <select id="industry_category" class="wide" name="industry_category">
                                        <option value="Proprietorship">Proprietorship</option>
                                        <option value="Partnership">Partnership</option>
                                        <option value="OPC One Partner Company">OPC One Partner Company</option>
                                        <option value="LLP">LLP</option>
                                        <option value="Private Limited">Private Limited</option>
                                        <option value="Public Limited">Public Limited</option>
                                    </select>
                                    <div id="industry_category" class="invalid-feedback"></div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6">
                                <div class="form-group justify-content-center d-flex">
                                    <h6 class="text-center " style="padding: 10px 0px;">Incorprated Since :</h6>
                                </div>
                            </div>
                            <div class=" col-lg-3 col-md-6">
                                <div class="form-group">
                                    <input id="incorprated_since" class="form-control" name="incorprated_since" type="date" />
                                    <div id="incorprated_since" class="invalid-feedback"></div>
                                </div>
                            </div>






                        </div>
                        <!-- Message End -->
                        <!-- File Uploader -->
                        <div class="row box">
                            <div class="box-header">
                                <h3><strong>3</strong>Attach Your Pitch Deck</h3>
                                <p>Only jpg, png, pdf, max. 10Mb.</p>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="file" name="filepond" id="filepond" class="filepond" />
                                    <div id="attachment" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>



                        <div class="row box">
                            <div class="box-header">
                                <h3><strong>4</strong>Description</h3>
                                <p>Enter the details you want to convey here</p>
                            </div>
                            <div class="col-md-12">
										<div class="form-group">
											<textarea id="description" class="form-control" row="10" name="description" placeholder="Enter Message"></textarea>
                                                <div id="description" class="invalid-feedback"></div>
										</div>
									</div>
                        </div>
                        <!-- File Uploader End -->
                        <!-- Terms -->
                        <div class="row box">
                            <div class="box-header">
                                <h3><strong>5</strong>Submission</h3>
                                <p>Please accept the terms and conditions below.</p>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="checkbox" id="cbx" name="cbx" class="inp-cbx" name="term_condition" value="yes" />
                                    <label class="cbx terms" for="cbx">
                                        <span>
                                            <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                            </svg>
                                        </span>
                                        <span>Accept<a href="pdf/terms.pdf" class="terms-link" target="_blank">Terms and Conditions</a>.</span>
                                    </label>
                                    <div id="description" class="invalid-feedback"></div>
                                </div>
                            </div>
                        </div>
                        <!-- Terms End -->
                        <!-- Submit-->
                        <div class="row box">
                            <div class="col-12">
                                <div class="form-group">
                                    <button type="submit" name="submit"  id="saveForm" class="btn-form-func">
                                        <span class="btn-form-func-content">Submit</span>
                                        <span class="icon"><i class="fa fa-paper-plane" aria-hidden="true"></i></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Submit -->
                    </div>
                    <div class="col-lg-4" id="sidebar">
                        <!-- Contact Info Container -->
                        <div id="contactInfoContainer" class="theiaStickySidebar">
                            <div class="contact-box">
                                <i class="icon icon-map-marker"></i>
                                <h2>Address</h2>
                                <a href="https://maps.app.goo.gl/hCoSZ9B8FaP46gZ89" target="_blank">
                                Plot No. C 201-202 (c), Platina Tower, Phase 8 B, Sector 74, Industrial Area, Mohali,
                                Punjab – 160071 INDIA</a>
                            </div>
                            <div class="contact-box">
                                <i class="icon icon-envelope"></i>
                                <h2>Email</h2>
                                <a href="mailto:info@punjabangelsnetwork.com">info@punjabangelsnetwork.com</a>
                            </div>
                            <div class="contact-box">
                                <i class="icon icon-phone-call2"></i>
                                <h2>Telephone</h2>
                                <a href="tel:+9198728 08007">+91 98786 00316

                                </a>
                                <a href="tel:+9198728 08007">+91 98728 08007</a>
                            </div>
                        </div>
                        <!-- Contact Info Container End -->
                    </div>
                </div>
            </form>
            <!-- Form End -->
        </div>
    </div>

</main>





@endsection

@section('page_level_script')
<script src="{{asset('guest/js/jquery.min.js')}}"></script>

<script src="{{asset('guest/js/mmenu.min.js')}}"></script>
<script src="{{asset('guest/js/jquery.nice-select.min.js')}}"></script>
<script src="{{asset('guest/js/filepond-plugin-file-validate-size.js')}}"></script>
<script src="{{asset('guest/js/filepond-plugin-file-validate-type.js')}}"></script>
<script src="{{asset('guest/js/filepond.min.js')}}"></script>
<script src="{{asset('guest/js/theia-sticky-sidebar.min.js')}}"></script>
<script src="{{asset('guest/js/scripts.js')}}"></script>
<script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>

<script>

$.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

$(document).ready(function() {
         // Register FilePond plugins
         FilePond.registerPlugin(FilePondPluginImagePreview);

// Create FilePond instance
const pond = FilePond.create(document.querySelector('.filepond'), {
    acceptedFileTypes: ['image/jpeg', 'image/png', 'application/pdf'],
    maxFileSize: '10MB',
    server: {
        process: {
            url: '{{ route("filepond.upload") }}',
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            onload: function(response) {
                const data = JSON.parse(response);
                $('#image_id').val(data.id); // set the serverId as value of the file input
            },
            onerror: function(response) {
                console.log(response);
            }
        },
        revert: {
            url: '{{ route("filepond.revert") }}',
            method: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        }
    }
});

 $('#contactForm').on('submit', function(event) {
    event.preventDefault(); // Prevent default form submission
    // const formData = new FormData();

    var isChecked = $('#cbx').is(':checked');
        var checkboxValue = isChecked ? 'Yes' : 'No';

    var formData = new FormData(this);
    formData.append('checkboxValue', checkboxValue);
    // console.log(formData)
    if (pond.getFiles().length === 0) {
        // $('#attachment').text('Attachment is required').show();
        // return;
    } else {
       
        formData.append('attachment', pond.getFile().file);
        var imageId = $('#image_id').val();
        formData.append('image_id', imageId);
        // $('#attachment').text('Attachment is required').hide();
    }
    $('#loader').show(); // Show the loader
    $.ajax({
        url: '{{ route("forms.store") }}',
        method: 'POST',
        data: formData,
        processData: false,
        contentType: false,
        headers: {
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        success: function(response) {
            // console.log('Form saved successfully');
            $('#loader').hide();
          
            Swal.fire({
                        title: 'Thanks!',
                        text: 'Thanks, We will get back to you soon!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });

                    setTimeout(function() {
                        location.reload(true);
                    }, 3000)
        },
        error: function(xhr) {
            $('#loader').hide(); // Hide the loader on error
            if (xhr.status === 422) {
                $('.invalid-feedback').text('');
                $('.is-invalid').removeClass('is-invalid');
                const errors = xhr.responseJSON.errors;
                handleErrors(errors);
                if (pond.getFiles().length === 0) {
                $('#attachment').text('Attachment is required').show();
                return;
                } else {
                formData.append('attachment', pond.getFile().file);
                var imageId = $('#image_id').val();
                formData.append('image_id', imageId);
                $('#attachment').text('Attachment is required').hide();
                }
            } else {
                console.log('Failed to save form');
            }
        }
    });
});

function handleErrors(errors) {
    console.log(errors)
    Object.keys(errors).forEach(function(key) {
        $('#' + key).siblings('.invalid-feedback').text(errors[key][0])
        $(`#${key}`).addClass('is-invalid');
    });
}
    });
</script>

@endsection