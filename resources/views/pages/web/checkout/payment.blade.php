<x-web-layout title="checkout">
    <!--Start Sub Banner-->
    <div class="sub-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="detail">
                        <h1>order now</h1>
                        <span>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</span>
                        <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li><a class="select">Order Now</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-img"></div>
    </div>
    <div class="wave"></div>

    <!--End Sub Banner-->





    <!--Start Content-->
    <div class="content">

        <!--Start Cash Billing-->


        <div class="cash-payment">
            <div class="container">


                <div class="cash-payment">
                    <div class="container">


                        <!--Start Bread Crumb-->

                        <div class="bread-crumb">
                            <div class="row">
                                <div class="col-md-12">

                                    <div class="bread-crumb-sec">
                                        <a href="shop-cart.html">
                                            <span class="number">1</span>
                                            <div class="clear"></div>
                                            <span class="text">Shop Cart Detail</span>
                                        </a>
                                    </div>

                                    <div class="bread-crumb-sec">
                                        <a href="payment-method.html">
                                            <span class="number">2</span>
                                            <div class="clear"></div>
                                            <span class="text">Customer information</span>
                                        </a>
                                    </div>

                                    <div class="bread-crumb-sec">
                                        <a class="selected">
                                            <span class="number">3</span>
                                            <div class="clear"></div>
                                            <span class="text">Payment Method</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <!--End Bread Crumb-->



                        <!--Start Shipping Address-->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="cash-delivery">
                                    <div class="cash-delivery-detail">
                                        <h5>Payment method</h5>
                                        <p>All transactions are secure and encrypted. Credit card information is never
                                            stored.</p>

                                        <div class="shipping-address payment-method">

                                            <form action="{{ route('web.checkout') }}" method="POST">
                                                @csrf
                                                <div class="shipping-method" id="cod">
                                                    <div class="shipping-across">
                                                        <input type="radio" name="payment" value="cod" checked>
                                                        <span class="across">Cash on Delivery (COD)</span>
                                                    </div>
                                                </div>

                                                <div class="shipping-method" id="dana">
                                                    <div class="shipping-across">
                                                        <input type="radio" name="payment" value="dana">
                                                        <span class="across">Pay with Dana</span>
                                                        <br>
                                                        <span
                                                            class="text-muted fw-normal text-wrap d-block">081260368722</span>
                                                    </div>
                                                </div>

                                                <button class="next-step">Complete order</button>

                                            </form>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--End Shipping Address-->

                    </div>
                </div>

            </div>
        </div>
        <!--End Cash Billing-->

    </div>
    <!--End Content-->
    @section('custom_js')
        <script>
            $(document).ready(function() {});
        </script>
    @endsection
</x-web-layout>
