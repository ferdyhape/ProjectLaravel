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
    <div class="col-lg-5 shadow p-5 bg-light" id="form-all">
        <h2 class="h3 text-center mb-4">Edit Barang</h2>
        <form action="/dashboard/barang/{{ $barang->id }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <img class="card-img-top mb-3" src="{{asset('storage/'.$barang->gambar)}}" alt="Card image cap">
            <input type="hidden" name="gambarLama" id="gambarLama" value="{{ $barang->gambar }}">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Barang</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="{{ $barang->nama }}">
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" required value="{{ $barang->harga }}">
                @error('harga')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="number" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" name="jumlah" required value="{{ $barang->jumlah }}">
                @error('jumlah')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
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
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar Barang</label>
                <input class="form-control @error('gambar') is-invalid @enderror" type="file" id="gambar" name="gambar" required onchange="previewImage()">
                @error('gambar')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="img-preview">Preview Gambar</label>
                <img class="img-preview img-fluid mt-1" id="img-preview">
            </div>
            <div class="d-flex justify-content-between">
                <a href="{{ URL::previous() }}" class="btn btn-info mt-3">Kembali</a>
                <button type="submit" class="btn btn-warning mt-3">Update</button>
            </div>
        </form>
    </div>
</div>

<script>
    function previewImage() {
        const image = document.querySelector('#gambar');
        const imgPreview = document.querySelector('.img-preview')

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection