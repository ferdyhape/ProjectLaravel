@extends('dashboard.layouts.main')
@section('container')
<div class="container mt-3">
    <div class="d-flex justify-content-between mb-3 mt-5 border-bottom">
        <h2 class="mt">List Barang</h2>
        <a class="btn btn-primary py-2 mb-2" href="/dashboard/barang/create" role="button">Tambah Barang</a>
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
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Kategori</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($barang as $b)
                <tr>
                    <td>{{ $b->nama }}</td>
                    <td>{{ $b->harga }}</td>
                    <td>{{ $b->jumlah }}</td>
                    <td>{{ $b->category->name }}</td>
                    <td class="d-flex justify-content-evenly">
                        <a href="barang/{{ $b->id }}" class="badge bg-success"><i class="bi bi-eye-fill" style="font-size: 18px;"></i></a>
                        <a href=" barang/{{ $b->id }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square" style="font-size: 18px;"></i></a>
                        <form action="barang/{{ $b->id }}" method="POST">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('beneran mau hapus?')"><i class="bi bi-trash" style="font-size: 18px;"></i></button>
                        </form>
                        <!-- <a href="barang/{{ $b->id }}" class="badge bg-warning"><i class="bi bi-pencil-square" style="font-size: 18px;"></i></a> -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection