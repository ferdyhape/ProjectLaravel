@extends('layouts.main')
@section('container')
<div class="row justify-content-center mt-5">
    <div class="col-lg-4 shadow p-5 bg-light">
        <main class="form-signin">
            <h2 class="h3 mb-3 fw-normal text-center text-muted">Login <strong>Admin</strong></h2>

            <div class="text-center m-3"><i class="bi bi-person-circle" style="font-size: 100px;"></i></div>
            <form action="/login" method="POST">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Masukkan Email" autofocus required value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password" required>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                <small class="d-block mt-2"><a href="/register">Register admin</a></small>
            </form>
        </main>
    </div>
</div>
@endsection