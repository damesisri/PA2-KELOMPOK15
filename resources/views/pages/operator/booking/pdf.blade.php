<!DOCTYPE html>
<html>

<head>
    <title>Booking PDF</title>
    <style>
        /* Gaya CSS khusus untuk tampilan PDF */
        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table th,
        .table td {
            border: 1px solid #ddd;
            padding: 8px;
        }

        .table th {
            background-color: #f2f2f2;
            text-align: left;
        }

        .badge {
            display: inline-block;
            padding: 5px 10px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .badge-soft-warning {
            background-color: #ffc107;
            color: #fff;
        }

        .badge-soft-success {
            background-color: #28a745;
            color: #fff;
        }

        .badge-soft-danger {
            background-color: #dc3545;
            color: #fff;
        }

        .badge-soft-primary {
            background-color: #007bff;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="card-body">
        <div>
            <center>
                <h1>Laporan Booking Pemandian</h1>
            </center>
            <hr>
            <div class="table-responsive table-card mb-1">
                <table class="table align-middle">
                    <thead class="table-light text-muted">
                        <tr>
                            <th>No</th>
                            <th>No Kamar</th>
                            <th>Nama Pemesan</th>
                            <th>Tanggal</th>
                            <th>Jam</th>
                            <th>Jumlah</th>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pemandian as $item)
<<<<<<< HEAD
=======
=======
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($booking as $item)
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->toilet->title }}</td>
                                {{-- <td>{{$item->category}}</td> --}}
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
                                <td>{{ $item->user->fullname }}</td>
                                <td>{{ $item->book_date }}</td>
                                <td>{{ $item->book_time }}</td>
                                <td>{{ $item->person }}</td>
<<<<<<< HEAD
=======
=======
                                <td>{{ $item->username }}</td>
                                <td>{{ $item->book_date }}</td>
                                <td>{{ $item->book_time }}</td>
                                <td>{{ $item->person }}</td>
                                <td>
                                    @if ($item->status == 'pending')
                                        <span class="badge badge-soft-warning text-uppercase">Menunggu</span>
                                    @elseif($item->status == 'accepted')
                                        <span class="badge badge-soft-success text-uppercase">Diterima</span>
                                    @elseif($item->status == 'rejected')
                                        <span class="badge badge-soft-danger text-uppercase">Ditolak</span>
                                    @elseif($item->status == 'Completed')
                                        <span class="badge badge-soft-primary text-uppercase">Selesai</span>
                                    @endif
                                </td>
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
