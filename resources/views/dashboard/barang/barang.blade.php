@extends('dashboard.layouts.main')
@section('container')
<div class="container mt-3">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ $message }}
        <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    <div class="card shadow my-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary fs-3"><strong>List Barang</strong></h6>
            <div class="d-flex">

                <div class="btn-group mr-2" role="group" aria-label="First group">
                    <button type="button" class="btn btn-primary"><a class="text-decoration-none text-white" href="/dashboard/cetak-barang">Cetak Data Barang</a></button>
                    <button type="button" class="btn btn-primary"><a class="text-decoration-none text-white" href="/dashboard/barang/create">Tambah Barang</a></button>

                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Kategori</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($barang as $b)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $b->nama }}</td>
                        <td>{{ $b->harga }}</td>
                        <td>{{ $b->jumlah }}</td>
                        <td><a href="category/{{ $b->category->id }}" class="text-decoration-none text-primary">{{ $b->category->name }}</a></td>
                        <td class="d-flex justify-content-evenly">
                            <a href="barang/{{ $b->id }}" class="badge bg-success"><i class="bi bi-eye-fill" style="font-size: 18px;"></i></a>
                            <a href="barang/{{ $b->id }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square" style="font-size: 18px;"></i></a>
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
</div>
@endsection