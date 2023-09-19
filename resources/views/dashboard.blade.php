@push('styles')

@endpush
@push('script')
    <script src="{{ asset('backend/assets/plugins/chartjs/js/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/chartjs/js/Chart.extension.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
{{--    <script src="{{ asset('backend/assets/js/index.js') }}"></script>--}}
{{--    <script src="{{ asset('front/assets/js/index2.js') }}"></script>--}}
    <script>
        $(function() {
            "use strict";

            // chart 2

            var options1 = {
                chart: {
                    type: 'line',
                    height: 440,
                    sparkline: {
                        enabled: false
                    }
                },
                dataLabels: {
                    enabled: true
                },
                fill: {
                    type: 'gradient',
                    gradient: {
                        shade: 'light',
                        gradientToColors: [ '#0c475e'],
                        shadeIntensity: 1,
                        type: 'vertical',
                        opacityFrom: 1,
                        opacityTo: 1,
                        stops: [0, 100, 100, 100]
                    },
                },
                colors: ["#0c475e"],
                series: [{
                    name: 'Propiedades',
                    data: [{{ "25,10,10" }}]
                }],
                xaxis: {
                    categories: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                },
                plotOptions: {
                    bar: {
                        columnWidth: '20%',
                        //endingShape: 'rounded',
                        dataLabels: {
                            position: 'top', // top, center, bottom
                        },
                    }
                },
                grid:{
                    show: true,
                    borderColor: 'rgba(66, 59, 116, 0.15)',
                },
                stroke: {
                    width: 3.5,
                    curve: 'smooth',
                    dashArray: [0]
                },
                tooltip: {
                    theme: 'dark',
                    x: {
                        show: false
                    },

                }
            }

            new ApexCharts(document.querySelector("#chart1"), options1).render();
        });
    </script>
@endpush

<x-app-layout>
    <!--start content-->
    <main class="page-content">
        <div class="card rounded-4">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <h6 class="mb-0">Altas propiedades activas</h6>
                    <div class="fs-5 ms-auto dropdown">
                        <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></div>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
                <div id="chart1"></div>
            </div>
        </div>
    </main>
    <!--end page main-->
</x-app-layout>
