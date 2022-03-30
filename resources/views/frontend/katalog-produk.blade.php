@extends('frontend.layouts.newmain')
@section('container')
<section class="container">
    <div class="row my-4">
        @foreach($barang->sortBy('nama') as $b)
        <div class="col-lg-3 my-3">
            <div class="card shadow bg-white rounded border-0 " href="/">
                <img src="{{asset('storage/' .$b->gambar)}}" class="mx-auto d-block" style="max-width: 100%;" alt="foto-produk">
                <div class="card-body my-0 py-0">
                    <h5 class="card-title mt-4 my-1 fw-bold">{{ $b->nama }}</h5>
                    <p class="card-title fw-bold h6">DISKON 10%!</p>
                </div>

                @php
                $hargadiskon = ($b->harga - ((10*$b->harga)/100))
                @endphp

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Harga: <s>{{ $b->harga }}</s> {{ $hargadiskon }}</li>
                    <li class="list-group-item" style="font-size: 15px;">Kategori: {{ $b->category->name }}</li>
                </ul>
            </div>
        </div>
        @endforeach
        <style>
            .card {
                margin: 5px;
            }

            .card:hover {
                transform: scale(1.05);
                box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
            }

            @media(max-width: 990px) {
                .card {
                    margin: 20px;
                }
            }
        </style>
    </div>
</section>
@endsection