@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endpush
@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAX9rEY00ajicFc0JZbwK4i-3HOQMBV78"></script>
    <script src="{{ asset('front/assets/js/gmaps.js') }}"></script>
    <script src="{{ asset('front/assets/js/map-helper.js') }}"></script>
    <script src="{{ asset('js/share.js') }}"></script>

    <script type="text/javascript">

        $(document).ready(function () {

            toastr.options = {
                "closeButton": true,
                "newestOnTop": true,
                "positionClass": "toast-top-right"
            };


            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        });

        function addCompareList(property_id = null, user_id){
            $.ajax({
                url: '/user/compare/add',
                type: 'POST',
                data: {
                    "property_id": property_id,
                    "user_id": user_id,
                },
                dataType: 'JSON',
                success: function (response) {
                    // alert(response.success)
                    if(response.success === true){
                        toastr.success("Propiedad agregada a la lista de comparación");
                    }else{
                        toastr.error("La propiedad ya esta agregada a su lista de comparacion");
                    }
                },

                error: function (xhr, status, error) {
                    const err = eval("(" + xhr.responseText + ")");
                    if (error === "Unauthorized" || err.message === "Unauthenticated.") {
                        // alert("mal")
                        toastr.error("Sin autorización");
                    }
                }
            })
        }


        function addWishlist(property_id = null) {
            const user_id = document.getElementById(property_id).getAttribute("user_id");

            $.ajax({
                url: '/user/wishlist/add',
                type: 'POST',
                data: {
                    "property_id": property_id,
                    "user_id": user_id,
                },
                dataType: 'JSON',
                success: function (response) {
                    // alert(response.success)
                    if(response.success === true){
                        toastr.success("Propiedad agregada a la lista de deseados");
                    }else{
                        toastr.error("La propiedad ya esta agregada a su lista de deseados");
                    }
                },

                error: function (xhr, status, error) {
                    const err = eval("(" + xhr.responseText + ")");
                    if (error === "Unauthorized" || err.message === "Unauthenticated.") {
                        // alert("mal")
                        toastr.error("Sin autorización");
                    }
                }
            })
        }
    </script>
@endpush

<x-front-layout>
    @include('frontend.components.banner')/

    @include('frontend.components.map')/

    @include('frontend.components.category')

    @include('frontend.components.feature')

    @include('frontend.components.video')

    @include('frontend.components.deals')

    @include('frontend.components.testimonial')

    @include('frontend.components.chooseus')

    @include('frontend.components.place')

    @include('frontend.components.team')

    @include('frontend.components.cta')

    @include('frontend.components.news')

    @include('frontend.components.download')

</x-front-layout>
