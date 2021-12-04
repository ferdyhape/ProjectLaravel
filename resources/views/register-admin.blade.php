@extends('frontend.layouts.main')
@section('container')
<div class="row justify-content-center mt-5">
    <div class="col-lg-5 shadow p-5 bg-light mb-5">
        <main class="form-registration">
            <h2 class="h3 mb-3 fw-normal text-center text-muted">Register <strong>Admin</strong></h2>

            <div class="text-center m-3"><i class="bi bi-person-circle" style="font-size: 100px;"></i></div>
            <form action="/register" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="level" name="level" value="admin">
                <div class="form-floating">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" required value="{{ old('name') }}">
                    <label for="name">Nama</label>
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Masukkan Email" required value="{{ old('email') }}">
                    <label for="email">Email</label>
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Masukkan Password" required>
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="number" class="form-control @error('name') is-invalid @enderror" name="phone" id="phone" placeholder="No Telepon" required value="{{ old('phone') }}">
                    <label for="phone">No Telepon</label>
                    @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="address" id="address" placeholder="Alamat" required value="{{ old('address') }}">
                    <label for="address">Alamat</label>
                    @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3 mt-2">
                    <input class="form-control @error('photo') is-invalid @enderror" type="file" id="photo" name="photo" required onchange="previewImage()" placeholder="Foto">
                    @error('photo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                <small class="d-block mt-2"><a href="/login">Login</a></small>
            </form>
        </main>
    </div>
</div>
@endsection