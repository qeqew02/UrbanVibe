@extends('layouts.app')

@section('content')

<!-- Favicon -->
<link href="{{ asset('img/logo-urbanvibe.png') }}" rel="icon" type="image/png">

<!-- Masthead-->
<header class="masthead">
    <h1 class="text-white">Urban Vibe</h1>
        <p class="text-white">Urban Vibe menyediakan berbagai pilihan pakaian berkelanjutan dan stylish untuk mendukung gaya hidup Anda.</p>
        <a class="btn btn-success btn-xl text-uppercase rounded" href="{{route('katalog')}}">Lihat Katalog</a>
</header>
<!-- Portfolio Grid-->
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Produk Terbaru</h2>
            <h3 class="section-subheading text-muted">Urban Vibe menghadirkan koleksi pakaian berkelanjutan yang unik dan stylish.</h3>
        </div>
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($product as $pt)
                <div class="col-md-6 col-xl-3 mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="{{$pt->photo === null ? asset('img/il_login.png') : asset($pt->photo)}}" style="object-fit:cover;" height='200px' alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">{{$pt->title}}</h5>
                                <!-- Product price-->
                                <h4 class="fw-bolder-price">@rupiah($pt->price)</h4>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-danger mt-auto" href="{{route('detailProduk', $pt->id )}}">Detail</a></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="container text-center">
            <a class="btn btn-success btn-xl text-uppercase rounded" href="{{route('katalog')}}">Lihat Katalog</a>
        </div>
    </div>
</section>
@endsection