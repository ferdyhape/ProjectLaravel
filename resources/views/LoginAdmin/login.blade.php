@extends('layouts.main')
@section('container')
<div class="row justify-content-center mt-5">
    <div class="col-md-4 shadow p-5 bg-light">
        <main class="form-signin">
            <h2 class="h3 mb-3 fw-normal text-center text-muted">Login <strong>Admin</strong></h2>

            <div class="text-center m-3"><i class="bi bi-person-circle" style="font-size: 100px;"></i></div>
            <form>
                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
            </form>
        </main>
    </div>
</div>
@endsection