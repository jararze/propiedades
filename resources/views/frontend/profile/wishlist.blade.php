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
                                            <div class="deals-block-one">
                                                <x-property-horizontal-wish type="Destacada" :property="$property"></x-property-horizontal-wish>
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
