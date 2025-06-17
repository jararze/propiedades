<!-- testimonial-section end -->
<section class="testimonial-section bg-color-1 centred">
    <div class="pattern-layer" style="background-image: url({{asset('front/assets/images/background/Nuestro-Equipo.png')}});"></div>
    <div class="auto-container">
        <div class="sec-title">
            <h5>Testimonios</h5>
            <h2>❝Somos un equipo unido❞</h2>
        </div>
        <div class="single-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
            @foreach($testimonies as $testimony)
                <div class="testimonial-block-one">
                    <div class="inner-box">
                        <figure class="thumb-box">
                            <img
                                alt="{{ $testimony->name }}"
                                src="{{ (!empty($testimony->photo)) ? url('upload/testimonies/'  . $testimony->photo) : url('upload/No_Image_Available.jpg') }}">
                        </figure>
                        <div class="text">
                            <p>{{ $testimony->testimony }}</p>
                        </div>
                        <div class="author-info">
                            <h4>{{ $testimony->name }}</h4>
                            <span class="designation">{{ $testimony->job }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- testimonial-section end -->
