@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
@endpush
@push('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAX9rEY00ajicFc0JZbwK4i-3HOQMBV78"></script>
    <script src="{{ asset('front/assets/js/gmaps.js') }}"></script>
    <script src="{{ asset('front/assets/js/map-helper.js') }}"></script>
    <script src="{{ asset('js/share.js') }}"></script>
    <script src="{{ asset('js/ajax.js') }}"></script>

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
