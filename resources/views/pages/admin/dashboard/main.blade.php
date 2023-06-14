<x-app-layout title="Dashboard">
    <h5>Dashboard</h5>
    <div class="row">
        <div class="col-xxl-6 col-md-6">
            <div class="card card-animate">
                <div class="card-body text-center">
                    <div class="d-flex mb-1">
                        <div class="flex-grow-1">
                            <lord-icon src="https://cdn.lordicon.com/dxjqoygy.json" trigger="loop"
                                style="width:60px;height:60px">
                            </lord-icon>
                        </div>

                    </div>
                    <h3 class="mb-2"><span class="counter-value" data-target="">{{ $total_user }}</span><small
                            class="text-muted fs-13"></small></h3>
                    <h6 class="text-muted mb-0">Total User </h6>
                </div>
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <div class="col-xxl-6 col-md-6">
            <div class="card card-animate">
                <div class="card-body text-center">
                    <div class="d-flex mb-1">
                        <div class="flex-grow-1">
                            <lord-icon src="https://cdn.lordicon.com/nocovwne.json" trigger="loop"
                                style="width:60px;height:60px">
                            </lord-icon>
                        </div>

                    </div>
                    <h3 class="mb-2"><span class="counter-value" data-target="">{{ $total_order }}</span><small
                            class="text-muted fs-13"></small></h3>
                    <h6 class="text-muted mb-0">Total Order (Pending)</h6>
                </div>
            </div>
            <!--end card-->
        </div>
        <!--end col-->

        <!--end col-->
        <div class="col-xxl-6 col-md-6">
            <div class="card card-animate">
                <div class="card-body text-center">
                    <div class="d-flex mb-1">
                        <div class="flex-grow-1">
                            <lord-icon src="https://cdn.lordicon.com/nocovwne.json" trigger="loop"
                                style="width:60px;height:60px">
                            </lord-icon>
                        </div>

                    </div>
                    <h3 class="mb-2"><span class="counter-value" data-target="">{{ $total_bookings }}</span><small
                            class="text-muted fs-13"></small></h3>
                    <h6 class="text-muted mb-0">Total Booking (Pending)</h6>
                </div>
            </div>
            <!--end card-->
        </div>
        <!--end col-->
        <!--end col-->
        <div class="col-xxl-6 col-md-6">
            <div class="card card-animate">
                <div class="card-body text-center">
                    <div class="d-flex mb-1">
                        <div class="flex-grow-1">
                            <lord-icon src="https://cdn.lordicon.com/nocovwne.json" trigger="loop"
                                style="width:60px;height:60px">
                            </lord-icon>
                        </div>

                    </div>
                    <h3 class="mb-2"><span class="counter-value" data-target="">{{ $total_reservations }}</span><small
                            class="text-muted fs-13"></small></h3>
                    <h6 class="text-muted mb-0">Total Pemesanan (Pending)</h6>
                </div>
            </div>
            <!--end card-->
        </div>

        {{-- <div class="row">
            <div class="col-xl-12 col-md-6">
                <div class="card">
                    <div class="card-header align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">KaruniaSipoholon</h4>
                        <div class="flex-shrink-0">
                            <div class="dropdown card-header-dropdown">
                                <a class="text-reset dropdown-btn" href="#" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <span class="fw-semibold text-uppercase fs-12">Sort by: </span><span
                                        class="text-muted">Nov 2021<i class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a class="dropdown-item" href="#">Oct 2021</a>
                                    <a class="dropdown-item" href="#">Nov 2021</a>
                                    <a class="dropdown-item" href="#">Dec 2021</a>
                                    <a class="dropdown-item" href="#">Jan 2022</a>
                                </div>
                            </div>
                        </div>
                    </div><!-- end card header -->
                    <div class="card-body pb-0">
                        <div id="sales-forecast-chart" data-colors='["--vz-primary", "--vz-info", "--vz-warning"]'
                            class="apex-charts" dir="ltr"></div>
                    </div>
                </div><!-- end card -->
            </div><!-- end col -->

        </div><!-- end row --> --}}

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-0 align-items-center d-flex">
                        <h4 class="card-title mb-0 flex-grow-1">KaruniaSipoholon</h4>
                        <div>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                ALL
                            </button>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                1M
                            </button>
                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                6M
                            </button>
                            <button type="button" class="btn btn-soft-primary btn-sm">
                                1Y
                            </button>
                        </div>
                    </div><!-- end card header -->

                    <div class="card-header p-0 border-0 bg-soft-light">
                        <div class="row g-0 text-center">
                            <div class="col-6 col-sm-3">
                                <div class="p-3 border border-dashed border-start-0">
                                    <h5 class="mb-1"><span class="counter-value"
                                            data-target="9851">{{ $total_order }}</span></h5>
                                    <p class="text-muted mb-0">Order</p>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-6 col-sm-3">
                                <div class="p-3 border border-dashed border-start-0">
