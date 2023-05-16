<!DOCTYPE html>
<html lang="en" dir="ltr">
@include('theme.app.head')

<body>
    <!-- pre-loader start -->
    <div class="loader-wrapper">
        <img src="{{ asset('assets-admin/images/loader/loader.gif') }}" alt="loader gif">
    </div>
    <!-- pre-loader End -->
    <div class="page-wrapper compact-wrapper modern-type" id="pageWrapper">
        <div class="page-body-wrapper">
            @include('theme.app.header')
            @include('theme.app.aside')
            {{ $slot }}
        </div>
        @include('theme.app.footer')
    </div>
    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>
    @include('theme.app.js')
    @yield('custom_js')
</body>

</html>
