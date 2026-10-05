@extends('layouts.admin.master')

@section('title','Customer Feedback')

@section('page_level_style')

@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Edit Customer Feedback</h1>
            </div>
            <div class="col-sm-6">
                <!-- <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol> -->
            </div>
        </div>
    </div>
</div>


<section class="content">
    <div class="container-fluid">
        <div class="col-12">

            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Edit Customer Feedback</h3>
                </div>

                <div class="card-body">
                    <!--------Messages ------------------------------------>
                    @include('layouts.admin.alertmessage')
                    <!------------EndMessages-------------------------------->
                    <form method="POST" action="{{route('update.CustomerFeedback')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="col-12">

                            <div class="form-group">
                                <label>Faster Order Fullfillment(in %)</label>
                                <input type="text" class="form-control" name="faster_order_fulfillment"
                                    placeholder="Enter Faster Order Fullfillment value" value="{{$customerfeedback->faster_order_fulfillment}}" required>
                            </div>
                            <div class="form-group">
                                <label>Real-time inventory control(in %)</label>
                                <input type="text" class="form-control" name="Real_time_inventory_control"
                                    placeholder="Enter Real-time inventory control value" value="{{$customerfeedback->Real_time_inventory_control}}" required>
                            </div>

                            <div class="form-group">
                                <label>Clean claim rate & claim automation(in %)</label>
                                <input type="text" class="form-control" name="Clean_claim_rate"
                                    placeholder="Enter Clean claim rate & claim automation Value" value="{{$customerfeedback->Clean_claim_rate}}" required>
                            </div>
                            <div class="form-group">
                                <label>Reduction in paper(in %)</label>
                                <input type="text" class="form-control" name="Reduction_in_paper"
                                    placeholder="Enter Reduction in paper Value" value="{{$customerfeedback->Reduction_in_paper}}" required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-success btn-user float-right mb-3">Save</button>
                        <a class="btn btn-primary float-right mr-3 mb-3" href="{{ route('edit.CustomerFeedback') }}">Cancel</a>


                    </form>
                </div>

            </div>

        </div>

    </div>
</section>
@endsection

@section('page_level_script')
<script>

</script>
@endsection