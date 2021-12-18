@extends('frontend.layouts.newmain')
@section('container')
<section class="container">
    <div class="row my-4">
        @foreach($barang->sortBy('nama') as $b)
        <div class="col-lg-3 my-3">
            <div class="card shadow bg-white rounded border-0 " href="/">
                <img src="{{asset('storage/' .$b->gambar)}}" class="mx-auto d-block" style="max-width: 100%;" alt="foto-user">
                <div class="card-body my-0 py-0">
                    <h5 class="card-title mt-3 my-0">{{ $b->nama }}</h5>
                </div>
                <ul class="list-group list-group-flush mb-3">
                    <li class="list-group-item">Kategori: {{ $b->category->name }}</li>
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