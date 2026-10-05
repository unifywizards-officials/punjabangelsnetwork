@extends('layouts.guest.master')

@section('page_level_style')
    <style>
        select#looking_for {
            padding: 11px 14px;
            margin-top: 4px;
        }

        section.investor-form {
            background: url(https://images.pexels.com/photos/167699/pexels-photo-167699.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) center no-repeat;
            background-position: center;
            background-size: cover;
            background-attachment: fixed;
        }



        .mainContainer {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .flex-container {
            border-radius: 20px;
            overflow: hidden;
        }

        .getstarted-col {
            background-image: url({{ asset('guest/images/resources/investor-bg.jpg') }});
            background-position: center;
            background-size: cover;
            border-radius: 20px;
        }

        .getstarted-col .content:after {
            background: rgb(12, 37, 68);
            background: linear-gradient(90deg, rgba(12, 37, 68, 1) 0%, rgba(23, 53, 95, 1) 35%, rgba(26, 72, 111, 1) 100%);
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            opacity: 0.95;
            content: '';
            z-index: 0;
            border-radius: 15px;
        }

        .content-icon img {
            max-width: 200px;
        }

        .child-w-100>* {
            width: 100%;
            z-index: 1;
        }



        /* BUTTONS */
        .btn.btn-semitransparent {
            background: #ffffff40;
            color: #fff;
        }

        .signup-options-list button {
            width: 100%;
            transition: 0.2s background-color ease-in-out;
        }

        .signup-options-list button:hover {
            background-color: #fffbe7;
        }

        /* colors */
        .text-secondary2 {
            color: #cdcdcd;
        }

        .icon-fb {
            color: #3B5997;
        }

        .icon-google {
            color: #F44242;
        }


        /* INPUTS */
        .default-input {
            width: 100%;
            border: 1px solid #cccccc70;
            background: #EBF3F5;
            padding-right: 30px;
        }

        [error-notif] input {
            background: #ffe9e9;
            border: 1px solid #dc3545;
        }

        [success-notif] input {
            background: #d9f7db;
            border: 1px solid #198754;
        }

        .icon-feedback {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translate(0, -50%) scale(1.15);
        }

        .error-feedback {
            display: none;
        }

        [error-notif] .error-feedback {
            display: block;
        }

        .icon-feedback .icon {
            display: none;
        }

        [error-notif] .fa-circle-exclamation {
            display: block;
        }

        [success-notif] .fa-circle-check {
            display: block;
        }

        .show-password {
            position: absolute;
            top: 50%;
            right: -25px;
            transform: translate(0, -50%) scale(1.25);
            opacity: 0.45;
            transition: 0.2s all ease-in-out;
        }

        .show-password:hover {
            opacity: 1;
        }

        .show-password .icon {
            display: none;
        }

        .show-password.show .fa-eye-slash.icon {
            display: block;
            cursor: pointer;
        }

        .show-password:not(.show) .fa-eye.icon {
            display: block;
            cursor: pointer;
        }

        form {
            width: 85%;
            margin: 0 auto;
        }

        @media screen and (min-width: 768px) {
            .column {
                width: 50%;
            }

            .content-icon img {
                max-width: 270px;
            }
        }

        @media screen and (min-width: 991px) {
            .icon-feedback {
                transform: translate(0, -50%) scale(1.5);
            }
        }

        @media screen and (min-width: 1024px) {
            .content-icon img {
                max-width: 300px;
            }

            form {
                width: 95%;
            }

            .show-password {
                right: -30px;
            }
        }


        @media screen and (min-width: 1366px) {
            .signup-options-list button {
                width: 49%;
            }

            .form-wrapper {
                width: 450px;
            }
        }

        .content {
            padding: 67px 27px 0px 30px;
            transform: translate3d(0, 0, 26px);
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
    </style>


    <link rel="stylesheet" href="{{ asset('guest/css/filepond.css') }}">
    <link rel="stylesheet" id="cpswitch" href="{{ asset('guest/css/apply.css') }}">
@endsection

@section('content')
    <section class="investor-form">
        <div class="mainContainer">
            <div class="container">
                <div class="loader" id="loader"></div>
                <div class="logiform-container py-4">
                    <div class="flex-container d-flex flex-wrap justify-content-center bg-light p-0">
                        <div class="column d-block p-3 p-md-4 p-lg-5 p getstarted-col">
                            <div
                                class="d-flex gap-4 content p-3 px-md-4 py-md-5 px-lg-5 child-w-100 flex-wrap position-relative h-100 align-items-center">

                                <div class="text-content position-relative">
                                    <span class="text-secondary2">Hi Welcome!</span>
                                    <h2 class="text-white">Join Our Network of Visionary Investors </h2>
                                    <p class="text-secondary2 mt-4">At Punjab Angels Network, we are dedicated to building a
                                        vibrant entrepreneurial ecosystem by connecting visionary investors with promising
                                        startups.
                                    </p>
                                </div>
                                <div class="content-icon position-relative">
                                    <img src="{{ asset('guest/images/resources/rocket-man.png') }}" alt=""
                                        class="w-100">
                                </div>
                            </div>
                        </div>
                        <div class="column d-block p-3 d-flex align-items-center justify-content-center h-100">
                            <div class="content">
                                <div class="form-wrapper py-4">
                                    <h2 class="text-black">Mentorship or Fundraise for startups
                                    </h2>
                                    <form id="metorshipForm" name="metorshipForm" enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-input mb-3 p-0">
                                                    <label for="looking_for" class="text-secondary">Are you looking
                                                        for?</label>
                                                    <div class="input-relative position-relative mt-1 mt-lg-2">
                                                        <select type="text"
                                                            class="default-input rounded-pill  input-required"
                                                            name="looking_for" id="looking_for">
                                                            <option value="Fundraise">Fundraise</option>
                                                            <option value="Mentorship">Mentorship</option>
                                                            <option value="Both">Both</option>
                                                        </select>
                                                        <div id="looking_for" class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-input mb-3 p-0">
                                                    <label for="full_name" class="text-secondary">Name</label>
                                                    <div class="input-relative position-relative mt-1 mt-lg-2">
                                                        <Input type="text"
                                                            class="default-input rounded-pill py-1 ps-3 py-lg-2 input-required"
                                                            name="full_name" id="full_name"
                                                            placeholder="Enter Your Name"></Input>
                                                        <div id="full_name" class="invalid-feedback"></div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-input mb-3 p-0">
                                                    <label for="email" class="text-secondary">Email</label>
                                                    <div class="input-relative position-relative mt-1 mt-lg-2">
                                                        <Input type="text"
                                                            class="default-input rounded-pill py-1 ps-3 py-lg-2 input-required"
                                                            name="email" id="email"
                                                            placeholder="Enter Your Email"></Input>
                                                        <div id="email" class="invalid-feedback"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-input mb-3 p-0">
                                                    <label for="mobile_no" class="text-secondary">Mobile No</label>
                                                    <div class="input-relative position-relative mt-1 mt-lg-2">
                                                        <Input type="text"
                                                            class="default-input rounded-pill py-1 ps-3 py-lg-2 input-required"
                                                            name="mobile_no" id="mobile_no"
                                                            placeholder="Enter Your Mobile No"></Input>
                                                        <div id="mobile_no" class="invalid-feedback"></div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-input mb-3 p-0">
                                                    <label for="start_up_name" class="text-secondary">Startup Name</label>
                                                    <div class="input-relative position-relative mt-1 mt-lg-2">
                                                        <Input type="text"
                                                            class="default-input rounded-pill py-1 ps-3 py-lg-2 input-required"
                                                            name="start_up_name" id="start_up_name"
                                                            placeholder="Enter Startup Name"></Input>
                                                        <div id="start_up_name" class="invalid-feedback"></div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-input mb-3 p-0">
                                                    <label for="start_up_website" class="text-secondary">Startup
                                                        Website</label>
                                                    <div class="input-relative position-relative mt-1 mt-lg-2">
                                                        <Input type="text"
                                                            class="default-input rounded-pill py-1 ps-3 py-lg-2 input-required"
                                                            name="start_up_website" id="start_up_website"
                                                            placeholder="Enter Startup Website"></Input>
                                                        <div id="start_up_website" class="invalid-feedback"></div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>






                                        <div class="form-input mb-3 p-0">
                                            <label for="start_up" class="text-secondary">Startup</label>
                                            <div class="input-relative position-relative mt-1 mt-lg-2">
                                                <Input type="text"
                                                    class="default-input rounded-pill py-1 ps-3 py-lg-2 input-required"
                                                    name="start_up" id="start_up"
                                                    placeholder="Enter Your Startup"></Input>
                                                <div id="start_up" class="invalid-feedback"></div>
                                            </div>

                                        </div>


                                        <div class="form-input mb-3 p-0">
                                            <label for="amount_receive_till_date" class="text-secondary">Total Rupee
                                                Amount
                                                of
                                                investments received till date</label>
                                            <div class="input-relative position-relative mt-1 mt-lg-2">
                                                <select type="text"
                                                    class="default-input rounded-pill py-1 ps-3 py-lg-2 input-required"
                                                    name="amount_receive_till_date" id="amount_receive_till_date">
                                                    <option value="0  to 10 lacs">0 to 10 lacs</option>
                                                    <option value="10 lacs 1 Cr">10 lacs 1 Cr</option>
                                                    <option value="1 Cr and above">1 Cr and above</option>
                                                </select>
                                                <div id="amount_receive_till_date" class="invalid-feedback"></div>
                                            </div>
                                        </div>


                                        <div class="form-submit">
                                            <button type="submit" name="submit" id="btnCreateAccount"
                                                class="btn btn-success w-100 rounded-pill py-lg-2 mt-1 mt-lg-2">
                                                Submit
                                            </button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('page_level_script')
    <script src="{{ asset('guest/js/jquery.min.js') }}"></script>
    <script src="{{ asset('guest/js/mmenu.min.js') }}"></script>
    <script src="{{ asset('guest/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('guest/js/theia-sticky-sidebar.min.js') }}"></script>
    <script src="{{ asset('guest/js/scripts.js') }}"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {

            $('#metorshipForm').on('submit', function(event) {
                event.preventDefault(); // Prevent default form submission
                // const formData = new FormData();
                var formData = new FormData(this);
                $('#loader').show(); // Show the loader
                $.ajax({
                    url: '{{ route('forms.mentorshipfundraise') }}',
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
                                        'https://pages.razorpay.com/CMPAN';
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
                                        'https://pages.razorpay.com/CMPAN';
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
