@extends('layouts.default')

@section('content')
<main>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777"></rect>
                </svg>

                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Lebaran Trendi</h1>
                        <p>Tampil trendy dihari lebaran dengan outfit baru yang waw.</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Cek Sekarang</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777"></rect>
                </svg>

                <div class="container">
                    <div class="carousel-caption">
                        <h1>Super Gadget Day</h1>
                        <p>Perbarui gadgetmu biar ga ketinggalan sama mantanmu, doi aja dah pake yang paling baru, kamu kapaan</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Perbarui Sekarang</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <rect width="100%" height="100%" fill="#777"></rect>
                </svg>

                <div class="container">
                    <div class="carousel-caption text-end">
                        <h1>#ToTheMoon Halu</h1>
                        <p>Kesel liat porto kebakaran? shoppingin aja biar duit ga ilang percuma</p>
                        <p><a class="btn btn-lg btn-primary" href="#">Liat Hot Product</a></p>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</main>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-3 my-2">
            @include('components.products.product-card')
        </div>
        <div class="col-md-3 my-2">
            @include('components.products.product-card')
        </div>
        <div class="col-md-3 my-2">
            @include('components.products.product-card')
        </div>
        <div class="col-md-3 my-2">
            @include('components.products.product-card')
        </div>
        <div class="col-md-3 my-2">
            @include('components.products.product-card')
        </div>
        <div class="col-md-3 my-2">
            @include('components.products.product-card')
        </div>
        <div class="col-md-3 my-2">
            @include('components.products.product-card')
        </div>
        <div class="col-md-3 my-2">
            @include('components.products.product-card')
        </div>
    </div>
</div>
@endsection