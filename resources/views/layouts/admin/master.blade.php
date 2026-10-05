<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
    <!------------Css------------------->
    @include('layouts.admin.css')
    <!------------End Css------------------->

    <!------------Page level Style or Css------------------->
    @yield('page_level_style')
    <!------------End Page level Style or Css------------------->
    @livewireStyles
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{asset('website_logo/pan-logo.png')}}" alt="AdminLTELogo" height="100"
                width="150">
        </div>

        <!------------Header------------------>
        @include('layouts.admin.header')

        <!------------End Header------------------->
        @auth
        <!-----------Side bar--------->
        @if(Auth::user()->role == 'admin')
           @include('layouts.admin.sidebar')
        @elseif(Auth::user()->role == 'user')
           @include('layouts.admin.sidebarUser')
        @elseif(Auth::user()->role == 'seo-manager')
           @include('layouts.admin.sidebarSeoManagement')
        @elseif(Auth::user()->role == 'event-manager')
           @include('layouts.admin.sidebarEventManagement')
        @else   
        @endif
        <!------------End Side bar------------------->
        @else

        @endauth
        <div class="content-wrapper">

            <!------------Body Content------------------->
            @yield('content')
            <!------------End Body Content------------------->
        </div>
        <!------------Footer------------------->
        @include('layouts.admin.footer')
        <!------------EndFooter------------------->

        <aside class="control-sidebar control-sidebar-dark">

        </aside>

    </div>

    <!------------Scripts------------------->
    @include('layouts.admin.scripts')
    <!------------EndScripts------------------->


    <!------------Page level Scripts------------------->
    @yield('page_level_script')
    <!------------End Page level Scripts------------------->

    @livewireScripts
    @stack('after-livewire-scripts')

</body>

</html>