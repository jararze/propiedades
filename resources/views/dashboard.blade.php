@push('styles')
    <link href="{{ asset('front/assets/css/flaticon.css') }}" rel="stylesheet">
@endpush
@push('script')
    <script src="{{ asset('backend/assets/plugins/chartjs/js/Chart.min.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/chartjs/js/Chart.extension.js') }}"></script>
    <script src="{{ asset('backend/assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
    <script>
        $(function () {
            "use strict";


            // chart 2

            var options1 = {
                chart: {
                    type: 'line',
                    height: 340,
                    sparkline: {
                        enabled: false
                    }
                },
                dataLabels: {
                    enabled: false
                },
                fill: {
                    type: 'gradient',
                    gradient: {
                        shade: 'light',
                        gradientToColors: ['#8f50ff'],
                        shadeIntensity: 1,
                        type: 'vertical',
                        opacityFrom: 1,
                        opacityTo: 1,
                        stops: [0, 100, 100, 100]
                    },
                },
                colors: ["#8932ff"],
                series: [{
                    name: 'Propiedades',
                    @php
                        $bymonth = "";
                        foreach ($propertiesByMonth as $p){
                            $bymonth .= $p . ",";
                        }
                        $bymonth = substr($bymonth, 0, -1);
                    @endphp
                    data: [{{ $bymonth }}]
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
                grid: {
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


            // chart 2

            var options1 = {
                chart: {
                    type: 'area',
                    height: 50,
                    sparkline: {
                        enabled: true
                    }
                },
                dataLabels: {
                    enabled: false
                },
                fill: {
                    type: 'gradient',
                    gradient: {
                        shade: 'light',
                        gradientToColors: ['#8f50ff'],
                        shadeIntensity: 1,
                        type: 'vertical',
                        opacityFrom: 0.8,
                        opacityTo: 0.4,
                        stops: [0, 100, 100, 100]
                    },
                },
                colors: ["#d80898"],
                series: [{
                    name: 'Propiedades',
                    @php
                        $properties = "";
                        foreach ($values as $value){
                            $properties .= $value->Count . ",";
                        }
                        $properties = substr($properties, 0, -1);
                    @endphp
                    data: [{{ $properties }}]
                }],
                stroke: {
                    width: 2.5,
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

            new ApexCharts(document.querySelector("#chart2"), options1).render();


            // chart 3

            var options1 = {
                chart: {
                    type: 'area',
                    height: 50,
                    sparkline: {
                        enabled: true
                    }
                },
                dataLabels: {
                    enabled: false
                },
                fill: {
                    type: 'gradient',
                    gradient: {
                        shade: 'light',
                        //gradientToColors: [ '#8f50ff'],
                        shadeIntensity: 1,
                        type: 'vertical',
                        opacityFrom: 0.8,
                        opacityTo: 0.4,
                        stops: [0, 100, 100, 100]
                    },
                },
                colors: ["#02cc89"],
                series: [{
                    name: 'Visits',
                    data: [12, 14, 2, 47, 32, 44, 14, 55, 41, 69]
                }],
                stroke: {
                    width: 2.5,
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

            new ApexCharts(document.querySelector("#chart3"), options1).render();


            // chart 4

            var options1 = {
                chart: {
                    type: 'area',
                    height: 50,
                    sparkline: {
                        enabled: true
                    }
                },
                dataLabels: {
                    enabled: false
                },
                fill: {
                    type: 'gradient',
                    gradient: {
                        shade: 'light',
                        gradientToColors: ['#8f50ff'],
                        shadeIntensity: 1,
                        type: 'vertical',
                        opacityFrom: 0.8,
                        opacityTo: 0.4,
                        stops: [0, 100, 100, 100]
                    },
                },
                colors: ["#1b56d6"],
                series: [{
                    name: 'Vendidas',
                    @php
                        $TotalpropertiesSold = "";
                        foreach ($diezTopVendidas as $val){
                            $TotalpropertiesSold .= $val->Count . ",";
                        }
                        $TotalpropertiesSold = substr($TotalpropertiesSold, 0, -1);
                    @endphp
                    data: [{{ $TotalpropertiesSold }}]
                }],
                stroke: {
                    width: 2.5,
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

            new ApexCharts(document.querySelector("#chart4"), options1).render();


            // chart 5

            var options1 = {
                chart: {
                    type: 'area',
                    height: 50,
                    sparkline: {
                        enabled: true
                    }
                },
                dataLabels: {
                    enabled: false
                },
                fill: {
                    type: 'gradient',
                    gradient: {
                        shade: 'light',
                        gradientToColors: ['#8f50ff'],
                        shadeIntensity: 1,
                        type: 'vertical',
                        opacityFrom: 0.8,
                        opacityTo: 0.4,
                        stops: [0, 100, 100, 100]
                    },
                },
                colors: ["#f1b307"],
                series: [{
                    name: 'Usuarios',
                    @php
                        $userss = "";
                        foreach ($diezUsuarios as $v){
                            $userss .= $v->Count . ",";
                        }
                        $userss = substr($userss, 0, -1);
                    @endphp
                    data: [{{ $userss }}]
                }],
                stroke: {
                    width: 2.5,
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

            new ApexCharts(document.querySelector("#chart5"), options1).render();


            // chart 6

            var options = {
                chart: {
                    height: 290,
                    type: 'radialBar',
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {
                    radialBar: {
                        // startAngle: -135,
                        // endAngle: 225,
                        hollow: {
                            margin: 0,
                            size: '85%',
                            background: 'transparent',
                            image: undefined,
                            imageOffsetX: 0,
                            imageOffsetY: 0,
                            position: 'front',
                            dropShadow: {
                                enabled: true,
                                top: 3,
                                left: 0,
                                blur: 4,
                                color: 'rgba(209, 58, 223, 0.65)',
                                opacity: 0.12
                            }
                        },
                        track: {
                            background: '#fff',
                            strokeWidth: '30%',
                            margin: 0, // margin is in pixels
                            dropShadow: {
                                enabled: true,
                                top: -3,
                                left: 0,
                                blur: 4,
                                //color: 'rgba(209, 58, 223, 0.65)',
                                opacity: 0.12
                            }
                        },
                        dataLabels: {
                            showOn: 'always',
                            name: {
                                offsetY: -20,
                                show: true,
                                color: '#3e3d3d',
                                fontSize: '15px'
                            },
                            value: {
                                formatter: function (val) {
                                    return val + "%";
                                },
                                color: '#3e3d3d',
                                fontSize: '40px',
                                show: true,
                                offsetY: 10,
                            }
                        }
                    }
                },
                colors: ["#09aaef"],
                series: [{{ $divisionResult }}],
                stroke: {
                    //lineCap: 'round',
                    dashArray: 4
                },
                labels: ['Objetivo de ventas'],

            }

            var chart = new ApexCharts(
                document.querySelector("#chart6"),
                options
            );

            chart.render();


            // chart 7

            var options = {
                chart: {
                    height: 300,
                    type: 'bar',
                    zoom: {
                        enabled: false
                    },
                    foreColor: '#4e4e4e',
                    toolbar: {
                        show: false
                    },
                    sparkline: {
                        enabled: false,
                    },
                    dropShadow: {
                        enabled: false,
                        opacity: 0.15,
                        blur: 3,
                        left: -7,
                        top: 15,
                        //color: 'rgba(0, 158, 253, 0.65)',
                    }
                },
                plotOptions: {
                    bar: {
                        columnWidth: '50%',
                        endingShape: 'rounded',
                        dataLabels: {
                            position: 'top', // top, center, bottom
                        },
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    width: 2,
                    curve: 'smooth'
                },
                series: [{
                    name: 'Proyectos',
                    @php
                        $projects = "";
                        foreach ($proyectos as $pr){
                            $projects .= $pr . ",";
                        }
                        $projects = substr($projects, 0, -1);
                    @endphp
                    data: [{{ $projects }}]
                }],

                xaxis: {
                    type: 'month',
                    categories: ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12"],
                },
                yaxis: {
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false,
                    },
                    labels: {
                        show: false,
                        formatter: function (val) {
                            return parseInt(val);
                        }
                    }

                },
                fill: {
                    type: 'gradient',
                    gradient: {
                        shade: 'light',
                        //gradientToColors: ['#ee0979'],
                        shadeIntensity: 1,
                        type: 'vertical',
                        opacityFrom: 0.7,
                        opacityTo: 0.2,
                        stops: [0, 100, 100, 100]
                    },
                },
                colors: ['#ff3838'],
                grid: {
                    show: true,
                    borderColor: 'rgba(66, 59, 116, 0.15)',
                },
                tooltip: {
                    theme: 'dark',
                    x: {
                        show: false
                    },

                }
            }

            var chart = new ApexCharts(
                document.querySelector("#chart7"),
                options
            );

            chart.render();


            //chart 8

            var options = {
                @php
                    $cities = "";
                    foreach ($xcity as $cityy){
                        $cities .= $cityy->count . ",";
                    }
                    $cities = substr($cities, 0, -1);
                @endphp
                series: [{{ $cities }}],
                chart: {
                    height: 330,
                    type: 'pie',
                },
                labels: [{!! $city !!}],
                legend: {
                    position: 'bottom'
                },
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }]
            };

            var chart = new ApexCharts(document.querySelector("#chart8"), options);
            chart.render();

        });
    </script>
@endpush

<x-app-layout>
    <!--start content-->
    <main class="page-content">

        <div class="row row-cols-1 row-cols-lg-4">
            <div class="col">
                <div class="card rounded-4 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="">
                                <h5 class="mb-0">{{ $totalProperties }}</h5>
                                <p class="mb-0">Propiedades</p>
                            </div>
                            <div class="fs-4">
                                <i class="bi bi-basket3"></i>
                            </div>
                        </div>
                        <div id="chart2"></div>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="card rounded-4 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="">
                                <h5 class="mb-0">{{ $totalVendidas }}</h5>
                                <p class="mb-0">Visitas</p>
                            </div>
                            <div class="fs-4">
                                <i class="bi bi-lightbulb"></i>
                            </div>
                        </div>
                        <div id="chart3"></div>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="card rounded-4 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="">
                                <h5 class="mb-0">{{ $totalVendidas }}</h5>
                                <p class="mb-0">Vendidas</p>
                            </div>
                            <div class="fs-4">
                                <i class="bi bi-currency-dollar"></i>
                            </div>
                        </div>
                        <div id="chart4"></div>
                    </div>

                </div>
            </div>
            <div class="col">
                <div class="card rounded-4 overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="">
                                <h5 class="mb-0">{{ $totalUsers }}</h5>
                                <p class="mb-0">Usuarios</p>
                            </div>
                            <div class="fs-4">
                                <i class="bi bi-cup-hot"></i>
                            </div>
                        </div>
                        <div id="chart5"></div>
                    </div>

                </div>
            </div>

        </div><!--end row-->


        <div class="card rounded-4">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <h6 class="mb-0">Altas propiedades activas</h6>
                </div>
                <div id="chart1"></div>
            </div>
        </div>


        <div class="row row-cols-1 row-cols-lg-3">
            <div class="col d-flex">
                <div class="card rounded-4 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <h6 class="mb-0">Objetivo de ventas</h6>
                        </div>
                        <div id="chart6"></div>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card rounded-4 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <h6 class="mb-0">Total Proyectos</h6>
                        </div>
                        <div id="chart7"></div>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card rounded-4 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <h6 class="mb-0">Por ciudad</h6>

                        </div>
                        <div id="chart8"></div>
                    </div>
                </div>
            </div>

        </div><!--end row-->


        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col d-flex">
                <div class="card rounded-4 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <h6 class="mb-0">Por tipo - Activos</h6>
                        </div>
                        <div class="social-leads">

                            @foreach($typeProperties as $type)

                                <div class="d-flex align-items-center gap-3">
                                    <div class="widget-icon bg-twitter text-white">
                                        <i class="{{ $type-> type_icon}}"></i>
                                    </div>
                                    <div class="fs-5 flex-grow-1"><p class="mb-0">{{ $type-> type_name}}</p></div>
                                    <div class="leads-count">
                                        <p class="mb-0">{{ $type->count }}</p>
                                    </div>
                                </div>
                                <hr>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card rounded-4 w-100">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <h6 class="mb-0">¿Para?</h6>
                        </div>
                        <div class="social-leads">

                            @foreach($type_status as $stat)

                                <div class="d-flex align-items-center gap-3">
                                    <div class="fs-5 flex-grow-1"><p class="mb-0">{{ $stat->property_status}}</p></div>
                                    <div class="leads-count">
                                        <p class="mb-0">{{ $stat->count }}</p>
                                    </div>
                                </div>
                                <hr>
                            @endforeach


                        </div>
                    </div>
                </div>
            </div>

        </div><!--end row-->


    </main>
    <!--end page main-->
</x-app-layout>
