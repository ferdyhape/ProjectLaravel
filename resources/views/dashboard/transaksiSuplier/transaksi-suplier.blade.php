@extends('dashboard.layouts.main')
@section('container')
<div class="container mt-3">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ $message }}
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <div class="card shadow my-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary fs-3"><strong>Data Transaksi</strong></h6>
            <div class="d-flex">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                    <button type="button" class="btn btn-primary"><a class="text-decoration-none text-white" href="/dashboard/transaksi-suplier/create">Tambah Transaksi</a></button>
                    <button type="button" class="btn btn-primary"><a class="text-decoration-none text-white" href="/dashboard/cetak-transaksi">Cetak Data Transaksi</a></button>
                </div>
            </div>
        </div>
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
                        <th class="text-center">Action</th>
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
                        <td class="d-flex justify-content-center">
                            <form action="transaksi-suplier/{{ $t->id }}" method="POST">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0" onclick="return confirm('beneran mau hapus?')"><i class="bi bi-trash" style="font-size: 18px;"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection