<!-- team-section -->
<section class="team-section sec-pad centred bg-color-1">
    <div class="pattern-layer" style="background-image: url({{ asset('front/assets/images/shape/shape-1.png') }});"></div>
    <div class="auto-container">
        <div class="sec-title">
            <h5>Nuesrtros Agentes</h5>
            <h2>Conoce a nuestros excelentes agentes</h2>
        </div>
        <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
            @foreach($agents as $agent)
                <div class="team-block-one">
                    <div class="inner-box">
                        <figure class="image-box"><img alt="" src="{{ (!empty($agent->photo)) ? url('upload/profiles/'.$agent->photo) : url('upload/No_Image_Available.jpg') }}">
                        </figure>
                        <div class="lower-content">
                            <div class="inner">
                                <h4><a href="agents-details.html">{{ $agent->name }} {{ $agent->lastname }}</a></h4>
                                <span class="designation">{{ $agent->jobtitle }}</span>
                                <ul class="social-links clearfix">
                                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- team-section end -->
