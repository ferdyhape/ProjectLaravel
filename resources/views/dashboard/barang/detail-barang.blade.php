@extends('dashboard.layouts.main')
@section('container')
<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-lg-5 mt-3">
            <div class="card">
                <h5 class="card-header h4 text-center fw-bold text-success">{{ $barang->nama }}</h5>
                <img class="card-img-top" src="{{asset('storage/'.$barang->gambar)}}" alt="Card image cap">

                <div class="card-body">
                    <p class="card-text border-bottom mb-1 pb-1 mt-2">Harga: {{ $barang->harga }}</p>
                    <p class="card-text border-bottom mb-1 pb-1">Jumlah: {{ $barang->jumlah }}</p>
                    <p class="card-text border-bottom mb-1 pb-1">Kategori:{{ $barang->category->name }}</p>
                </div>
                <div class="d-flex justify-content-around mb-4">
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
</div>
@endsection