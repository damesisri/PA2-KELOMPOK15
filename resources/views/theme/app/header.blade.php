<!-- Page Header Start-->
<div class="page-header">
    <div class="header-wrapper row m-0">
        <div class="header-logo-wrapper col-auto p-0">
            <div class="logo-wrapper"><a href="index-2.html"><img class="img-fluid main-logo"
                        src="{{ asset('assets-admin/images/logo/logo.png') }}" alt="logo">
                    <img class="img-fluid white-logo" src="{{ asset('assets-admin/images/logo/logo-white.png') }}"
                        alt="logo"></a>
            </div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i>
            </div>
        </div>

        {{-- <form class="form-inline search-full col " action="#" method="get">
            <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                    <div class="u-posRelative">
                        <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text"
                            placeholder="Search Rica .." name="q" title="" autofocus>
                        <i class="close-search" data-feather="x"></i>
                        <div class="spinner-border Typeahead-spinner" role="status"><span
                                class="sr-only">Loading...</span>
                        </div>
                    </div>
                    <div class="Typeahead-menu"></div>
                </div>
            </div>
        </form> --}}
        <div class="nav-right col-4 pull-right right-header p-0">
            <ul class="nav-menus">

                <li> <span class="header-search"><i data-feather="search"></i></span></li>
                {{-- <li class="onhover-dropdown">
                    <div class="notification-box"><i class="fa fa-bell-o"> </i><span
                            class="badge rounded-pill badge-theme">4 </span></div>
                    <ul class="notification-dropdown onhover-show-div">
                        <li><i data-feather="bell"></i>
                            <h6 class="f-18 mb-0">Notitications</h6>
                        </li>
                        <li>
                            <p><i class="fa fa-circle-o me-3 font-primary"> </i>Delivery processing <span
                                    class="pull-right">10
                                    min.</span></p>
                        </li>
                        <li>
                            <p><i class="fa fa-circle-o me-3 font-success"></i>Order Complete<span
                                    class="pull-right">1 hr</span>
                            </p>
                        </li>
                        <li>
                            <p><i class="fa fa-circle-o me-3 font-info"></i>Tickets Generated<span
                                    class="pull-right">3 hr</span>
                            </p>
                        </li>
                        <li>
                            <p><i class="fa fa-circle-o me-3 font-danger"></i>Delivery Complete<span
                                    class="pull-right">6
                                    hr</span></p>
                        </li>
                        <li><a class="btn btn-primary" href="#">Check all notification</a></li>
                    </ul>
                </li> --}}

                <li>
                    <div class="mode"><i class="fa fa-moon-o" aria-hidden="true"></i>
                    </div>
                </li>

                {{-- <li class="onhover-dropdown"><i data-feather="message-square"></i>
                    <ul class="chat-dropdown onhover-show-div">
                        <li><i data-feather="message-square"></i>
                            <h6 class="f-18 mb-0">Message Box </h6>
                        </li>
                        <li>
                            <div class="media"><img class="img-fluid rounded-circle me-3"
                                    src="../assets/images/user/1.jpg" alt="user1">
                                <div class="status-circle online"></div>
                                <div class="media-body"><span>Erica Hughes</span>
                                    <p>Lorem Ipsum is simply dummy...</p>
                                </div>
                                <p class="f-12 font-success">58 mins ago</p>
                            </div>
                        </li>
                        <li>
                            <div class="media"><img class="img-fluid rounded-circle me-3"
                                    src="../assets/images/user/2.jpg" alt="user2">
                                <div class="status-circle online"></div>
                                <div class="media-body"><span>Kori Thomas</span>
                                    <p>Lorem Ipsum is simply dummy...</p>
                                </div>
                                <p class="f-12 font-success">1 hr ago</p>
                            </div>
                        </li>
                        <li>
                            <div class="media"><img class="img-fluid rounded-circle me-3"
                                    src="../assets/images/user/4.jpg" alt="user3">
                                <div class="status-circle offline"></div>
                                <div class="media-body"><span>Ain Chavez</span>
                                    <p>Lorem Ipsum is simply dummy...</p>
                                </div>
                                <p class="f-12 font-danger">32 mins ago</p>
                            </div>
                        </li>
                        <li class="text-center"> <a class="btn btn-primary" href="#">View All </a></li>
                    </ul>
                </li> --}}
                {{-- <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i
                            data-feather="maximize"></i></a></li> --}}
                <li class="profile-nav onhover-dropdown pe-0 me-0">
                    <div class="media profile-media">
                        <img class="user-profile rounded-circle" src="{{ asset('assets-admin/images/users/4.jpg') }}"
                            alt="profile-picture">
                        <div class="user-name-hide media-body"><span>Juan Munthe</span>
                            <p class="mb-0 font-roboto">{{ Auth::User()->name }}<i class="middle fa fa-angle-down"></i>
                            </p>
                        </div>
                    </div>
                    <ul class="profile-dropdown onhover-show-div">
                        {{-- <li><a href="#"><i data-feather="user"></i><span>Account </span></a></li>
                        <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>
                        <li><a href="#"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                        <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li> --}}
                        @auth
                            @if (Auth::user()->role == 'admin')
                                <li><a href="{{ route('admin.logout') }}"><i data-feather="log-out">
                                        </i><span>Logout</span></a></li>
                            @elseif (Auth::user()->role == 'operator')
                                <li><a href="{{ route('operator.logout') }}"><i data-feather="log-out">
                                        </i><span>Logout</span></a></li>
                            @else
                                <li><a href="{{ route('web.logout') }}"><i data-feather="log-out">
                                        </i><span>Logout</span></a>
                                </li>
                            @endif
                        @endauth
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Page Header Ends -->
