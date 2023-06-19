<x-app-layout title="Data Pemesanan">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Hotel</h4>
        </div>
    </div>
<<<<<<< HEAD
    <form id="form_input" method="POST" action="{{ route('operator.hotel.makePenginapan') }}"
=======
    <form id="form_input" method="POST" action="{{ route('operator.hotel.makeReservation') }}"
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
        enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="mb-3">
                    <label for="" class="form-label">Pilih Kamar</label>
<<<<<<< HEAD
                    <select name="hotel_id" class="form-select">
=======
                    <select name="product_id" class="form-select">
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
                        <option disabled selected>Pilih Kamar</option>
                        @foreach ($hotel as $item)
                            <option value="{{ $item->id }}">{{ $item->name }} -
                                Rp.{{ number_format($item->price), 0, ',', '.' }}
                            </option>
                        @endforeach
                    </select>
                    <br>

                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal Check In</label>
<<<<<<< HEAD
                        <input type="date" name="checkin_date" class="form-control"
=======
                        <input type="date" name="check_in" class="form-control"
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
                            placeholder="Masukkan Tanggal Check In">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Tanggal Check Out</label>
<<<<<<< HEAD
                        <input type="date" name="checkout_date" class="form-control"
=======
                        <input type="date" name="check_out" class="form-control"
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
                            placeholder="Masukkan Tanggal Check Out">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Adults</label>
                        <input type="number" name="adults" class="form-control" placeholder="Masukkan Jumlah Orang">
                    </div>
<<<<<<< HEAD
=======
                    <div class="mb-3">
                        <label for="" class="form-label">Children</label>
                        <input type="number" name="children" class="form-control" placeholder="Masukkan Jumlah Anak">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Quantity</label>
                        <input type="number" name="quantity" class="form-control" placeholder="Masukkan Jumlah Kamar">
                    </div>
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
                </div>
                <div class="card-footer">
                    <div class="hstack gap-2 justify-content-end">
                        <a class="btn btn-light" href="javascript:;" onclick="load_list(1);">Kembali</a>

                        <button class="btn btn-primary me-3" type="submit">Tambah</button>

                    </div>
                </div>
            </div>
        </div>
    </form>
    @section('custom_js')
        <script src="{{ asset('js/FormControls.js') }}"></script>
        <script>
            const btnSubmit = document.querySelector('button[type="submit"]');
            const formEl = $('#form_input');
            btnSubmit.addEventListener('click', function(e) {
                e.preventDefault();
                KTFormControls.onSubmitForm(formEl);
            });
        </script>
    @endsection
</x-app-layout>
