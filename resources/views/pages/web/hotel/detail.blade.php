<x-web-layout title="Detail">
    <style>
        .cool-button {
            background-color: #E9B947;
            /* Warna latar belakang */
            color: white;
            /* Warna teks */
            border: none;
            /* Menghilangkan border */
            padding: 12px 24px;
            /* Ukuran padding */
            text-align: center;
            /* Posisi teks menjadi di tengah */
            text-decoration: none;
            /* Menghilangkan underline */
            display: inline-block;
            /* Menampilkan sebagai elemen inline */
            font-size: 15px;
            /* Ukuran font */
            transition-duration: 0.s;
            /* Durasi efek transisi */
            cursor: pointer;
            /* Mengubah kursor saat diarahkan ke button */
        }

        .cool-button:hover {
            background-color: #E9B947;
            /* Warna latar belakang saat dihover */
        }
    </style>
    <!--Start Sub Banner-->
    <div class="sub-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="detail">
                        <h1>Room Detail</h1>
                        {{-- <span>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</span> --}}
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
<<<<<<< HEAD
                            <p>Muatan Maksimal 4 Orang</p>
                            </p>
                        </div>
=======
                            <p>Semper ac dolor vitae accumsan. interdum hendrerit lacinia. Etiam eget urna augue.
                                Aenean posuere pharetra tortor eu sodales. Aenean vitae facilisis ligula.<br /><br />
                                Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada
                                fames ac turpis egestas. Aenean vitae facilisis ligula. Quisque dictum neque in lectus
                                cursus congue. Phasellus sodales condimentum rutrum.
                            </p>
                        </div>
<<<<<<< HEAD
=======

                        <div class="room-descrip">
                            <h5>Room Overview</h5>
                            <p>Semper ac dolor vitae accumsan. interdum hendrerit lacinia. Etiam eget urna augue.
                                Aenean posuere pharetra tortor eu sodales. Aenean vitae facilisis ligula.</p>
                        </div>

                        <div class="room-overview">
                            <div class="detail"><span><strong>Bed:</strong> Queen</span></div>
                            <div class="detail light-gray"><span><strong>Occupancy:</strong> 2 Persons</span></div>
                            <div class="detail"><span><strong>Ensuite Bathroom:</strong> Yes</span></div>
                            <div class="detail light-gray"><span><strong>Free Airport Pickup:</strong> Yes</span></div>
                            <div class="detail"><span><strong>Breakfast Included:</strong> Yes (Continental)</span>
                            </div>
                            <div class="detail light-gray"><span><strong>Free Internet:</strong> Yes</span></div>
                            <div class="detail"><span><strong>Gym Access:</strong> 24/7</span></div>
                        </div>
>>>>>>> 955b0efd52524aec77190dc6219047f82b423eb5
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
                    </div>

                    <div class="col-md-4">
                        <div class="booking-form">
<<<<<<< HEAD

                            {{-- <div class="rating">
=======
                            <div class="rating">
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
                                <i class="icon-star-full"></i><i class="icon-star-full"></i><i
                                    class="icon-star-full"></i><i class="icon-star-full"></i><i
                                    class="icon-star-full"></i>
                            </div> --}}

                            <div class="price">
                                <span>Room From Per Night</span>
                                <span class="amount">{{ number_format($hotel->price) }}</span>
                            </div>

<<<<<<< HEAD

                            <form class="form" method="POST" id="form_penginapan"
                                action="{{ route('web.penginapan.book') }}" novalidate="novalidate">
<<<<<<< HEAD
=======
=======
                            <form id="bookingForm" class="form" method="POST"
                                action="{{ route('web.penginapan.create', $hotel->id) }}">
>>>>>>> 955b0efd52524aec77190dc6219047f82b423eb5
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
                                @csrf
                                <input type="hidden" name="hotel_id" value="{{ $hotel->id }}">
                                <input type="hidden" name="price" value="{{ $hotel->price }}">
                                <div class="field">
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
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

<<<<<<< HEAD
                                <div style="margin-bottom: 10px;">
                                    <input class="form-control m-3" type="text" name="adults" id="totalAdult"
                                        placeholder="Maksimal 2 Orang" value="2" readonly>
                                </div>
                                <button type="button" class="cool-button" id="btn_check">Pesan Kamar</button>
=======
                                <div class="field field2">
                                    <select class="basic-example" id="totalAdult" name="adults">
