@extends('dashboard.layouts.main')
@section('container')
<div class="container mt-5 mb-5 d-flex justify-content-center">
    <div class="col-lg-5 shadow p-5 bg-light" id="form-all">
        <h2 class="h3 text-center mb-4">Tambah Kategori</h2>
        <form action="/dashboard/category/{{ $category->id }}" method="POST">
            @method('PUT')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Kategori</label>
                <input type="text" class="form-control @error('supplier_name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ $category->name }}">
                @error('supplier_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ URL::previous() }}" class="btn btn-info">Kembali</a>
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
        </form>
    </div>
</div>
@endsection