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
                    <h3 class="mb-2"><span class="counter-value" data-target=""></span><small
                            class="text-muted fs-13"></small></h3>
                    <h6 class="text-muted mb-0">Total Pemesanan (Pending)</h6>
                </div>
            </div>
            <!--end card-->
        </div>
        {{-- <div class="row project-wrapper">
            <div class="col-xl-12">

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-header border-0 align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">Projects Overview</h4>
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
                                            <h5 class="mb-1"><span class="counter-value" data-target="9851">0</span>
                                            </h5>
                                            <p class="text-muted mb-0">Number of Projects</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-6 col-sm-3">
                                        <div class="p-3 border border-dashed border-start-0">
                                            <h5 class="mb-1"><span class="counter-value" data-target="1026">0</span>
                                            </h5>
                                            <p class="text-muted mb-0">Active Projects</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-6 col-sm-3">
                                        <div class="p-3 border border-dashed border-start-0">
                                            <h5 class="mb-1">$<span class="counter-value"
                                                    data-target="228.89">0</span>k</h5>
                                            <p class="text-muted mb-0">Revenue</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-6 col-sm-3">
                                        <div class="p-3 border border-dashed border-start-0 border-end-0">
                                            <h5 class="mb-1 text-success"><span class="counter-value"
                                                    data-target="10589">0</span>h</h5>
                                            <p class="text-muted mb-0">Working Hours</p>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                            </div><!-- end card header -->
                            <div class="card-body p-0 pb-2">
                                <div>
                                    <div id="projects-overview-chart"
                                        data-colors='["--vz-primary", "--vz-info", "--vz-warning"]' class="apex-charts"
                                        dir="ltr"></div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end col -->

        </div><!-- end row --> --}}


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
</x-app-layout>
