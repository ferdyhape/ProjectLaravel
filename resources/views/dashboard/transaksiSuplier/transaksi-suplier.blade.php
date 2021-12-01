@extends('dashboard.layouts.main')
@section('container')
<div class="container mt-3">
    <div class="d-flex justify-content-between mb-3 mt-5 border-bottom">
        <h2>Riwayat Transaksi</h2>
        <a class="btn btn-primary py-2 mb-2" href="/dashboard/transaksi-suplier/create" role="button">Tambah Transaksi</a>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ $message }}
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Suplier</th>
                    <th>Nama Barang</th>
                    <th>Jumlah</th>
                    <th>Total Harga</th>
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
    </div>
</div>
@endsection