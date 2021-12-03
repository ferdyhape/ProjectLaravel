@extends('dashboard.layouts.main')
@section('container')
<div class="container mt-5 mb-5 d-flex justify-content-center">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ $message }}
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="col-lg-5 shadow p-5 bg-light">
        <h2 class="h3 text-center mb-4">Tambah Transaksi</h2>
        <form action="/dashboard/transaksi-suplier" method="POST">
            @csrf
            <div class="mb-3">
                <label for="supplier_name" class="form-label">Nama Supplier</label>
                <input type="text" class="form-control @error('supplier_name') is-invalid @enderror" id="supplier_name" name="supplier_name" required autofocus>
                @error('supplier_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="item_name" class="form-label">Nama Barang</label>
                <input type="text" class="form-control @error('item_name') is-invalid @enderror" id="item_name" name="item_name" required>
                @error('item_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="qty" class="form-label">Jumlah</label>
                <input type="number" class="form-control @error('qty') is-invalid @enderror" id="qty" name="qty" required>
                @error('qty')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Total Harga</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required>
                @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="transaction_date" class="form-label">Tanggal Transaksi</label>
                <input type="date" class="form-control @error('transaction_date') is-invalid @enderror" id="transaction_date" name="transaction_date" required>
                @error('transaction_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ URL::previous() }}" class="btn btn-info">Kembali</a>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
    </div>
</div>
@endsection