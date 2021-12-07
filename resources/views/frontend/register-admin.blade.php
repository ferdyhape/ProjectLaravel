@extends('frontend.layouts.newmain')
@section('container')
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4 shadow p-5 bg-light mb-5" id="register">
            <main class="form-registration">
                <h2 class="h3 mb-3 fw-normal text-center text-muted">Register <strong>Admin</strong></h2>
                <div class="text-center m-3"><i class="bi bi-person-circle" style="font-size: 100px;"></i></div>
                <form action="/register" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="level" name="level" value="admin">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" required value="{{ old('name') }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Masukkan Email" required value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Masukkan Password" required>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="phone">No Telepon</label>
                        <input type="number" class="form-control @error('name') is-invalid @enderror" name="phone" id="phone" placeholder="No Telepon" required value="{{ old('phone') }}">
                        @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" name="address" id="address" placeholder="Alamat" required value="{{ old('address') }}">
                        @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3 mt-2">
                        <label for="photo">Foto</label>
                        <input class="form-control @error('photo') is-invalid @enderror" type="file" id="photo" name="photo" required onchange="previewImage()" placeholder="Foto">
                        @error('photo')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label for="img-preview">Preview Foto</label>
                        <img class="img-preview img-fluid mt-1" id="img-preview">
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-1" type="submit">Register</button>
                    <small class="d-block mt-2"><a href="/login">Login</a></small>
                </form>
            </main>
        </div>
    </div>
</div>
<style>
    .form-group {
        margin-bottom: 10px;
    }

    label {
        margin-bottom: 5px;
    }
</style>
<script>
    function previewImage() {
        const image = document.querySelector('#photo');
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