<!doctype html>
<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('backend/assets/images/favicon-32x32.png') }}" type="image/png"/>
    <!--plugins-->
    <link href="{{ asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')  }}" rel="stylesheet"/>
    <link href="{{ asset('backend/assets/plugins/simplebar/css/simplebar.css')  }}" rel="stylesheet"/>
    <link href="{{ asset('backend/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')  }}" rel="stylesheet"/>
    <link href="{{ asset('backend/assets/plugins/metismenu/css/metisMenu.min.css')  }}" rel="stylesheet"/>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('backend/assets/css/bootstrap.min.css')  }}" rel="stylesheet"/>
    <link href="{{ asset('backend/assets/css/bootstrap-extended.css')  }}" rel="stylesheet"/>
    <link href="{{ asset('backend/assets/css/style.css')  }}" rel="stylesheet"/>
    <link href="{{ asset('backend/assets/css/icons.css')  }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--    @trixassets--}}

    <!-- loader-->
    <link href="{{  asset('backend/assets/css/pace.min.css') }}" rel="stylesheet"/>

    <!--Theme Styles-->
    <link href="{{  asset('backend/assets/css/dark-theme.css') }}" rel="stylesheet"/>
    <link href="{{  asset('backend/assets/css/light-theme.css') }}" rel="stylesheet"/>
    <link href="{{  asset('backend/assets/css/semi-dark.css') }}" rel="stylesheet"/>
    <link href="{{  asset('backend/assets/css/header-colors.css') }}" rel="stylesheet"/>
    @stack('styles')

    <title>{{ config('app.name', 'ProPropiedades') }}</title>
    <style>
        #loader {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            background: rgba(0,0,0,0.75) url("{{ asset('front/images/Gear-0.4s-357px.gif') }}") no-repeat center center;
            z-index: 99999;
        }
    </style>
</head>

<body>
<div id='loader'></div>

<!--start wrapper-->
<div class="wrapper">
    <!--start top header-->
    @include('layouts.backend.header')

    <!--end top header-->

    <!--start sidebar -->
    @include('layouts.backend.sidebar')

    <!--end sidebar -->

    {{--    <main class="page-content">--}}
    {{ $slot }}
    {{--    </main>--}}

    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->

</div>
<!--end wrapper-->


<!-- Bootstrap bundle JS -->
<script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
<!--plugins-->
<script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('backend/assets/js/pace.min.js') }}"></script>

<!-- Vector map JavaScript -->
<script src="{{ asset('backend/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
<script src="{{ asset('backend/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>


@stack('script')
<!--app-->
<script src="{{ asset('backend/assets/js/app.js') }}"></script>


<script>
    $(function() {
        $( "form" ).submit(function() {
            $('#loader').show();
        });
    });
</script>

</body>

</html>
