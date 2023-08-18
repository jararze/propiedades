<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Fav Icon -->
    <link rel="icon" href="{{ asset('backend/assets/images/favicon-32x32.png') }}" type="image/x-icon">

    <!-- Google Fonts -->

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

    <!-- Stylesheets -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('front/assets/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/color/theme-color.css') }}" id="jssDefault" rel="stylesheet">
    <link href="{{ asset('front/assets/css/switcher-style.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('front/assets/css/responsive.css') }}" rel="stylesheet">
    @stack('styles')

    <title>{{ config('app.name', 'ProPropiedades') }}</title>
</head>
<body>
@if(Request::is('/'))
@endif
{{--@include('layouts.frontend.loader')--}}

@include('layouts.frontend.header')

@include('layouts.frontend.mobilemenu')

<div class="boxed_wrapper">
    {{ $slot }}
</div>


@include('layouts.frontend.footer')

<!-- jequery plugins -->
<script src="{{ asset('front/assets/js/jquery.js') }}"></script>
<script src="{{ asset('front/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/assets/js/owl.js') }}"></script>
<script src="{{ asset('front/assets/js/wow.js') }}"></script>
<script src="{{ asset('front/assets/js/validation.js') }}"></script>
<script src="{{ asset('front/assets/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('front/assets/js/appear.js') }}"></script>
<script src="{{ asset('front/assets/js/scrollbar.js') }}"></script>
<script src="{{ asset('front/assets/js/isotope.js') }}"></script>
<script src="{{ asset('front/assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('front/assets/js/jQuery.style.switcher.min.js') }}"></script>
<script src="{{ asset('front/assets/js/jquery-ui.js') }}"></script>
<script src="{{ asset('front/assets/js/nav-tool.js') }}"></script>

@stack('script')
<!-- main-js -->
<script src="{{ asset('front/assets/js/script.js') }}"></script>

</body>
</html>
