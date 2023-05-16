<div class="card-body">
    <div>
        <div class="table-responsive table-desi">
            <table class="user-table table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Pembelian</th>
                        <th>Total Harga</th>
                        <th>Bukti Pembayaran</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hotel as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->code }}</td>
                            <td>{{ $item->total }}</td>
                            <td><img src="{{ asset('images/bukti_pembayaran/' . $item->image) }}" class="card-img-top">
                            </td>
                            <td>
                                <a href="{{ route('admin.hotel.show', $item->id) }}"><i class="fa fa-eye"
                                        aria-hidden="true"></i></a>
                                <a href="{{ route('admin.checkout.pdf', $item->id) }}" class="btn btn-sm btn-info mb-1"
                                    target="_blank" class="menu-link px-3">Cetak</a>
                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
{{ $hotel->links('theme.app.pagination') }}
