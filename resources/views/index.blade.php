@push('styles')

@endpush
@push('script')
{{--        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA-CE0deH3Jhj6GN4YvdCFZS7DpbXexzGU"></script>--}}
{{--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC6kKHzLM8W1Lq6tf1HxSPPH_9BgWIqv1A"></script>--}}
{{--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC-v0sWsKDOuhgxrBSaGUrIBBQyVVklmU"></script>--}}
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAX9rEY00ajicFc0JZbwK4i-3HOQMBV78"></script>
    <script src="{{ asset('front/assets/js/gmaps.js') }}"></script>
    <script src="{{ asset('front/assets/js/map-helper.js') }}"></script>
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
