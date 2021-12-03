@extends('dashboard.layouts.main')
@section('container')
<div class="container mt-3">
    <div class="d-flex justify-content-between mb-3 mt-5 border-bottom">
        <h2 class="mt">Kategori Barang</h2>
        <a class="btn btn-primary py-2 mb-2" href="/dashboard/category/create" role="button">Tambah kategori</a>
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
                    <th>No</th>
                    <th>Id</th>
                    <th>Nama Kategori</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach($category as $c)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $c->id }}</td>
                    <td>{{ $c->name }}</td>
                    <td class="d-flex justify-content-evenly">
                        <a href="category/{{ $c->id }}" class="badge bg-success"><i class="bi bi-eye-fill" style="font-size: 18px;"></i></a>
                        <a href=" category/{{ $c->id }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square" style="font-size: 18px;"></i></a>
                        <form action="category/{{ $c->id }}" method="POST">
                            @method('delete')
                            @csrf
                            <button class="badge bg-danger border-0" onclick="return confirm('beneran mau hapus?')"><i class="bi bi-trash" style="font-size: 18px;"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection