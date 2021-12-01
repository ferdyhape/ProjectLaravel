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
        <h2 class="h3 text-center mb-4">Edit Barang</h2>
        <form action="/dashboard/barang/{{ $barang->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="nama" name="nama" required autofocus value="{{ $barang->nama }}">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" required value="{{ $barang->harga }}">
            </div>
            <div class=" mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control" id="jumlah" name="jumlah" required value="{{ $barang->jumlah }}">
            </div>
            <div class=" form-group">
                <label for="category_id">Kategori:</label>
                <select class="form-control" id="category_id" name="category_id" value="{{ $barang->category->id }}">
                    @foreach($category as $c)
                    @if( $barang->category_id == $c->id)
                    <option value="{{ $c->id }}" selected>{{ $c->name }}</option>
                    @else
                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ URL::previous() }}" class="btn btn-info mt-3">Kembali</a>
                <button type="submit" class="btn btn-primary mt-3">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection