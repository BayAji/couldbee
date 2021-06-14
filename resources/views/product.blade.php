@extends('layouts.default')

@section('content')
<div class="container mt-4">
    <p class="mb-2">Home > Product</p>
    <div class="row">
        <div class="col-md-4 mt-2">
            <img src="http://localhost:8000/product.png" alt="" width="100%">
        </div>
        <div class="col-md-5 mt-2">
            <h4><b>Long Product Name</b></h4>
            <p>Terjual 647 | <i class="fas fa-star" style="color:gold"></i> 4.5</p>
            <nav class="mt-3 mb-1">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Info</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">Produk ini tidak disediakan oleh <b>Cloudbee</b>, semua produk disediakan oleh masing-masing penjual. Semua kecacatan produk adalah sepenuhnya tanggung jawab penjual.</div>
            </div>

            <div class="my-2">
                @include('components.products.store-card')
            </div>

        </div>
        <div class="col-md-3 mt-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><b>Rp 50.000</b></h5>
                    <p class="card-text"><span class="badge bg-danger">50%</span> <small><s>Rp 100.000</s></small></p>
                    <hr>
                    <p><i class="fas fa-map-marked-alt"></i> Barang siap diantar ke <b>Kudus</b></p>
                    <p><i class="fas fa-shipping-fast"></i> Ongkir <b>Gratis</b></p>
                    <p><i class="fas fa-clock"></i> Estimasi tiba <b>Besok</b></p>
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-primary btn-block"><i class="fas fa-shopping-cart"></i> Buy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection