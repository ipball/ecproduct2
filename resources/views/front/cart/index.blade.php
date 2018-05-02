@extends('layouts.frontmaster') @section('title', 'หน้าแรกขายสินค้าออนไลน์') @section('content')

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="product-remove text-center">#</th>
                            <th class="product-image text-center">รูปภาพ</th>
                            <th class="t-product-name text-center">ชื่อสินค้า</th>
                            <th class="product-unit-price text-center">ราคาสินค้า</th>
                            <th class="product-quantity text-center">จำนวน</th>
                            <th class="product-subtotal text-center">รวม</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($products as $product)
                        <tr>
                            <td class="product-remove text-center align-middle">
                                <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-times"></i></button>
                            </td>
                            <td class="product-image text-center">
                                <img src="{{ $product->full_image }}" class="img-fluid rounded" style="height: 100px;" alt="itOffisde.com">
                            </td>
                            <td class="t-product-name text-left">
                                {{ $product->name }}
                                <br>
                                <span class="font-weight-light .text-black-50">({{ $product->barcode }})</span>
                            </td>
                            <td class="product-unit-price text-right">
                                {{ $product->price_currency }}
                            </td>
                            <td class="product-quantity w-25">
                                <input type="number" value="{{ $product->cart_qty }}" class="form-control w-25" autocomplete="off">
                            </td>
                            <td class="product-quantity text-right">
                                <p>฿ {{ number_format($product->total, 2) }}</p>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center">ไม่มีสินค้าในตะกร้า</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="col-sm-6 offset-sm-6 text-right">
                <h2>รวมทั้งสิ้น
                    <span>฿ {{ number_format($grand_total,2) }}</span>
                </h2>
            </div>
            <div class="col-sm-12">
                <div class="float-left">
                    <a class="btn btn-secondary" href="{{ url('/') }}" role="button">ซื้อสินค้าอื่นต่อ</a>
                </div>
                <div class="float-right">
                    <a class="btn btn-danger" href="#" role="button">ล้างสินค้าในตะกร้าทั้งหมด</a>
                    <a class="btn btn-warning" href="#" role="button">ปรับปรุงตะกร้าสินค้า</a>
                    <a class="btn btn-primary" href="#" role="button">ชำระสินค้า</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection