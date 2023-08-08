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

                <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                    <section class="properties-section centred">
                        <div class="auto-container">
                            <div class="table-outer">
                                <table class="properties-table">
                                    <thead class="table-header">
                                        <tr>
                                            <th>Info</th>
                                            @foreach($properties as $property)
                                                <th>
                                                    <figure class="image-box">
                                                        <img
                                                            style="height: 250px; width: 300px"
                                                            alt="{{ $property['PropAttributes']['name'] }}"
                                                            src="{{ (!empty($property['PropAttributes']['thumbnail'])) ? url('upload/properties/' .  $property['PropAttributes']['code'] . "/" . $property['PropAttributes']['thumbnail']) : url('upload/No_Image_Available.jpg') }}">
                                                    </figure>
                                                    <div class="title">{{ $property['PropAttributes']['name'] }}</div>
                                                    <div
                                                        class="price">{{ number_format($property['PropAttributes']['lowest_price'], 0) }}
                                                        {{ $property['PropAttributes']['currency'] }}</div>
                                                    <div class="delete">
                                                        <form
                                                            action="{{ route('userProfile.compare.delete', $property->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            <input name="_method" type="hidden" value="DELETE">
                                                            <button class="btn-danger show-alert-delete-box theme-btn btn-one"
                                                                    data-toggle="tooltip" title='Borrar'
                                                                    type="submit" action="">Eliminar</button>
                                                        </form>

                                                    </div>
                                                </th>
                                            @endforeach

                                        </tr>
                                    </thead>
                                    <tbody>

                                    <tr>
                                        <td>
                                            <p>Ciudad</p>
                                        </td>
                                        @foreach($properties as $property)
                                            <td>
                                                <p>{{ $property['PropAttributes']['city'] }}</p>
                                            </td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>Area</p>
                                        </td>
                                        @foreach($properties as $property)
                                            <td>
                                                <p>{{ $property['PropAttributes']['size'] }} mt2</p>
                                            </td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>Habitaciones</p>
                                        </td>
                                        @foreach($properties as $property)
                                            <td>
                                                <p>{{ $property['PropAttributes']['bedroom'] }} </p>
                                            </td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>Baños</p>
                                        </td>
                                        @foreach($properties as $property)
                                            <td>
                                                <p>{{ $property['PropAttributes']['bathrooms'] }} </p>
                                            </td>
                                        @endforeach
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>Garaje</p>
                                        </td>
                                        @foreach($properties as $property)
                                            <td>
                                                <p>{{ $property['PropAttributes']['garage'] }} </p>
                                            </td>
                                        @endforeach
                                    </tr>
                                    @foreach($amenities as $amenity)
                                        <tr>
                                            <td>{{ $amenity->name }}</td>

                                            @foreach($properties as $property)
                                                @php $property_aminities = explode(",", $property['PropAttributes']['amenities_id']) @endphp
                                                <td>
                                                    @if(in_array($amenity->id, $property_aminities))
                                                        <p><i class="yes fas fa-check"></i></p>
                                                    @else
                                                        <p><i class="no fas fa-times"></i></p>
                                                    @endif

                                                </td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                </div>


            </div>
        </div>
    </section>
    <!-- sidebar-page-container -->


    @include('frontend.components.suscribe')


</x-front-layout>
