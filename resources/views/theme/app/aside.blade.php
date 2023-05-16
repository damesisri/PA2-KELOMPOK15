<!-- Page Sidebar Start-->
<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper">
            <span class="back">Back</span>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid">
                </i></div>
        </div>
        <div class="logo-icon-wrapper"><a href="index-2.html"><img class="img-fluid"
                    src="../assets/images/logo/logo-icon.png" alt=""></a></div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn"><a href="index-2.html"><img class="img-fluid"
                                src="../assets/images/logo/logo-icon.png" alt=""></a>
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    @php
                        $role = '';
                        $dashboard = '';
                        if (Auth::User()->role == 'operator') {
                            $dashboard = route('operator.dashboard');
                        } else {
                            $dashboard = route('admin.dashboard');
                        }
                    @endphp
                    <li class="sidebar-list">
                        <a class="sidebar-link sidebar-title link-nav" href="{{ $dashboard }}"><i
                                data-feather="home">
                            </i><span>Dashboard</span></a>
                    </li>
                    @can('Admin')
                        {{-- <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="#"><i data-feather="users">
                                </i><span>Users </span></a>
                        </li> --}}
                        <li class="sidebar-list"> <a class="linear-icon-link sidebar-link sidebar-title link-nav"
                                href="{{ route('admin.hotel.index') }}"><i data-feather="briefcase">
                                </i><span>Hotel</span></a>
                        </li>
                        <li class="sidebar-list"><a class="linear-icon-link sidebar-link sidebar-title link-nav"
                                href="{{ route('admin.food.index') }}"><i data-feather="coffee">
                                </i><span>Restaurant </span></a>
                        </li>
                        <li class="sidebar-list"><a class="linear-icon-link sidebar-link sidebar-title link-nav"
                                href="{{ route('admin.toilet.index') }}"><i data-feather="coffee">
                                </i><span>Pemandian </span></a>
                        </li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                href="{{ route('admin.transaksi.index') }}"><i data-feather="map">
                                </i><span>Transaksi</span></a>
                        </li>
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                href="{{ route('admin.kritik') }}"><i data-feather="message-square">
                                </i><span>Kritik & Saran</span></a>
                        </li>
                    @elsecan('Operator')
                        {{-- <li class="sidebar-list">
                            <a class="sidebar-link sidebar-title link-nav" href="#"><i data-feather="users">
                                </i><span>Users </span></a>
                        </li> --}}
                        <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav"
                                href="{{ route('operator.booking.index') }}"><i data-feather="map">
                                </i><span>Booking</span></a>
                        </li>
                        <li class="sidebar-list"> <a class="linear-icon-link sidebar-link sidebar-title link-nav"
                                href="{{ route('operator.hotel.index') }}"><i data-feather="briefcase">
                                </i><span>Hotel</span></a>
                        </li>
                        <li class="sidebar-list"><a class="linear-icon-link sidebar-link sidebar-title link-nav"
                                href="{{ route('operator.food.index') }}"><i data-feather="coffee">
                                </i><span>Restaurant </span></a>
                        </li>
                        {{-- <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="#"><i
                                    data-feather="navigation">
                                </i><span>Cab</span></a>
                        </li> --}}
                    @endcan
                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
<!-- Page Sidebar Ends-->