<<<<<<< HEAD
                                    <h5 class="mb-1"><span class="counter-value"
                                            data-target="1026">{{ $total_reservations }}</span></h5>
=======
                                    <h5 class="mb-1"><span class="counter-value" data-target="1026">0</span></h5>
>>>>>>> 955b0efd52524aec77190dc6219047f82b423eb5
                                    <p class="text-muted mb-0">Hotel</p>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-6 col-sm-3">
                                <div class="p-3 border border-dashed border-start-0">
                                    <h5 class="mb-1">Rp.<span class="counter-value"
<<<<<<< HEAD
                                            data-target="228.89">{{ $yeartotal + $yearreservation }}</span></h5>
=======
                                            data-target="228.89">{{ $yeartotal }}</span></h5>
>>>>>>> 955b0efd52524aec77190dc6219047f82b423eb5
                                    <p class="text-muted mb-0">Revenue</p>
                                </div>
                            </div>
                            <!--end col-->
                            <div class="col-6 col-sm-3">
                                <div class="p-3 border border-dashed border-start-0 border-end-0">
                                    <h5 class="mb-1 text-success"><span class="counter-value"
                                            data-target="10589"></span>Rp.</h5>
                                    <p class="text-muted mb-0"></p>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                    </div><!-- end card header -->
                    <div class="card-body p-0 pb-2">
                        <div>
                            <div id="mychart"></div>
                        </div>
                    </div><!-- end card body -->
                </div><!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->

        <!--end row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="card" id="invoiceList">
                    <div class="card-header border-0">
                        <div class="card-body">
                            <div>
                                <div class="table-responsive text-center container">
                                    <lord-icon src="https://cdn.lordicon.com/eszyyflr.json" trigger="loop"
                                        style="width:130px;height:130px">
                                    </lord-icon>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <h2 class="mb-0 flex-grow-1 text-center">Welcome Back {{ Auth::user()->fullname }}!</h2>
                        </div><br>
                        <div class="d-flex align-items-center justify-content-center pb-5">
                            <h4 class="mb-0 flex-grow-1 text-center">KaruniaSipoholon</h4>
                        </div>
                    </div>

                </div>

            </div>
            <!--end col-->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script>
            Highcharts.chart('mychart', {
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Monthly Average '
                },
                subtitle: {
                    text: 'Karunia Sipoholon'
                },
                xAxis: {
                    categories: [
                        'Jan',
                        'Feb',
                        'Mar',
                        'Apr',
                        'May',
                        'Jun',
                        'Jul',
                        'Aug',
                        'Sep',
                        'Oct',
                        'Nov',
                        'Dec'
                    ],
                    crosshair: true
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Rainfall (mm)'
                    }
                },
                tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                        '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                series: [{
                    name: 'Order',
<<<<<<< HEAD
                    data: [{{ $januarySum }}, {{ $februarySum }}, {{ $marchSum }}, {{ $aprSum }},
                        {{ $maySum }}, {{ $juneSum }}, {{ $julySum }},
                        {{ $augustSum }}, {{ $sepSum }},
                        {{ $octSum }}, {{ $novSum }}, {{ $decSum }}
=======
                    data: [{{ $januarySum }}, {{ $februarySum }}, {{ $marchSum }}, {{ $aprilSum }},
                        {{ $maySum }}, {{ $juneSum }}, {{ $julySum }},
                        {{ $augustSum }}, {{ $septemberSum }},
                        {{ $octoberSum }}, {{ $novemberSum }}, {{ $decemberSum }}
>>>>>>> 955b0efd52524aec77190dc6219047f82b423eb5
                    ]

                }, {
                    name: 'Hotel',
<<<<<<< HEAD
                    data: [{{ $januariSum }}, {{ $februariSum }}, {{ $maretSum }},
                        {{ $aprilSum }},
                        {{ $meiSum }}, {{ $juniSum }}, {{ $juliSum }},
                        {{ $agustusSum }}, {{ $septemberSum }},
                        {{ $oktoberSum }}, {{ $novemberSum }}, {{ $desemberSum }}
=======
                    data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5,
                        106.6, 92.3
>>>>>>> 955b0efd52524aec77190dc6219047f82b423eb5
                    ]
                }]
            });
        </script>

</x-app-layout>
