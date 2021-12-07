@extends('frontend.layouts.newmain')
@section('container')
<section class="welcome">
    <div class="welcome-area" id="welcome">
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h1>XStore untuk <br> <strong>Keluarga Bahagia</strong></h1>
                        <p>Butuh berbagai kebutuhan rumah tangga?<br> dari kebutuhan pokok, hingga kebutuhan tambahan
                            <br>Dapatkan hanya di XSTORE!
                        </p>

                        <a href="/katalog-produk" class="main-button">
                            <stron>Cek Katalog</strong>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img src="/img/shopping-illustration.png" style="transform: scaleX(-1);" class="rounded img-fluid d-block mx-auto" alt="First Vector Graphic">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection