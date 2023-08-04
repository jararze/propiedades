<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_default">

<head>
    <title>{{ config('app.name', 'ProPropiedades') }} - Proyectos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('backend/assets/images/favicon-32x32.png') }}"/>
    <link rel="stylesheet" href="{{ asset('project/js/vendor/hotspot/css/style.min.css') }}" type="text/css"
          media="all">
    <link rel="stylesheet" href="{{ asset('project/js/vendor/hotspot/css/tooltipster.css') }}" type="text/css"
          media="all">
    <link rel="stylesheet" href="{{ asset('project/js/vendor/mediaelement/css/mediaelementplayer.css') }}"
          type="text/css" media="all">
    <link rel="stylesheet" href="{{ asset('project/js/vendor/revslider/public/assets/css/settings.css') }}"
          type="text/css" media="all">
    <style id="rs-plugin-settings-inline-css" type="text/css"></style>

    <link rel='stylesheet' href='{{ asset('project/js/vendor/swiper/swiper.min.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('project/js/vendor/magnific/magnific-popup.min.css') }}' type='text/css'
          media='all'/>

    <link rel='stylesheet' href='{{ asset('project/css/font-face/css/fonts_pack.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('project/css/fontello/css/fontello-embedded.css') }}' type='text/css'
          media='all'/>
    <link rel='stylesheet' href='{{ asset('project/css/animation.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('project/css/shortcodes.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('project/css/style.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('project/css/template-color.css') }}' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{ asset('project/css/responsive.css') }}' type='text/css' media='all'/>

</head>

<body
    class="home page preloader blog_style_excerpt sidebar_hide expand_content remove_margins header_style_header-1 header_title_off menu_style_left menu_style_side anchor_slide">
<div class="body_wrap">
    <div class="page_wrap">




        {{ $slot }}


        <footer class="site_footer_wrap scheme_dark">
            <div class="copyright_wrap scheme_">
                <div class="copyright_wrap_inner">
                    <div class="content_wrap">
                        <div class="copyright_text">
                            <a target="_blank" href=""> ProPropiedades </a>© <span id="date"></span> .
                            Todos los derechos reservados <a target="_blank" href="">Terminos de uso</a> y <a target="_blank" href="">Politicas de privacidad</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>
</div>
<div id="page_preloader">
    <div class="preloader_wrap preloader_square">
        <div class="preloader_square1"></div>
        <div class="preloader_square2"></div>
    </div>
</div>

<script type='text/javascript' src='{{ asset('project/js/vendor/jquery-2.2.4.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('project/js/vendor/jquery-migrate.min.js') }}'></script>
<script type="text/javascript"
        src="{{ asset('project/js/vendor/revslider/public/assets/js/jquery.themepunch.tools.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('project/js/vendor/revslider/public/assets/js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('project/js/vendor/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('project/js/vendor/revslider/public/assets/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('project/js/vendor/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script type='text/javascript' src='{{ asset('project/js/vendor/_packed.js') }}'></script>
<script type="text/javascript" src="{{ asset('project/js/vendor/hotspot/js/jquery.tooltipster.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('project/js/vendor/hotspot/js/script.min.js') }}"></script>
<script type="text/javascript"
        src="{{ asset('project/js/vendor/mediaelement/mediaelement-and-player.min.js') }}"></script>


<script type='text/javascript' src='{{ asset('project/js/custom/_utils.js') }}'></script>
<script type='text/javascript' src='{{ asset('project/js/custom/_main.js') }}'></script>
<script type='text/javascript' src='{{ asset('project/js/custom/_date.js') }}'></script>
<script type='text/javascript' src='{{ asset('project/js/custom/shortcodes.js') }}'></script>
<script type='text/javascript' src='{{ asset('project/js/custom/_init.js') }}'></script>
<script type="text/javascript" src="{{ asset('project/js/custom/_form_contact.js') }}"></script>


<a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>
</body>

</html>
