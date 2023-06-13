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
                            <div class="item"><img src="{{ asset('assets-user/imgs/room-detail-img2.jpg') }}"
                                    alt=""></div>
                            <div class="item"><img src="{{ asset('assets-user/imgs/room-detail-img3.jpg') }}"
                                    alt=""></div>
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
                                Aenean posuere pharetra tortor eu sodales. Aenean vitae facilisis ligula.<br /><br />
                                Nulla facilisi. Pellentesque habitant morbi tristique senectus et netus et malesuada
                                fames ac turpis egestas. Aenean vitae facilisis ligula. Quisque dictum neque in lectus
                                cursus congue. Phasellus sodales condimentum rutrum.
                            </p>
                        </div>

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
                                <span class="amount">{{ number_format($hotel->price) }}</span>
                            </div>

                            <form id="bookingForm" class="form" method="POST"
                                action="{{ route('web.penginapan.create', $hotel->id) }}">
                                @csrf
                                <div class="field">
                                    <input type="text" id="datepicker" placeholder="Check In" name="checkin"
                                        value="" required>
                                </div>

                                <div class="field">
                                    <input type="text" id="datepicker2" placeholder="Check Out" name="checkout"
                                        value="" required>
                                </div>

                                <div class="field field2">
                                    <select class="basic-example" id="reserv_time" name="adults" required>
                                        <option value="">Adults</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5+</option>
                                    </select>
                                </div>

                                <div class="field field2 last">
                                    <select class="basic-example" id="people_total" name="children" required>
                                        <option value="">Children</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5+</option>
                                    </select>
                                </div>

                                <button type="button" id="checkAvailabilityBtn" class="availability">Pesan
                                    Kamar</button>
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
</x-web-layout>
