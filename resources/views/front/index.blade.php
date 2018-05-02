@extends('layouts.frontmaster')

@section('title', 'หน้าแรกขายสินค้าออนไลน์')

@section('content')

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">itOffside.com สินค้าออนไลน์</h1>
        <p class="lead text-muted">ขายสินค้าราคาไม่แพง สามารถซื้อได้โดยผ่านทางเว็บไซต์นี้ได้ทันที</p>
        <p>
            <a href="{{ url('cart') }}" class="btn btn-outline-success my-2"><i class="fa fa-shopping-bag"></i> ตะกร้าสินค้าของเรา</a>
        </p>
    </div>
</section>

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">

            @foreach($products as $product)

            <div class="col-md-3">
                <div class="card mb-4 box-shadow">
                    <img class="card-img-top" src="{{ $product->full_image }}" alt="itOffisde.com">
                    <div class="card-body">
                        <p>{{ $product->barcode }}</p>
                        <hr>
                        <p class="card-text">{{ $product->name }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a role="button" href="{{ url('product/'.$product->id.'/'.$product->name) }}" class="btn btn-sm btn-outline-secondary">รายละเอียด</a>
                                <button type="button" data-url="{{ $product->id }}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-shopping-cart"></i>
                                    สั่งซื้อ
                                </button>
                            </div>
                            <small class="text-muted">{{ $product->price_currency }}</small>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach

        </div>
    </div>
</div>

@endsection