@extends('layouts.guest.master')

@section('page_level_style')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <style>
        p.banner-para {
            line-height: 19px;
            margin-top: 20px;
        }
    </style>

    <style>
        .loader {
            display: none;
            /* Hide the loader by default */
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
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        span.ui-datepicker-year {
            display: none;
        }
    </style>

    <link rel="stylesheet" id="cpswitch" href="{{ asset('guest/css/apply.css') }}">
@endsection

@section('content')
    <nav id="menu">

    </nav>
    <!-- Menu End -->

    <!-- Header End -->

    <!-- Sub Header -->
    <div class="container">
        <div class="sub-header" style="padding-left: 20px;">

            <h1>Become An Investor</h1>
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
                <form id="metorshipForm" name="metorshipForm" enctype="multipart/form-data">

                    <div class="row">
                        <div class="col-lg-8" id="mainContent">
                            <!-- Personal Details -->
                            <div class="row box first">
                                <div class="box-header">
                                    <h3><strong>1</strong>Details</h3>
                                    <p>Please enter your details and designation in your company.</p>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="full_name" class="form-control" name="full_name"
                                            placeholder="Enter Full Name" type="text" />
                                        <div id="full_name" class="invalid-feedback"></div>
                                    </div>

                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="email" class="form-control" name="email"
                                            placeholder="Enter VALID EMAIL and check the result" type="email" />
                                        <div id="email" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="organization" class="form-control" name="organization"
                                            placeholder="Enter your Organisation" type="text" />
                                        <div id="organization" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="designation" class="form-control" name="designation"
                                            placeholder="Enter your Designation" type="text" />
                                        <div id="designation" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="domain" class="form-control" name="domain"
                                            placeholder="Enter your Domain" type="text" />
                                        <div id="domain" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="date_of_birth" class="form-control" name="date_of_birth"
                                            placeholder="Enter your Date of Birth" type="text" />
                                        <div id="date_of_birth" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <select id="gender" class="wide" name="gender">
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>

                                        </select>
                                        <div id="gender" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="mobile_no" class="form-control" name="mobile_no"
                                            placeholder="Enter your Phone Number" type="text" />
                                        <div id="mobile_no" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="linkden_id" class="form-control" name="linkden_id"
                                            placeholder="Enter your Linkedin ID" type="text" />
                                        <div id="linkden_id" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="web_address" class="form-control" name="web_address"
                                            placeholder="Enter your Web Address" type="text" />
                                        <div id="web_address" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="qualification" class="form-control" name="qualification"
                                            placeholder="Enter your Qualifications" type="text" />
                                        <div id="qualification" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="office_address" class="form-control" name="office_address"
                                            placeholder="Enter your Office Address" type="text" />
                                        <div id="office_address" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="residential_address" class="form-control" name="residential_address"
                                            placeholder="Enter your Residential Address" type="text" />
                                        <div id="residential_address" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="preferred_mailing_address" class="form-control"
                                            name="preferred_mailing_address"
                                            placeholder="Enter Your Mailing Address(Office or Residence)"
                                            type="text" />
                                        <div id="preferred_mailing_address" class="invalid-feedback"></div>
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
                                    <h3><strong>2</strong>INVESTMENT PREFERENCE </h3>
                                    <p>Please enter your investment preference here</p>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="minimun_investment_range" class="form-control"
                                            name="minimun_investment_range" placeholder="Minimum Investment Range"
                                            type="text" />
                                        <div id="minimun_investment_range" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="maximum_investment_range" class="form-control"
                                            name="maximum_investment_range" placeholder="Maximum Investment Range"
                                            type="text" />
                                        <div id="maximum_investment_range" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input id="preferred_investment_stage" class="form-control phone-heighet"
                                            name="preferred_investment_stage"
                                            placeholder="Preferred Investment Stage ( Incubation Stage , Pre Seed, Seed, Series A etc.) "
                                            type="text" />
                                        <div id="preferred_investment_stage" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input id="industry_preference" class="form-control phone-heighet"
                                            name="industry_preference"
                                            placeholder="Industry Preference (Tech , Healthcare, Finance , FMCG etc.)"
                                            type="text" />
                                        <div id="industry_preference" class="invalid-feedback"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input id="investment_strategy" class="form-control phone-heighet"
                                            name="investment_strategy"
                                            placeholder="Investment Strategy ( Hands -on , Silent Partner etc.)"
                                            type="text" />
                                        <div id="investment_strategy" class="invalid-feedback"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="hidden" id="geographical_preference"
                                            name="geographical_preference" />
                                        <select id="geographical_preference" class="wide"
                                            name="geographical_preference">
                                            <option value="Local">Local</option>
                                            <option value="National">National</option>
                                            <option value="International">International</option>
                                            <option value="No Preference">No Preference</option>
                                            <option value="Private Limited">Private Limited</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <div id="geographical_preference" class="invalid-feedback"></div>
                                    </div>
                                </div>






                            </div>
                            <!-- Message End -->
                            <!-- File Uploader -->
                            <div class="row box">
                                <div class="box-header">
                                    <h3><strong>3</strong>PROFESSIONAL BACKGROUND </h3>
                                    <p>Fill up your profssional background here </p>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="previous_investment_experience" class="form-control"
                                            name="previous_investment_experience"
                                            placeholder="Previous Investment Experience (If any )" type="text" />
                                        <div id="previous_investment_experience" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="investment_experience_with_startup" class="form-control"
                                            name="investment_experience_with_startup"
                                            placeholder="Investment Experience with Startups (If any)" type="text" />
                                        <div id="investment_experience_with_startup" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="relevant_skill" class="form-control" name="relevant_skill"
                                            placeholder="Relevant Skills or Expertise" type="text" />
                                        <div id="relevant_skill" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input type="hidden" id="risk_tolarance_level" name="risk_tolarance_level" />
                                        <select id="risk_tolarance_level" class="wide" name="risk_tolarance_level">
                                            <option value="Low">Low</option>
                                            <option value="Medium">Medium</option>
                                            <option value="High">High</option>

                                        </select>
                                        <div id="risk_tolarance_level" class="invalid-feedback"></div>
                                    </div>
                                </div>
                            </div>



                            <div class="row box">
                                <div class="box-header">
                                    <h3><strong>4</strong>OTHER INFORMATION</h3>
                                    <p>Enter the details you want to convey here</p>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="how_hear_aboutus" class="form-control" row="10" name="how_hear_aboutus"
                                            placeholder=" How did you Hear about us? "></textarea>
                                        <div id="how_hear_aboutus" class="invalid-feedback"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="why_interested_in_startup" class="form-control"
                                            name="why_interested_in_startup"
                                            placeholder=" Why are you interested in investing in startups?"
                                            type="text" />
                                        <div id="why_interested_in_startup" class="invalid-feedback"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input id="industry_interest_you" class="form-control"
                                            name="industry_interest_you"
                                            placeholder="Any specific startups or industries that interest you?"
                                            type="text" />
                                        <div id="industry_interest_you" class="invalid-feedback"></div>
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
                                        <input type="checkbox" id="cbx" name="cbx" class="inp-cbx"
                                            name="term_condition" />
                                        <label class="cbx terms" for="cbx">
                                            <span>
                                                <svg width="12px" height="10px" viewbox="0 0 12 10">
                                                    <polyline points="1.5 6 4.5 9 10.5 1"></polyline>
                                                </svg>
                                            </span>
                                            <span>Accept<a href="pdf/terms.pdf" class="terms-link" target="_blank">Terms
                                                    and Conditions</a>.</span>
                                        </label>
                                        {{-- <div id="description" class="invalid-feedback"></div> --}}
                                    </div>
                                </div>
                            </div>
                            <!-- Terms End -->
                            <!-- Submit-->
                            <div class="row box">
                                <div class="col-12">
                                    <div class="form-group">
                                        <button type="submit" name="submit" id="saveForm" class="btn-form-func">
                                            <span class="btn-form-func-content">Submit</span>
                                            <span class="icon"><i class="fa fa-paper-plane"
                                                    aria-hidden="true"></i></span>
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
                                        Plot No. C 201-202 (c), Platina Tower, Phase 8 B, Sector 74, Industrial Area,
                                        Mohali,
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
                                    <a href="tel:+9198728 08007">+91 98728 08007</a>
                                    <a href="tel:+9198728 08007">+91 98786 00316

                                    </a>
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
    <script src="{{ asset('guest/js/jquery.min.js') }}"></script>

    <script src="{{ asset('guest/js/mmenu.min.js') }}"></script>
    <script src="{{ asset('guest/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('guest/js/theia-sticky-sidebar.min.js') }}"></script>
    <script src="{{ asset('guest/js/scripts.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script>
        $(function() {
            $("#date_of_birth").datepicker({
                dateFormat: 'dd M', // Display date in 'day month' format
                showButtonPanel: false,
                changeMonth: true,
                changeYear: false,
                yearRange: "c:c", // Restrict year range to current year only
                onSelect: function(dateText, inst) {
                    // Optional: Handle date selection here
                },
                beforeShowDay: function(date) {
                    // Customize which days are selectable if needed
                    return [true, ''];
                }
            });
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {

            $('#metorshipForm').on('submit', function(event) {
                event.preventDefault(); // Prevent default form submission
                // const formData = new FormData();
                var isChecked = $('#cbx').is(':checked');
                var checkboxValue = isChecked ? 'Yes' : 'No';
                var formData = new FormData(this);
                formData.append('checkboxValue', checkboxValue);
                $('#loader').show(); // Show the loader
                $.ajax({
                    url: '{{ route('forms.investorenrollment') }}',
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

                        // Swal.fire({
                        //     title: 'Thanks!',
                        //     text: 'Thanks, We will get back to you soon!',
                        //     icon: 'success',
                        //     confirmButtonText: 'OK'
                        // });


                        Swal.fire({
                            text: 'Do you want to proceed with payment?',
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonText: 'Yes',
                            cancelButtonText: 'No',
                            reverseButtons: false // Optional: reverses the order of the buttons (No/Yes)
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Code to execute if "Yes" is clicked
                                Swal.fire({
                                    title: 'Thanks!',
                                    text: 'Thanks, Your Form Has Been Submitted!',
                                    icon: 'success',

                                });
                                setTimeout(function() {
                                    // location.reload(true);
                                    window.location.href =
                                        'https://pages.razorpay.com/pl_JIhS1vZVS5Ktdv/view';
                                }, 1000)
                            } else if (result.dismiss === Swal.DismissReason.cancel) {
                                Swal.fire({
                                    title: 'Thanks!',
                                    text: 'Thanks, Your Form Has Been Submitted!',
                                    icon: 'success',
                                });
                                setTimeout(function() {
                                    // location.reload(true);
                                    window.location.href =
                                        'https://pages.razorpay.com/pl_JIhS1vZVS5Ktdv/view';
                                }, 1000)
                            }
                        });
                    },
                    error: function(xhr) {
                        $('#loader').hide(); // Hide the loader on error
                        if (xhr.status === 422) {
                            $('.invalid-feedback').text('');
                            $('.is-invalid').removeClass('is-invalid');
                            const errors = xhr.responseJSON.errors;
                            handleErrors(errors);
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
