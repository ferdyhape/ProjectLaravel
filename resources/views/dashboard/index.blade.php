@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h3">Hello, Admin <strong>{{ auth()->user()->name }}</strong></h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
                <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
            </button>
        </div>
    </div>

    <h2>List Barang</h2>
    <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Kategori</th>
                </tr>
            </thead>

            <tbody>
                @foreach($barang as $b)
                <tr>
                    <td>{{ $b->nama }}</td>
                    <td>{{ $b->harga }}</td>
                    <td>{{ $b->jumlah }}</td>
                    <td>{{ $b->category->name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection