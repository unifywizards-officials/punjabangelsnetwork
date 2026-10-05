@extends('layouts.guest.master')

@section('title','Event Form Data')

@section('page_level_style')
<style>
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
    #msform input,
    #msform textarea {
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

    #msform input:focus,
    #msform textarea:focus {
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

    #msform .action-button:hover,
    #msform .action-button:focus {
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

    #msform .action-button-previous:hover,
    #msform .action-button-previous:focus {
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

    .alert-dismissable .close,
    .alert-dismissible .close {
        position: relative;
        top: 0px;
        right: 0px;
        color: inherit;
    }

    button.close {
        display: none;
    }

    @media (max-width : 726px) {
        #msform fieldset {

            width: 90%;

        }

    }
</style>
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 col-md-offset-12">
                <form id="msform" enctype="multipart/form-data">
                    <input type="hidden" name="event_name" value="{{$event->heading}}">
                    <fieldset><div class="row"><div class="col-md-12 heading-bg">
                        <h2 class="fs-title">{{$event->heading}}</h2></div>
                        <div class="col-md-6">
                        <h3 class="fs-title">Date:-{{ \Carbon\Carbon::parse($event->publish_date)->format('d M Y') }}</h3></div><div class="col-md-6">
                        <h3 class="fs-title">Time:-{{ \Carbon\Carbon::createFromFormat('H:i', $event->start_time)->format('h:i A') }} onwards</h2></div>
                        <div class="col-md-6"> <h3 class="fs-title">Venue:-{{$event->location}}</h2></div>
                        <h2 class="fs-title">Please Fill Out Your Details</h2>
                        </div>
                        <h3 class="fs-subtitle">Our team will get back to you shortly!</h3>
                        <input type="text" name="name" placeholder="Full Name" required="">
                        <div id="name" class="invalid-feedback"></div>
                        <input type="email" name="email" placeholder="Email" required="">
                        <div id="email" class="invalid-feedback"></div>
                        <input type="number" name="phone_no" placeholder="Contact Number" required="">
                        <div id="phone_no" class="invalid-feedback"></div>
                        <input type="text" name="organization" placeholder="Enter Organisation" required="">
                        <div id="organization" class="invalid-feedback"></div>
                        <input type="text" name="designation" placeholder="Enter Designation" required="">
                        <div id="designation" class="invalid-feedback"></div>
                        <label for="type" class="form-label">Are You a Member/Guest?</label>
                        <select class="form-select" id="type" name="type" required>
                            <option value="Guest">Guest</option>
                            <option value="Member">Member</option>
                        </select>
                        <div id="type" class="invalid-feedback"></div>

                        <label for="is_active" class="form-label">Are you Punjab Angels Network Member?</label>
                        <select class="form-select" id="is_active" name="is_active" required>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                        <div id="is_active" class="invalid-feedback"></div>
                        <br>


                        <button type="submit" id="submitquote" class="btn btn-success btn-user float-right mb-3">Send</button>
                    </fieldset>
                </form>
            </div>

        </div>

    </div>

</section>
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
                url: '{{ route("submit-eventform") }}', // Specify your Laravel route for form submission
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
                        $('#' + key).text(value[0]); // Display each validation error
                        $('[name="' + key + '"]').addClass('is-invalid');
                    });
                }
            });
        });
    });
</script>
@endsection