<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Error page 404, page not found Propropiedades, wrong url">
    <link rel="icon" href="{{ asset('backend/assets/images/favicon-32x32.png') }}" type="image/x-icon"/>
    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon-32x32.png') }}" type="image/x-icon"/>
    <title>@yield('title') | {{ config('app.name', 'ProPropiedades') }}</title>
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300&display=swap" rel="stylesheet">
    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('errors/assets/css/bootstrap.css') }}">
    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('errors/assets/css/error-page.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('errors/assets/css/error-page-responsive.css') }}">
</head>
<body>
<!-- 01 Preloader -->
<div class="loader-wrapper" id="loader-wrapper">
    <div class="loader"></div>
</div>
<!-- Preloader end -->
<!-- 02 Main page -->
<section class="page-section" style="background: {{ asset('errors/assets/images/bg.jpeg') }}">
    <div class="full-width-screen">
        <div class="container-fluid p-0">
            <div class="particles-bg" id="particles-js">
                <div class="content-detail">
                    <h1 class="global-title">@yield('code')</h1>

                    <h4 class="sub-title">Oops!</h4>

                    <p class="detail-text">@yield('message')</p>

                    <div class="back-btn">
                        <a href="{{ route('index') }}" class="btn">Regresar al inicio</a>
                    </div>
                </div></div>
        </div>
    </div>
</section>
<!-- latest jquery-->
<script src="{{ asset('errors/assets/js/jquery-3.5.1.min.js') }}"></script>
<!-- theme particles script -->
<script src="{{ asset('errors/assets/js/particles.min.js') }}"></script>
<script src="{{ asset('errors/assets/js/app.js') }}"></script>
<!-- Theme js-->
<script src="{{ asset('errors/assets/js/script.js') }}"></script>
</body>
</html>
