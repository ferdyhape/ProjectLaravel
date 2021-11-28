@extends('frontend.layouts.main')
@section('container')
<div class="row justify-content-center mt-5">
    <div class="col-lg-4 shadow p-5 bg-light mb-5">
        <main class="form-registration">
            <h2 class="h3 mb-3 fw-normal text-center text-muted">Please <strong>Register</strong></h2>

            <div class="text-center m-3"><i class="bi bi-person-circle" style="font-size: 100px;"></i></div>
            <form action="/register" method="POST">
                @csrf
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

                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
                <small class="d-block mt-2"><a href="/login">Login Admin</a></small>
            </form>
        </main>
    </div>
</div>
@endsection