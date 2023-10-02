<div class="menu_side_wrap scheme_side">
    <span class="menu_side_button icon-menu-2"></span>
    <div class="menu_side_inner">
        <a class="logo" href="#">
            <img src="{{ asset("backend/assets/images/logo/PROpiedades_03.png") }}" class="logo_main" alt="" width="132" height="127">
        </a>
        <div class="toc_menu_item">
            <a href="#" class="toc_menu_description menu_mobile_description">
                <span class="toc_menu_description_title">Menu Principal</span>
            </a>
            <a class="menu_mobile_button toc_menu_icon icon-menu-2" href="#"></a>
        </div>
    </div>
</div>


<div class="menu_mobile_overlay"></div>


<div class="menu_mobile scheme_dark">
    <div class="menu_mobile_inner">
        <a class="menu_mobile_close icon-cancel"></a>
        <a class="logo" href="#">
            <img src="{{ asset("backend/assets/images/logo/PROpiedades_03.png") }}" class="logo_main" alt="" width="132" height="127">
        </a>
        <nav class="menu_mobile_nav_area">
            <ul id="menu_mobile" class="menu_mobile_nav">
                <li class="menu-item current-menu-item current_page_item">
                    <a href="{{ route("index") }}">
                        Ir a Inicio
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="{{ route('about') }}">
                        Nosotros
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="{{ route("front.project.index") }}">
                        Proyectos
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="{{ route("front.properties.index", 'allProperties') }}">
                        Propiedades
                    </a>
                </li>
                <li class="menu-item ">
                    <a href="/contact">
                        Contacto
                    </a>
                </li>
            </ul>
        </nav>

{{--        <div class="socials_mobile">--}}
{{--                        <span class="social_item">--}}
{{--							<a href="#" target="_blank" class="social_icons social_twitter">--}}
{{--								<span class="trx_addons_icon-twitter"></span>--}}
{{--                        </a>--}}
{{--                        </span>--}}
{{--            <span class="social_item">--}}
{{--							<a href="#" target="_blank" class="social_icons social_facebook">--}}
{{--								<span class="trx_addons_icon-facebook"></span>--}}
{{--                        </a>--}}
{{--                        </span>--}}
{{--            <span class="social_item">--}}
{{--							<a href="#" target="_blank" class="social_icons social_instagram">--}}
{{--								<span class="trx_addons_icon-instagram"></span>--}}
{{--                        </a>--}}
{{--                        </span>--}}
{{--        </div>--}}
    </div>
</div>
