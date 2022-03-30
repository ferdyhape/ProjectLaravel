@extends('frontend.layouts.newmain')
@section('container')
<div class="container">
    <div class="row justify-content-center mt-5 mb-5">

        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        @if ($message = Session::get('LoginFailed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $message }}
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <div class="col-lg-4 shadow p-5 bg-light" id="register">
            <main class="form-signin">
                <h2 class="h3 mb-3 fw-normal text-center text-muted">Please <strong>Login</strong></h2>

                <div class="text-center m-3"><i class="bi bi-person-circle" style="font-size: 100px;"></i></div>
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Masukkan Email" autofocus required value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group mb-2">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan Password" required>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                    <div class="d-flex justify-content-between mb-2">
                        <div class="mt-2"><a href="/registerAdmin">Register Admin</a></div>
                        <div class="mt-2"><a href="/registerUser">Register User</a></div>
                    </div>
                </form>
            </main>
        </div>
    </div>
</div>
@endsection