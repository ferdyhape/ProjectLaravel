<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>

<body>
    <h1>
        List Data Barang
    </h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Kategori</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barang as $b)
            <tr>
                <td>{{ $b->id }}</td>
                <td>{{ $b->nama }}</td>
                <td>{{ $b->harga }}</td>
                <td>{{ $b->jumlah }}</td>
                <td>{{ $b->category->name }}</td>
            </tr>
        </tbody>
        @endforeach
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
            padding: 10px 15px;
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</body>

</html>