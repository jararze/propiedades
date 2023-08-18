@php
    $categories=App\Models\Configuration::all();
@endphp

<!-- main-footer -->
<footer class="main-footer">
    <div class="footer-top bg-color-2">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget about-widget">
                        <div class="widget-title">
                            <h3>Sobre nosotros</h3>
                        </div>
                        <div class="text">
                            <p>{{  $categories[11]->value }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget ml-70">
                        <div class="widget-title">
                            <h3>Services</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="links-list class">
                                <li><a href="">Nosotros</a></li>
                                <li><a href="">Agentes</a></li>
                                <li><a href="">Proyectos</a></li>
                                <li><a href="">Propiedades</a></li>
                                <li><a href="">Blog</a></li>
                                <li><a href="">Contactanos</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="widget-title">
                            <h3>Contacts</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="info-list clearfix">
                                <li><i class="fas fa-map-marker-alt"></i>{{  $categories[1]->value }}
                                </li>
                                <li><i class="fas fa-microphone"></i><a href="tel:+591{{  $categories[3]->value }}">{{  $categories[3]->value }}</a>
                                </li>
                                <li><i class="fas fa-envelope"></i><a href="mailto:{{  $categories[10]->value }}">{{  $categories[10]->value }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-box clearfix">
                <figure class="footer-logo"><a href="{{ route('index') }}"><img alt="" src="{{ asset('backend/assets/images/logo/PROpiedades_03.png') }}" style="width: 30%"></a></figure>
                <div class="copyright pull-left">
                    <p><a href="/">Propropiedades</a> &copy; {{ date('Y') }} Todos los derechos reservados.</p>
                </div>
                <ul class="footer-nav pull-right clearfix">
                    <li><a href="/">Terminos del servicio</a></li>
                    <li><a href="/">Politicas de privacidad</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- main-footer end -->


<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fas fa-angle-up"></span>
</button>
