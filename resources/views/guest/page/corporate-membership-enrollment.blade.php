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

.mb-6{
    margin-bottom: 6%;
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
        background-image: url({{ asset('guest/images/resources/investor-bg.jpg')}});
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
        border-top-right-radius: 0;
    border-bottom-right-radius: 0;
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
    @media screen and (max-width: 768px) {
        .content{
            padding: 3% !important;
            padding-top: 50px !important;
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
                    <div class="col-sm-4  p getstarted-col">
                        <div
                            class="d-flex gap-4 content p-3 px-md-4 py-md-5 px-lg-5 child-w-100 flex-wrap position-relative h-100 align-items-center">

                            <div class="text-content position-relative">
                                <span class="text-secondary2">Hi Welcome!</span>
                                <h2 class="text-white">Join the Punjab Angels Network: Become a Corporate Member!</h2>
                                <p class="text-secondary2 mt-4">Unlock endless opportunities for growth and collaboration by becoming a Corporate Member of the Punjab Angels Network! 
                                As a Corporate Member, you will gain access to exclusive resources, networking events, and funding opportunities that can take your business to new heights.
                                </p>
                            </div>
                            <div class="content-icon position-relative">
                                <img src="{{ asset('guest/images/resources/rocket-man.png') }}" alt=""
                                    class="w-100">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8  h-100">
                        <div class="content">

                            <h2 class="text-black text-center">Corporate Membership Enrollment
                            </h2>
                            <form id="metorshipForm" name="metorshipForm" enctype="multipart/form-data">
                                <div class="row">

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

                                    <div class="col-md-6">
                                        <label for="gender" class="text-secondary">Gender</label>
                                        <div class="input-relative position-relative mt-1 mt-lg-2">
                                            <select class="default-input rounded-pill py-1 ps-3 py-lg-2 input-required" name="gender" id="gender" required>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Prefer not to say">Prefer not to say</option>
                                                <option value="Other">Other</option>
                                            </select>
                                            <div id="gender-error" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12" id="other-gender-container" style="display: none;">
                                    <label for="other-gender" class="text-secondary">Please Specify Gender</label>
                                    <div class="input-relative position-relative mt-1 mt-lg-2">
                                        <input type="text" class="default-input rounded-pill py-1 ps-3 py-lg-2" name="other_gender" id="other-gender" disabled>
                                        <div id="other-gender-error" class="invalid-feedback"></div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-input mb-3 p-0">
                                            <label for="dob" class="text-secondary">Date Of Birth</label>
                                            <div class="input-relative position-relative mt-1 mt-lg-2">
                                                <Input type="date"
                                                    class="default-input rounded-pill py-1 ps-3 py-lg-2 input-required"
                                                    name="dob" id="dob"
                                                    placeholder="Enter Your Date Of Birth"></Input>
                                                <div id="dob" class="invalid-feedback"></div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="designation" class="text-secondary">Designation</label>
                                        <div class="input-relative position-relative mt-1 mt-lg-2">
                                            <Input type="text"
                                                class="default-input rounded-pill py-1 ps-3 py-lg-2 input-required"
                                                name="designation" id="designation"
                                                placeholder="Enter Your Designation"></Input>
                                            <div id="designation" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-input mb-3 p-0">
                                            <label for="organization" class="text-secondary">Organization</label>
                                            <div class="input-relative position-relative mt-1 mt-lg-2">
                                                <Input type="text"
                                                    class="default-input rounded-pill py-1 ps-3 py-lg-2 input-required"
                                                    name="organization" id="organization"
                                                    placeholder="Enter Your Organization"></Input>
                                                <div id="organization" class="invalid-feedback"></div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="domain" class="text-secondary">Domain</label>
                                        <div class="input-relative position-relative mt-1 mt-lg-2">
                                            <Input type="text"
                                                class="default-input rounded-pill py-1 ps-3 py-lg-2 input-required"
                                                name="domain" id="domain"
                                                placeholder="Enter Your Domain"></Input>
                                            <div id="domain" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-input mb-3 p-0">
                                            <label for="linkedin_id" class="text-secondary">LinkedIn ID
                                            </label>
                                            <div class="input-relative position-relative mt-1 mt-lg-2">
                                                <Input type="text"
                                                    class="default-input rounded-pill py-1 ps-3 py-lg-2 input-required"
                                                    name="linkedin_id" id="linkedin_id"
                                                    placeholder="Enter Your LinkedIn ID"></Input>
                                                <div id="linkedin_id" class="invalid-feedback"></div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="contact_no" class="text-secondary">Contact Number</label>
                                        <div class="input-relative position-relative mt-1 mt-lg-2">
                                            <Input type="text"
                                                class="default-input rounded-pill py-1 ps-3 py-lg-2 input-required"
                                                name="contact_no" id="contact_no"
                                                placeholder="Enter Your Contact Number"></Input>
                                            <div id="contact_no" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-input mb-3 p-0">
                                            <label for="professional_qualification" class="text-secondary">Professional Qualification
                                            </label>
                                            <div class="input-relative position-relative mt-1 mt-lg-2">
                                                <Input type="text"
                                                    class="default-input rounded-pill py-1 ps-3 py-lg-2 input-required"
                                                    name="professional_qualification" id="professional_qualification"
                                                    placeholder="Enter Your Professional Qualification"></Input>
                                                <div id="professional_qualification" class="invalid-feedback"></div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="office_address" class="text-secondary">Office Address (Including Pincode)</label>
                                        <div class="input-relative position-relative mt-1 mt-lg-2">
                                            <Input type="text"
                                                class="default-input rounded-pill py-1 ps-3 py-lg-2 input-required"
                                                name="office_address" id="office_address"
                                                placeholder="Enter Your Office Address (Including Pincode)"></Input>
                                            <div id="office_address" class="invalid-feedback"></div>
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-input mb-3 p-0">
                                            <label for="residential_address" class="text-secondary">Residential Address (Including Pincode)
                                            </label>
                                            <div class="input-relative position-relative mt-1 mt-lg-2">
                                                <Input type="text"
                                                    class="default-input rounded-pill py-1 ps-3 py-lg-2 input-required"
                                                    name="residential_address" id="residential_address"
                                                    placeholder="Enter Your Residential Address (Including Pincode)"></Input>
                                                <div id="residential_address" class="invalid-feedback"></div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="preferred_mailing_address" class="text-secondary">Preferred Mailing Address</label>
                                        <div class="input-relative position-relative mt-1 mt-lg-2">
                                            <Input type="text"
                                                class="default-input rounded-pill py-1 ps-3 py-lg-2 input-required"
                                                name="preferred_mailing_address" id="preferred_mailing_address"
                                                placeholder="Enter Your Preferred Mailing Address"></Input>
                                            <div id="preferred_mailing_address" class="invalid-feedback"></div>
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
                                            <label for="comment" class="text-secondary">Any Comment</label>
                                            <div class="input-relative position-relative mt-1 mt-lg-2">
                                            <textarea id="comment" name="comment" style="width: 100%; border: 1px solid #cccccc70; background: #EBF3F5; padding-right: 30px; padding-left: 30px; border-radius: 30px;"></textarea>

                                                <div id="comment" class="invalid-feedback"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <div class="form-submit d-flex justify-content-center mb-6">
                                    <button type="submit" name="submit" id="btnCreateAccount"
                                        class="btn btn-success text-center w-50 rounded-pill py-lg-2 mt-1 mt-lg-2">
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


    document.getElementById('gender').addEventListener('change', function() {
        var otherGenderContainer = document.getElementById('other-gender-container');
        var otherGenderInput = document.getElementById('other-gender');

        if (this.value === 'Other') {
            otherGenderContainer.style.display = 'block';
            otherGenderInput.disabled = false;
            otherGenderInput.setAttribute('required', 'required');
        } else {
            otherGenderContainer.style.display = 'none';
            otherGenderInput.disabled = true;
            otherGenderInput.removeAttribute('required');
            otherGenderInput.value = ''; // Clear the field if hidden
        }
    });


    $(document).ready(function() {
        $('#metorshipForm').on('submit', function(event) {
            event.preventDefault(); // Prevent default form submission
            // const formData = new FormData();
            var formData = new FormData(this);
            $('#loader').show(); // Show the loader
            $.ajax({
                url: '{{ route('forms.corporate-membership-enrollment')}}',
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
                                location.reload(true);
                                // window.location.href =
                                //     'https://pages.razorpay.com/CMPAN';
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