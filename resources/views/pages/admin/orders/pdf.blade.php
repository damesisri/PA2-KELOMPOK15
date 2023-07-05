<!DOCTYPE html>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Tambahkan gaya CSS untuk tampilan PDF di sini */
        .pdf-header {
<<<<<<< HEAD
=======
=======
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
            text-align: center;
            margin-bottom: 20px;
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
        .pdf-header h1 {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .pdf-header p {
            font-size: 16px;
            margin: 0;
        }

        .pdf-table {
<<<<<<< HEAD
=======
=======
        table {
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
        .pdf-table th,
        .pdf-table td {
            border: 1px solid #000;
            padding: 8px;
        }

        .pdf-table th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        .pdf-table td {
            text-align: center;
        }

        .pdf-total {
            text-align: right;
        }

        .pdf-footer {
            text-align: center;
            margin-top: 20px;
<<<<<<< HEAD
=======
=======
        th,
        td {
            padding: 8px;
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        .badge {
            display: inline-block;
            padding: 5px 10px;
            font-size: 12px;
            font-weight: bold;
            text-transform: uppercase;
            border-radius: 4px;
        }

        .badge-soft-warning {
            color: #f6a609;
            background-color: #fff3cd;
        }

        .badge-soft-success {
            color: #155724;
            background-color: #d4edda;
        }

        .badge-soft-danger {
            color: #721c24;
            background-color: #f8d7da;
        }

        .text-uppercase {
            text-transform: uppercase;
        }

        .text-center {
            text-align: center;
        }

        .total-row {
            font-weight: bold;
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
        }
    </style>
</head>

<body>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
    <div class="pdf-header">
        <h1>Data Pembelian</h1>
        <p>Tanggal: {{ date('d/m/Y') }}</p>
    </div>

    <table class="pdf-table">
<<<<<<< HEAD
=======
=======
    <h1>Detail Pesanan</h1>

    <table>
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Pembelian</th>
                <th>Total Harga</th>
                <th>Bukti Pembayaran</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $totalHarga = 0; ?>
<<<<<<< HEAD
            @foreach ($pemesanans as $item)
=======
<<<<<<< HEAD
            @foreach ($pemesanans as $item)
=======
            @foreach ($order->items as $item)
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->code }}</td>
                    <td>{{ $item->total }}</td>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
                    <?php $totalHarga += $item->total; ?>
                    <td>
                        @if ($item->payment != 'Cash')
                            <img src="{{ asset('images/bukti_pembayaran' . $item->image) }}" class="card-img-top">
                        @else
                            Pembayaran Cash
                        @endif
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
                </tr>
            @endforeach
            <tr>
                <td colspan="2"></td>
                <td><strong>Total :</strong></td>
                <td colspan="2"><strong>{{ $totalHarga }}</strong></td>
            </tr>
        </tbody>
    </table>

    <div class="pdf-footer">
        <p>© 2023 Karunia Sipoholon</p>
    </div>
</body>

</html>
<<<<<<< HEAD
=======
=======
>>>>>>> 169a733c3bafb102e7687ae7493f73dbb6a9aa7b
>>>>>>> 14cadffa2dd7df46a4cd473ab87107b2103daf20
