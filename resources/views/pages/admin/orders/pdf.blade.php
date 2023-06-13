<!DOCTYPE html>
<html>

<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

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
        }
    </style>
</head>

<body>
    <h1>Detail Pesanan</h1>

    <table>
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
            @foreach ($order->items as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->code }}</td>
                    <td>{{ $item->total }}</td>
