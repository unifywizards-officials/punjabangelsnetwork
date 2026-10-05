{{-- Message --}}
@if (Session::has('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    <!-- <button type="button" class="close" data-dismiss="alert">
        <i class="fa fa-times"></i>
    </button> -->
    <strong>Success !</strong> {{ session('success') }}
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert">
        <i class="fa fa-times"></i>
    </button>
    @foreach ($errors->all() as $error)
    <strong>Error !</strong> {{ $error }}<br>
    @endforeach
</div>
@endif

@if (Session::has('danger'))
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert">
        <i class="fa fa-times"></i>
    </button>
    <strong>warning !</strong> {{ session('danger') }}
</div>
@endif