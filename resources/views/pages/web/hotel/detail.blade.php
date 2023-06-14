<x-web-layout title="Detail">
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
        <div class="room-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>
                    <div class="col-md-8">
                        <div id="hotel-view" class="owl-carousel owl-theme">
                            <div class="item"><img src="{{ asset('images/hotel/' . $hotel->cover) }}" alt="">
                            </div>
                        </div>


                        <div class="what-include">
                            <div class="include-sec">
                                <img src="{{ asset('assets-user/imgs/icon-cup.png') }}" alt="">
                                <span>Breakfast</span>
                            </div>

                            <div class="include-sec">
                                <img src="{{ asset('assets-user/imgs/icon-ac.png') }}" alt="">
                                <span>Cool AC</span>
                            </div>

                            <div class="include-sec">
                                <img src="{{ asset('assets-user/imgs/icon-led.png') }}" alt="">
                                <span>TV LCD</span>
                            </div>

                            <div class="include-sec">
                                <img src="{{ asset('assets-user/imgs/icon-wifi.png') }}" alt="">
                                <span>Wi-fi service</span>
                            </div>

                            <div class="include-sec last">
                                <img src="{{ asset('imgs/icon-car.png') }}" alt="">
                                <span>Free Parking</span>
                            </div>

                        </div>


                        <div class="room-descrip">
                            <h5>Room Description</h5>
                            <p>Semper ac dolor vitae accumsan. interdum hendrerit lacinia. Etiam eget urna augue.
                                Aenean
                                posuere pharetra tortor eu sodales. Aenean vitae facilisis ligula.
                                <br /><br />
                                Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada
                                fames ac turpis egestas. Aenean vitae facilisis ligula. Quisque dictum neque in
                                lectus
                                cursus congue. Phasellus sodales condimentum rutrum.
                            </p>
                        </div>
                    </div>


                    <div class="col-md-4">

                        <div class="booking-form">

                            <div class="rating">
                                <i class="icon-star-full"></i><i class="icon-star-full"></i><i
                                    class="icon-star-full"></i><i class="icon-star-full"></i><i
                                    class="icon-star-full"></i>
                            </div>

                            <div class="price">

                                <span>Room From Per Night</span>
                                <span class="amount">
                                    {{ number_format($hotel->price) }}</span>

                            </div>


                            <form class="form" method="POST" id="form_penginapan"
                                action="{{ route('web.penginapan.book') }}" novalidate="novalidate">
                                @csrf
                                <input type="hidden" name="hotel_id" value="{{ $hotel->id }}">
                                <input type="hidden" name="price" value="{{ $hotel->price }}">
                                <div class="field">
                                    <input type="text" class="date-pick form-control" id="datepicker"
                                        placeholder="Appointment Date" onClick="" name="checkin" value="Check In"
                                        onblur="if(this.value == '') { this.value='Check In'}"
                                        onfocus="if (this.value == 'Check In') {this.value=''}" autocomplete="off" />
                                </div>

                                <div class="field">
                                    <input type="text" class="date-pick form-control" id="datepicker2"
                                        placeholder="Appointment Date" onClick="" name="checkout" value="Check Out"
                                        onblur="if(this.value == '') { this.value='Check Out'}"
                                        onfocus="if (this.value == 'Check Out') {this.value=''}" autocomplete="off" />
                                </div>

                                <div class="field field2">
                                    <select class="basic-example" id="totalAdult" name="adults">
                                        <option value="">Adults</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5+</option>
                                    </select>
                                </div>

                                <div class="field field2 last">
                                    <select class="basic-example" id="totalChildren" name="children">
                                        <option value="">Children</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5+</option>
                                    </select>
                                </div>



                                <button type="button" class="availability" id="btn_check">Pesan Kamar</button>


                            </form>


                            <div class="clear"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!--End Rooms-->

    </div>
    <!--End Content-->

    @section('script')
        <script>
            function checkAvailability() {
                // Ambil nilai input dari elemen HTML
                var checkinDate = $('#datepicker').val();
                var checkoutDate = $('#datepicker2').val();
                var numberOfAdults = $('#totalAdult').val();
                var numberOfChildren = $('#totalChildren').val();

                var hotel_id = "{{ $hotel->id }}";

                // Ubah tanggal menjadi objek Date untuk membandingkannya
                var checkin = new Date(checkinDate);
                var checkout = new Date(checkoutDate);

                // Validasi tanggal
                if (checkin.getTime() === checkout.getTime()) {
                    toastr.error('Tanggal check-in dan check-out tidak boleh sama.');
                    return;
                }

                if (checkin.getTime() > checkout.getTime()) {
                    toastr.error('Tanggal check-out harus lebih besar dari tanggal check-in.');
                    return;
                }

                $.ajax({
                    url: "/penginapan/check",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        check_in: checkinDate,
                        check_out: checkoutDate,
                        adult: numberOfAdults,
                        children: numberOfChildren,
                        hotel_id: hotel_id
                    },
                    success: function(response) {
                        if (response.status == 'success' && response.isAvailable == 1) {
                            toastr.success('Kamar tersedia!');
                            $('#form_penginapan').submit();
                        } else {
                            toastr.error(response.message);
                            return;
                        }
                    }
                });

            }

            $(function() {
                'use strict';
                // disable button
                $('#btn_check').click(function() {
                    checkAvailability();
                });
            });





            function load_data(page) {
                $.get("?page=" + page, {

                }, function(data) {
                    $("#list_result").html(data);
                });
            }
            load_data(1);
        </script>
    @endsection
</x-web-layout>
