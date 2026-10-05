<!DOCTYPE html>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="noindex, nofollow">
    {!! $MetaOg !!}
    <title>@yield('title')</title>
    <meta name="description", content="@yield('description')">
	 @php $data=Settings(); @endphp



    @if($data->is_header ==1)

    {!! $data->header_script !!}

    @endif
    <!------------Css------------------->
    @include('layouts.guest.css')
    <!------------End Css------------------->

    <!------------Page level Style or Css------------------->
    @yield('page_level_style')
    <!------------End Page level Style or Css------------------->
    
</head>
<body>
    <!------------Header------------------>
    @include('layouts.guest.header')

    <!------------End Header------------------->

    <!------------Body Content------------------->
    @yield('content')
    <!------------End Body Content------------------->

    <!------------Footer------------------->
    @include('layouts.guest.footer')
    <!------------EndFooter------------------->

    <!------------Scripts------------------->
    <script src="{{asset('assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
    <!------------EndScripts------------------->


    <!------------Page level Scripts------------------->
    @yield('page_level_script')
    <!------------End Page level Scripts------------------->
</body>

</html>