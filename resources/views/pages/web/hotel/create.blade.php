<x-web-layout title="data">
    <!--Start Sub Banner-->
    <div class="sub-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="detail">
                        <h1>Room Detail</h1>
                        <span>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</span>
                        <ul>
                            <li><a href="index-hotel.html">Home</a></li>
                            <li><a href="accommodation.html">Rooms</a></li>
                            <li><a class="select">Room Detail</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-img"></div>
    </div>


    <!--End Sub Banner-->



    <!--Start Content-->
    <div class="content">

        <!--Start Rooms-->
        <div class="booking-steps">
            <div class="container">


                <!--Start Bread Crumb-->

                <div class="bread-crumb">
                    <div class="row">
                        <div class="col-md-12">



                            <div class="bread-crumb-sec">
                                <a class="selected">
                                    <span class="number">1</span>
                                    <div class="clear"></div>
                                    <span class="text">Your Room</span>
                                </a>
                            </div>

                            <div class="bread-crumb-sec">
                                <a>
                                    <span class="number">2</span>
                                    <div class="clear"></div>
                                    <span class="text">Place Your Reservation</span>
                                </a>
                            </div>

                            <div class="bread-crumb-sec">
                                <a>
                                    <span class="number">3</span>
                                    <div class="clear"></div>
                                    <span class="text">Confirmation</span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>

                <!--End Bread Crumb-->



                <!--Start Select Room-->

                <div class="detail-sections">
                    <div class="row">

                        <div class="col-md-4">

                            <div class="reservation">
                                <span class="title">Your Reservation</span>
                                <p>Semper dolor vitae accumsan. interdum hendrerit lacinia.</p>

                                <ul>
                                    <li><span><strong>Check In:</strong> 29/08/2016</span></li>
                                    <li><span><strong>Check Out:</strong> 28/09/2016</span></li>
                                    <li><span><strong>Guests:</strong>2 Adult, 1 Child</span></li>
                                    <li><span><strong>Rooms:</strong>1 Room</span></li>
                                </ul>

                                <a href="room-detail.html">Edit reservation</a>

                            </div>

                        </div>


                        <div class="col-md-8">

                            <div class="your-room">
                                <h4>The Room that you Selected:</h4>

                                <div class="detail">
                                    <img src="{{ asset('assets-user/imgs/room-detail-img1.jpg') }}" alt="">

                                    <div class="text">
                                        <h6>Room with one bedroom</h6>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris. Duis aute irure dolor in
                                            reprehenderit in voluptate incididunt.</p>
                                        <a href="room-step2.html">select room</a>
                                    </div>

                                    <div class="price-detail">

                                        <div class="stars">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                        </div>

                                        <div class="room-price">
                                            <span class="current">$189</span>

                                            <span class="per-night">*Pax/Per night</span>
                                        </div>


                                    </div>

                                </div>

                            </div>

                        </div>


                    </div>
                </div>


                <!--End Select Room-->








            </div>
        </div>
        <!--End Rooms-->

    </div>
    <!--End Content-->

</x-web-layout>
