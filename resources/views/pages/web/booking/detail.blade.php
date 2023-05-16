<x-web-layout title="Detail">
    <!--Start Sub Banner-->
    <div class="sub-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="detail">
                        <h1>Booking now</h1>
                        <span>Ridiculus sociosqu cursus neque cursus curae ante scelerisque vehicula.</span>
                        <ul>
                            <li><a href="index-2.html">Home</a></li>
                            <li><a class="select">Booking Now</a></li>
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

        <!--Start Book Table-->
        <div id="book-table"></div>
        <div class="height35"></div>
        <div class="book-table">

            <div class="parallax parallax-book-table">
                <div class="detail">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-8">

                                <div class="main-title">
                                    <span>Book a Pemandian</span>
                                    <h1>Reservation</h1>
                                </div>


                                <div class="booking-form">


                                    <form id="reserv_form" method="post">
                                        @csrf
                                        <div class="col-md-6">
                                            <div class="field">
                                                <input class="form-control" name="username" id="reserv_name"
                                                    type="text" value="{{ old('reserv_name') ?? 'Your Name' }}"
                                                    onblur="if(this.value == '') { this.value='Your Name'}"
                                                    onfocus="if (this.value == 'Your Name') {this.value=''}">
                                            </div>
                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <div class="field">
                                                <input class="form-control" type="text" id="datepicker"
                                                    placeholder="Appointment Date" onClick="" name="book_date"
                                                    value="{{ old('datepicker') ?? 'Choose A Date' }}"
                                                    onblur="if(this.value == '') { this.value='Choose A Date'}"
                                                    onfocus="if (this.value == 'Choose A Date') {this.value=''}" />
                                            </div>
                                            @error('book_date')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <div class="field basic-example2">
                                                <input class="form-control" type="time" id="timepicker"
                                                    placeholder="Appointment Date" onClick="" name="book_time"
                                                    value="{{ old('datepicker') ?? 'Choose A Date' }}"
                                                    onblur="if(this.value == '') { this.value='Choose A Date'}"
                                                    onfocus="if (this.value == 'Choose A Date') {this.value=''}" />
                                            </div>
                                            @error('book_time')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-6">
                                            <div class="field"><input class="form-control" name="person"
                                                    id="reserv_phone" type="text" value="Person"
                                                    onblur="if(this.value == '') { this.value='Person'}"
                                                    onfocus="if (this.value == 'Person') {this.value=''}"></div>
                                        </div>

                                        <div class="col-md-12">
                                            <input name=" " type="submit" value="Book a pemandian"
                                                onClick="validateReservation();">
                                        </div>
                                    </form>

                                </div>



                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--End Book Table-->

    </div>
    <!--End Content-->
    @section('css')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @endsection

    @section('script')
        <script>
            $(document).ready(function() {
                // Get the success message from the URL parameter
                $('#reserv_form').submit(function(e) {
                    e.preventDefault();
                    var data = $('#reserv_form').serialize();
                    $.ajax({
                        type: 'POST',
                        url: '{{ route('web.pemandian.book', $toilet->id) }}',
                        data: data,
                        dataType: 'json',
                        success: function(response) {
                            if (response.status == "success") {
                                toastr.success(response.message);
                            } else {
                                toastr.error(response.message);
                            }
                        }
                    });
                });
            });
        </script>
    @endsection

</x-web-layout>
