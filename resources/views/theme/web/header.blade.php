<!--Start Header-->
<div id="header-1">
    <header class="header-two">
        <div class="container">
            <a href="index-2.html">
                <img class="logo2" src="{{ asset('assets-user/images/logo2.png') }}" alt=""></a>
            <a href="index-2.html"><img class="logo-dark" src="{{ asset('assets-user/images/logo-dark.png') }}"
                    alt=""></a>

            <div class="cont-right">

                <nav class="menu-5 nav">
                    <ul class="wtf-menu">
                        <li class="select-item"><a href="{{ route('web.dashboard') }}">Home</a>
                            {{-- <ul class="submenu">
                                <li> <a href="index-2.html" class="select">Home 1</a> </li>
                                <li> <a href="index2.html">Home 2</a> </li>
                            </ul> --}}
                        </li>

                        <li><a href="{{ route('web.food') }}">Menu</a></li>


                        {{-- <li><a href="our-story.html">our story</a></li> --}}


                        <li class="parent"><a href="{{ route('web.penginapan') }}">Hotel</a>

                            {{-- <ul class="submenu">
                                <li><a href="blog.html">blog 1</a></li>
                                <li><a href="blog2.html">blog 2</a></li>
                            </ul> --}}

                        </li>


                        <li><a href="{{ route('web.kritik') }}">contact us</a>
                        </li>

                        <li><a href="{{ route('web.pemandian') }}">Pemandian</a>
                        </li>
                    </ul>
                </nav>

                <ul class="social-icons">
                    <li><a href="#."><i class="icon-facebook-1"></i></a></li>
                    <li><a href="#."><i class="icon-twitter-1"></i></a></li>
                    <li><a href="#."><i class="icon-google"></i></a></li>
                </ul>

                <ul class="shop-bag">
                    <li class="close-bag">
                        <a class="cart-button"><i class="icon-icons163"></i> <span
                                class="num top-cart-number">2</span></a>
                    </li>
                    <li class="open-bag">
                        <div class="top-cart-items"></div>
                        <div class="sub-total">
                            <span>SUBTOTAL: <strong class="top-checkout-price"></strong></span>
                            <div class="buttons">
                                <a href="{{ route('web.cart.index') }}" class="view-cart">view cart</a>
                                <a href="#." class="check-out">Check Out</a>
                            </div>
                        </div>


                    </li>
                </ul>

                <ul class="get-touch">
                    <li class="contact-no"><a><i class="icon-telephone-receiver"></i> <span>+123 55 33
                                444</span></a></li>
                </ul>


            </div>
        </div>

    </header>
</div>

<!--End Header-->
