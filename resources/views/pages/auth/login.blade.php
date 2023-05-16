<x-auth-layout title="Login">
     <!-- login page start-->
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-12 p-0">
                <div class="login-card">
                    <div>
                        <div>
                            <a class="logo" href="index-2.html"><img class="img-fluid for-light"
                                    src="{{ asset('assets-admin/images/logo/logo-icon.png') }}" alt="looginpage"><img
                                    class="img-fluid for-dark" src="{{ asset('assets-admin/images/logo/logo-white.png') }}"
                                    alt="looginpage"></a></div>
                        <div class="login-main">
                            <form class="theme-form" id="form_login">
                                <h4><center>KARUNIA SIPOHOLON</center></h4>
                                <br>
                                {{-- <p>Enter your email & password to login</p> --}}
                                <div class="form-group">
                                    <label class="col-form-label form-label-title ">Email Address</label>
                                    <input class="form-control" type="text" name="email" placeholder="Masukkan Email Anda">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label form-label-title ">Password</label>
                                    <div class="form-input position-relative">
                                        <input class="form-control" type="password" name="password"
                                            placeholder="*********">
                                        {{-- <div class="show-hide"><span class="show"> </span></div> --}}
                                    </div>
                                    
                                </div>
                                <div class="form-group mb-0">
                                    <div class="text-end mt-3">
                                        <button type="submit" id="tombol_login"
                                        onclick="handle_post('#tombol_login','#form_login','{{ route('auth.login') }}','POST');"  class="btn btn-primary btn-block w-100">Sign in</button>
                                    </div>
                                </div>

                                <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2"
                                        href="{{ route('auth.register') }}">Create Account</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-auth-layout>