<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Transaksi</title>
</head>

<body>
    <h1>
        List Data Barang
    </h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama Suplier</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Tanggal Transaksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transaksi as $t)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $t->supplier_name }}</td>
                <td>{{ $t->item_name }}</td>
                <td>{{ $t->qty }}</td>
                <td>{{ $t->price }}</td>
                <td>{{ $t->transaction_date }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <style>
        table {
            margin: 0 auto 50px auto;
            width: 90%;
            text-align: left;
        }

        h1 {
            width: 90%;
            margin: 100px auto 10px auto;
        }

        table,
        th,
        td {
            text-align: left;
            padding: 10px 15px;
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</body>

</html>