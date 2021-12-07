@extends('frontend.layouts.newmain')
@section('container')
<section class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-6 mt-5">
            <div class="card shadow my-5">
                <h5 class="card-header">Member Card</h5>
                <div id="img"></div>
                <div class="d-flex justify-content-center" id="card">
                    <img class="card-img m-4" id="foto" src="{{asset('storage/' .auth()->user()->photo)}}" alt="foto-user" style="width: 30%;">
                    <div class="card-body my-auto mx-auto text-white fw-bold">
                        <p class="h6">Name: {{ $user->name }}</p>
                        <p class="h6">Email: {{ $user->email }}</p>
                        <p class="h6">Phone: {{ $user->phone }}</p>
                        <p class="h6">Address: {{ $user->address }}</p>
                    </div>
                </div>
                <footer class="blockquote-footer text-black text-end my-2">Salam dari Kami <cite title="Source Title">XStore</cite></footer>
            </div>
        </div>
    </div>
</section>
<style>
    #card {
        background-image: url(../img/banner-1.png);
    }

    .h6 {
        color: white;
    }

    footer {
        margin-right: 20px;
    }
</style>
@endsection