=======
                                    <input type="text" id="datepicker" placeholder="Check In" name="checkin"
                                        value="" required>
                                </div>

                                <div class="field">
                                    <input type="text" id="datepicker2" placeholder="Check Out" name="checkout"
                                        value="" required>
                                </div>

                                <div class="field field2">
                                    <select class="basic-example" id="reserv_time" name="adults" required>
>>>>>>> 955b0efd52524aec77190dc6219047f82b423eb5
                                        <option value="">Adults</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5+</option>
                                    </select>
                                </div>

                                <div class="field field2 last">
<<<<<<< HEAD
                                    <select class="basic-example" id="totalChildren" name="children">
=======
                                    <select class="basic-example" id="people_total" name="children" required>
>>>>>>> 955b0efd52524aec77190dc6219047f82b423eb5
                                        <option value="">Children</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5+</option>
                                    </select>
                                </div>

<<<<<<< HEAD


                                <button type="button" class="availability" id="btn_check">Pesan Kamar</button>
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b


=======
                                <button type="button" id="checkAvailabilityBtn" class="availability">Pesan
                                    Kamar</button>
>>>>>>> 955b0efd52524aec77190dc6219047f82b423eb5
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

<<<<<<< HEAD
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
<<<<<<< HEAD
                // Validasi tanggal
                if (checkin.getTime() === checkout.getTime()) {
                    toastr.error('Tanggal check-in dan check-out tidak boleh dipesan diwaktu yang sama.');
=======

                // Validasi tanggal
                if (checkin.getTime() === checkout.getTime()) {
                    toastr.error('Tanggal check-in dan check-out tidak boleh sama.');
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
                    return;
                }

                if (checkin.getTime() > checkout.getTime()) {
                    toastr.error('Tanggal check-out harus lebih besar dari tanggal check-in.');
                    return;
                }

<<<<<<< HEAD
                // Validasi jika tanggal yang sudah lewat dipilih
                var today = new Date();
                if (checkin.getTime() < today.getTime()) {
                    toastr.error('Tanggal check-in tidak boleh dari tanggal yang sudah lewat.');
                    return;
                }

                // Validasi tanggal chekcin dan checkout jika kosong 
                if (checkinDate == '' || checkoutDate == '') {
                    toastr.error('Tanggal check-in dan check-out tidak boleh kosong.');
                    return;
                }

                // Validasi tanggal yang sudah dipesan tidak bisa dipesan lagi
                var reservedDates = ['']; // Contoh tanggal yang sudah dipesan

                var currentDate = new Date(checkin); // Mulai dari tanggal check-in
                var isDateAvailable = true;

                while (currentDate <= checkout) {
                    var formattedDate = currentDate.toISOString().split('T')[0];

                    if (reservedDates.includes(formattedDate)) {
                        isDateAvailable = false;
                        break;
                    }

                    currentDate.setDate(currentDate.getDate() + 1); // Pindah ke tanggal berikutnya
                }

                if (!isDateAvailable) {
                    toastr.error('Tanggal yang dipilih sudah dipesan dan tidak tersedia.');
                    return;
                }

                //Validasi jumlah orang ketika lebih dari dua harus memesan 2 kamar
                if (numberOfAdults > 2) {
                    toastr.error(
                        'Jumlah orang yang membooking kamar tidak boleh lebih dari 2 orang dan harus memesan 2 kamar.');
                    return;
                }

                // Validasi btn check jika belum login maka akan muncul alert 
                @if (Auth::guest())
                    toastr.error('Silahkan login terlebih dahulu.');
                    return;
                @endif






=======
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
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

<<<<<<< HEAD
=======




>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
            function load_data(page) {
                $.get("?page=" + page, {

                }, function(data) {
                    $("#list_result").html(data);
                });
            }
            load_data(1);
        </script>
    @endsection
=======
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function checkAvailability() {
            var dates = $("#datepicker").val().split('>');
            var checkin = dates[0];
            var checkout = dates[1];
            var adults = $("#reserv_time").val();
            var children = $("#people_total").val();
            // Kirim data form menggunakan Ajax
            $.ajax({
                url: "{{ route('web.penginapan.check') }}",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    check_in: check_in,
                    check_out: check_out,
                    homestay_id: homestay_id
                },
                success: function(response) {
                    if (response.status == 'success') {
                        toastr.success(response.message);
                        $("#checkAvailabilityBtn").prop('disabled', false);
                    } else {
                        $("#checkAvailabilityBtn").prop('disabled', true);
                        toastr.error(response.message);
                    }
                }
            });
        }
    </script>
>>>>>>> 955b0efd52524aec77190dc6219047f82b423eb5
</x-web-layout>
