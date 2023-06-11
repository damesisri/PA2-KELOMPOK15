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
            font-size: 16px;
            /* Ukuran font */
            transition-duration: 0.4s;
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
                        <h1>Booking now</h1>
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
                                    <span>FormPemandian</span>
                                    <h1>Reservation</h1>
                                </div>


                                {{-- <div class="booking-form">
                                    <form id="reserv_form" method="post" enctype="multipart/form-data"
                                        action="{{ route('web.pemandian.store') }}">
                                        @csrf
                                        <div class="col-md-6">
                                            <div class="field">
                                                <input class="form-control" name="username" id="username"
                                                    type="text" value="{{ old('username') }}"
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
                                                <input class="form-control" type="time" id="book_time"
                                                    placeholder="Appointment Date" onClick="" name="book_time"
                                                    value="{{ old('datepicker') ?? 'Choose A Date' }}"
                                                    onblur="if(this.value == '') { this.value='Choose A Time'}"
                                                    onfocus="if (this.value == 'Choose A Time') {this.value=''}" />
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

                                        
                                        <div class="card-footer">
                                            <div class="hstack gap-2 justify-content-end">
                                                <a class="btn btn-light" href="javascript:;" onclick="load_list(1);">Kembali</a>
                        
                                                <button class="btn btn-primary me-3" type="submit">Tambah</button>
                        
                                            </div>
                                        </div>
                                    </form>

                                </div> --}}
                                <div class="booking-form">
                                    <form method="POST" action="{{ route('web.pemandian.store', $toilet->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="col-md-6">
                                            <div class="field">
                                                <input class="form-control" name="username" id="username"
                                                    type="text" value="{{ old('username') }}"
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
                                                <input class="form-control" type="time" id="book_time"
                                                    placeholder="Appointment Date" onClick="" name="book_time"
                                                    value="{{ old('datepicker') ?? 'Choose A Date' }}"
                                                    onblur="if(this.value == '') { this.value='Choose A Time'}"
                                                    onfocus="if (this.value == 'Choose A Time') {this.value=''}" />
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
                                        @error('person')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror

                                        <div class="card-footer">
                                            <div class="hstack gap-2 justify-content-end">
                                                {{-- <a class="cool-button"
                                                    href="{{ route('web.pemandian.create') }}">History</a> --}}

                                                <button class="cool-button" type="submit">Booking</button>

                                            </div>
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
                        url: '{{ route('web.pemandian.create', $toilet->id) }}',
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
    {{-- @section('custom_js')
        <script src="{{ asset('js/FormControls.js') }}"></script>
        <script>
            const btnSubmit = document.querySelector('button[type="submit"]');
            const formEl = $('#form_input');
            btnSubmit.addEventListener('click', function(e) {
                e.preventDefault();
                KTFormControls.onSubmitForm(formEl);
            });
        </script>
    @endsection --}}

</x-web-layout>
