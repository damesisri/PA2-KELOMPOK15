<div class="card-body">
    <div>
        <div class="table-responsive table-desi">
            <table class="user-table table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No Kamar</th>
                        <th>Nama Pemesan</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($booking as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->toilet->title }}</td>
                            {{-- <td>{{$item->category}}</td> --}}
                            <td>{{ $item->username }}</td>
                            <td>{{ $item->book_date }}</td>
                            <td>{{ $item->book_time }}</td>
                            <td>{{ $item->person }}</td>
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
                                        onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','DELETE','{{ route('operator.booking.destroy', $item->id) }}');"
                                        class="btn btn-sm btn-primary"></i>Delete</a>
                                    @if ($item->status == 'pending')
                                        <a href="javascript:;"
                                            onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','PATCH','{{ route('operator.booking.accept', $item->id) }}');"
                                            class="btn btn-sm btn-success">
                                            Terima
                                        </a>
                                        <a href="javascript:;"
                                            onclick="handle_confirm('Apakah Anda Yakin?','Yakin','Tidak','PATCH','{{ route('operator.booking.reject', $item->id) }}');"
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
