@extends('layouts.admin.master')

@section('title','Custom Form Listing')

@section('page_level_style')

@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Custom Form</h3>
                </div>

                <div class="card-body">
                    <!--------Messages ------------------------------------>
                    @include('layouts.admin.alertmessage')
                    <!------------EndMessages--------------------------------> 
                    {{-- <div id="fb-editor"></div> --}}
                    <form id="dynamic-form">
                        <div id="fb-render"></div>
                    </form>
                
                </div>

            </div>

        </div>

    </div>
</section>
@endsection

@section('page_level_script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{asset('assets/form-builder/form-builder.min.js')}}"></script>
<script src="{{asset('assets/form-builder/form-render.min.js')}}"></script>

<script>
    // $(document).ready(function() {
    //         var formData = @json($formData->form);

    //         // Initialize formBuilder with saved data
    //         var formBuilder = $('#fb-editor').formBuilder({
    //             formData: formData
    //         });

    //         // Render the form with saved data
    //         $('#fb-editor').formRender({
    //             formData: formData
    //         });
    //     });
        $(document).ready(function() {
            var formData = @json($formData->form);
            console.log(formData); // Check if the data is logged correctly

            $('#fb-render').formRender({
                formData: formData
            });
        });
</script>
@endsection