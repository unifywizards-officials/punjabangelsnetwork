<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
     <!-- Favicon -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="guest/images/fav-icon.png" alt="" type="image/x-icon">
    <!------------Css------------------->
    @include('layouts.guest.css')
    <!------------End Css------------------->

    <!------------Page level Style or Css------------------->
    @yield('page_level_style')
    <!------------End Page level Style or Css------------------->
</head>
<body>

<!-- End Google Tag Manager (noscript) -->
    <!------------Header------------------>
    @include('layouts.guest.header')

    <!------------End Header------------------->

    <!------------Body Content------------------->
    @yield('content')
    <!------------End Body Content------------------->

    <!------------Footer------------------->
    @include('layouts.guest.footer')
    <!------------EndFooter------------------->

   
