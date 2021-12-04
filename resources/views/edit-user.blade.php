@extends('frontend.layouts.main')
@section('container')
<div class="row justify-content-center mt-5">
    <div class="col-lg-4 shadow p-5 bg-light mb-5">
        <main class="form-registration">
            <h2 class="h3 mb-3 fw-normal text-center text-muted">Edit <strong>Profil</strong></h2>
            <form action="/u/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <img class="card-img-top mb-5 mt-5 rounded-circle mx-auto d-block" style="max-width: 70%;" src="{{asset('storage/'.$user->photo) }}" alt="Card image cap">
                <input type="hidden" id="level" name="level" value="{{ $user->level }}">
                <input type="hidden" id="id" name="id" value="{{ $user->id }}">
                <input type="hidden" name="photoLama" id="photoLama" value="{{ $user->photo }}">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" required value="{{ $user->name }}">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Masukkan Email" required value="{{ $user->email }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="phone">No Telepon</label>
                    <input type="number" class="form-control @error('name') is-invalid @enderror" name="phone" id="phone" placeholder="No Telepon" required value="{{ $user->phone }}">

                    @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="address" id="address" placeholder="Alamat" required value="{{ $user->address }}">

                    @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class=" form-group">
                    <label for="photo">Foto</label>
                    <input class="form-control @error('photo') is-invalid @enderror" type="file" id="photo" name="photo" onchange="previewImage()" placeholder="Foto">
                    @error('photo')
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
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Update</button>
                <small class="d-block mt-2"><a href="/login">Login</a></small>
            </form>
        </main>
    </div>
</div>
<style>
    .form-group {
        margin-bottom: 15px;
    }

    label {
        margin-bottom: 5px;
    }
</style>
@endsection