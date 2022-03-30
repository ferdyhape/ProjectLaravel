@extends('frontend.layouts.newmain')
@section('container')
<section class="section mt-0" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <img src="img/about-us.png" class="rounded img-fluid d-block mx-auto" alt="App">
            </div>
            <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                <div class="left-heading">
                    <h5>XSTORE? Apasih itu?</h5>
                </div>
                <div class="left-text">
                    <p>Xstore adalah salah satu minimarket termurah yang ada di Malang, tidak sekedar kata-kata penarik konsumen, namun memberi bukti dengan harga yang fantastis dibawah harga normal, bisa saja dikatakan merusak harga pasar, tapi gpp, demi cuan kurela berkorban.</p>
                    <a href="/katalog-produk" class="main-button">Cek Katalog</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="hr"></div>
            </div>
        </div>
    </div>
</section>
@endsection