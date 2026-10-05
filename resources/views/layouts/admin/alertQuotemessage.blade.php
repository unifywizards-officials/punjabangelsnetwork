
@if (Session::has('quote'))
<div class="alert alert-success alert-dismissible" role="alert">
    <!-- <button type="button" class="close" data-dismiss="alert">
        <i class="fa fa-times"></i>
    </button> -->
    <strong>Success !</strong> {{ session('quote') }}
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


@if(session('quote_errors'))
    <div class="alert alert-danger">
        <ul>
            @foreach(session('quote_errors')->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif