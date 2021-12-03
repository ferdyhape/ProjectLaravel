@extends('dashboard.layouts.main')
@section('container')
<div class="container mt-3">
    <div class="d-flex justify-content-between mb-3 mt-5 border-bottom">
        <h2 class="mt">Barang dengan kategori {{ $category->name }}</h2>
        <a class="btn btn-primary py-2 mb-2" href="/dashboard/category/create" role="button">Tambah kategori</a>
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
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                </tr>
            </thead>

            <tbody>
                @foreach($barang as $b)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $b->nama }}</td>
                    <td>{{ $b->harga }}</td>
                    <td>{{ $b->jumlah }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ URL::previous() }}" class="btn btn-info mt-2">Kembali</a>
    </div>
</div>
@endsection