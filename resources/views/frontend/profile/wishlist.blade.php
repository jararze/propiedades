@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/5.0.7/sweetalert2.min.css" rel="stylesheet">
@endpush
@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="{{ asset('js/share.js') }}"></script>
    <script type="text/javascript">
        $('.show-alert-delete-box').click(function (event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                title: "¿Estás seguro que quieres quitar de deseados la propiedad?",
                text: "Si haces esto ya no aparecera en propiedades deseadas.",
                icon: "warning",
                type: "warning",
                buttons: ["Cancelar", "Confirmado"],
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, ¡Borrala!'
            }).then((willDelete) => {
                if (willDelete) {
                    form.submit();
                }
            });
        });
    </script>
@endpush


<x-front-layout>
    <!--Page Title-->
    <section class="page-title centred" style="background-image: url({{asset('front/images/banner/edit.jpg')}});">
        <div class="auto-container">
            <div class="content-box clearfix">
                <h1>Perfil de usuario </h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="">Inicio</a></li>
                    <li>Perfil Usuario</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- sidebar-page-container -->
    <section class="sidebar-page-container blog-details sec-pad-2 property-page-section property-list">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="blog-sidebar">
                        <div class="sidebar-widget post-widget">
                            <div class="widget-title">
                                <h4>Perfil de usuario</h4>
                            </div>
                            <div class="post-inner">
                                <div class="post">
                                    <figure class="post-thumb"><a href="blog-details.html">
                                            <img
                                                src="{{ (!empty(Auth::user()->photo)) ? url('upload/profiles/'.Auth::user()->photo) : url('upload/No_Image_Available.jpg') }}"
                                                alt=""></a></figure>
                                    <h5><a href="blog-details.html">{{ Auth::user()->name }}</a></h5>
                                    <p>{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                        </div>

                        @include('frontend.profile.innersidebar')


                    </div>
                </div>


                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="property-content-side">

                        <div class="wrapper list">
                            <div class="deals-list-content list-item">
                                @if(count($properties) == 0)
                                    <h7>No hay propiedades</h7>
                                @else
                                    @foreach($properties as $property)
                                        <div class="deals-block-one">
                                            <div class="inner-box">
                                                <div class="image-box">
                                                    <figure class="image">
                                                        <img
                                                            src="{{ (!empty($property['PropAttributes']['thumbnail'])) ? url('upload/properties/' .  $property['PropAttributes']['code'] . "/" . $property['PropAttributes']['thumbnail']) : url('upload/No_Image_Available.jpg') }}"
                                                            alt="{{ $property['PropAttributes']['name'] }}"
                                                            style="width: 300px; height: 350px;">
                                                    </figure>
                                                    <div class="batch"><i class="icon-11"></i></div>
                                                    <div class="buy-btn"><a
                                                            href="{{ route('front.properties.inner', $property['PropAttributes']['id']) }}">{{ $property['PropAttributes']['property_status'] }}</a>
                                                    </div>
                                                </div>
                                                <div class="lower-content">
                                                    <div class="title-text"><h4><a
                                                                href="{{ route('front.properties.inner', $property['PropAttributes']['id']) }}">{{ $property['PropAttributes']['name'] }}</a>
                                                        </h4></div>
                                                    <div class="price-box clearfix">
                                                        <div class="price-info pull-left">
                                                            <h6>Desde</h6>
                                                            <h4>{{ number_format($property['PropAttributes']['max_price'], 0) }}
                                                                $us</h4>
                                                        </div>
                                                        <div class="author-box pull-right">
                                                            <figure class="author-thumb">
                                                                <img
                                                                    src="{{ (!empty($property['PropAttributes']['agent']['photo'])) ? url('upload/profiles/'.$property['PropAttributes']['agent']['photo']) : url('upload/No_Image_Available.jpg') }}"
                                                                    alt="">
                                                                <span>{{ $property['PropAttributes']['agent']['name'] }} {{ $property['PropAttributes']['agent']['lastname'] }}</span>
                                                            </figure>
                                                        </div>
                                                    </div>
                                                    <p>{{ Str::words($property['PropAttributes']['short_description'], 25, '...') }}</p>
                                                    <ul class="more-details clearfix">
                                                        <li>
                                                            <i class="icon-14"></i>{{ $property['PropAttributes']['bedrooms'] }}
                                                            Cuartos
                                                        </li>
                                                        <li>
                                                            <i class="icon-15"></i>{{ $property['PropAttributes']['bathrooms'] }}
                                                            Baños
                                                        </li>
                                                        <li>
                                                            <i class="icon-16"></i>{{ $property['PropAttributes']['size'] }}
                                                            Mt2
                                                        </li>
                                                    </ul>
                                                    <div class="other-info-box clearfix">
                                                        <div class="btn-box pull-left">
                                                            <a href="{{ route('front.properties.inner', $property['PropAttributes']['id']) }}"
                                                               class="theme-btn btn-two">Ver más</a>
                                                        </div>
                                                        <ul class="other-option pull-right clearfix">
                                                            <li>{!! Share::page(Request::url())->facebook() !!}</li>
                                                            <li>{!! Share::page(url()->current())->whatsapp() !!}</li>
                                                            <li>{!! Share::page(url()->current())->telegram() !!}</li>
                                                            <li>
                                                                <form
                                                                    action="{{ route('userProfile.wishlist.delete', $property->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    <input name="_method" type="hidden" value="DELETE">
                                                                    {{--                                                                <input name="user_id" type="hidden" value="{{ $property->user_id }}">--}}
                                                                    <button class="btn-danger show-alert-delete-box"
                                                                            data-toggle="tooltip" title='Borrar'
                                                                            type="submit" action=""><a href="#"><i
                                                                                class="fa fa-ban"></i></a></button>
                                                                </form>
                                                                {{--                                                            <a href="{{ route('front.properties.inner', $property['PropAttributes']['id']) }}"><i--}}
                                                                {{--                                                                    class="fa fa-ban"></i></a>--}}
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- sidebar-page-container -->


    @include('frontend.components.suscribe')


</x-front-layout>
