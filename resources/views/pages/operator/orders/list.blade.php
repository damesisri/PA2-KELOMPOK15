<div class="card-body">
    <div>
        <div class="table-responsive table-desi">
            <table class="user-table table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pemesan</th>
                        <th>Alamat</th>
                        <th>Kode Pos</th>
                        <th>No Hp</th>
                        <th>Total Harga</th>
                        <th>Bukti Pembayaran</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $key => $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->user->fullname }}</td>
                            <td>{{ $item->user->address . ' , ' . $item->user->subdistrict->name . ' , ' . $item->user->city->name . ' , ' . $item->user->province->name }}
                            </td>
                            <td>{{ $item->user->postal_code }}</td>
                            <td>{{ $item->user->phone }}</td>
                            <td>{{ $item->total }}</td>
                            <td><img src="{{ asset('images/bukti_pembayaran/' . $item->image) }}" class="card-img-top">
                            </td>
                            <td>
                            <td>
                                {{-- {{ $item->status }} --}}
                                @if ($item->status == 'pending')
                                    <span class="status status--upcoming">Menunggu</span>
                                @elseif($item->status == 'accepted')
                                    <span class="">Diterima</span>
                                @elseif($item->status == 'rejected')
                                    <span class="">Ditolak</span>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group d-flex justify-content-center" role="group"
                                    aria-label="Basic example">
                                    <a href="javascript:;"
                                        onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','DELETE','{{ route('operator.food.show', $item->id) }}');"
                                        class="btn btn-sm btn-primary"></i>Detail</a>
                                    @if ($item->status == 'pending')
                                        <a href="javascript:;"
                                            onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','PATCH','{{ route('operator.food.accept', $item->id) }}');"
                                            class="btn btn-sm btn-success">
                                            Terima
                                        </a>
                                        <a href="javascript:;"
                                            onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','PATCH','{{ route('operator.food.reject', $item->id) }}');"
                                            class="btn btn-sm btn-danger">
                                            Tolak
                                        </a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
{{ $booking->links('theme.app.pagination') }}
