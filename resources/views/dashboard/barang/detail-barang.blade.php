@extends('dashboard.layouts.main')
@section('container')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-lg-5 mt-5">
            <div class="card">
                <img class="card-img-top" src="{{asset('storage/'.$barang->gambar)}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Nama Barang: {{ $barang->nama }}</h5>
                    <p class="card-text border-bottom mb-1 pb-1 pl-2">Harga: {{ $barang->harga }}</p>
                    <p class="card-text border-bottom mb-1 pb-1">Jumlah: {{ $barang->jumlah }}</p>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ URL::previous() }}" class="btn btn-info mt-3">Kembali</a>
                <a href="{{ $barang->id }}/edit" class="btn btn-warning mt-3">Edit</a>
                <a class="btn btn-danger mt-3">
                    <form action="{{ $barang->id }}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="bg-transparent border-0" onclick="return confirm('beneran mau hapus?')">Hapus</button>
                    </form>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection