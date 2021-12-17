<h1>
    List Data Barang
</h1>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Kategori</th>
        </tr>
    </thead>
    <tbody>
        @foreach($barang as $b)
        <tr>
            <td>{{ $loop->iteration }}</td>
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
        width: 70%;
        text-align: left;
    }

    h1 {
        width: 70%;
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