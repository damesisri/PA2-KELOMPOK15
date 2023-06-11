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
                <tbody class="list form-check-all">
                    <?php $totalHarga = 0; ?>
                    @foreach ($orders as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->code }}</td>
                            <td>{{ $item->total }}</td>
                            <?php $totalHarga += $item->total; ?>
                            <td><img src="{{ asset('images/bukti_pembayaran/' . $item->image) }}" class="card-img-top">
                            </td>
                            <td>
                                @if ($item->status == 'pending')
                                    <span class="badge badge-soft-warning text-uppercase">Menunggu</span>
                                @elseif($item->status == 'accepted')
                                    <span class="badge badge-soft-success text-uppercase">Diterima</span>
                                @elseif($item->status == 'rejected')
                                    <span class="badge badge-soft-danger text-uppercase">Ditolak</span>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <a href="{{ route('admin.order.show', $item->id) }}"
                                        class="btn btn-sm btn-primary mb-1">Detail</a>
                                    <a href="{{ route('web.checkout.pdf', $item->id) }}"
                                        class="btn btn-sm btn-info mb-1" target="_blank"
                                        class="menu-link px-3">Cetak</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="1"></td>
                        <td><strong>Total :</strong></td>
                        <td colspan="3"><strong>{{ $totalHarga }}</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

{{ $orders->links('theme.app.pagination') }}
