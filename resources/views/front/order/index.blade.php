@extends('layouts.frontmaster') @section('title', 'การสั่งซื้อสินค้า') @section('content')

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <form id="cartUpdate" method="POST" action="{{ url('cart/update') }}">
                    {{ csrf_field() }}
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
                            @forelse($products as $no => $product)
                            <tr>
                                <td class="product-remove text-center align-middle">
                                    {{ $no+1 }}
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
                                <td class="product-quantity text-right">
                                    {{ number_format($product->cart_qty) }}
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
                </form>
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
                @if($products->count() > 0)
                <div class="float-right">                    
                    <a class="btn btn-info" href="{{ url('cart') }}" role="button">กลับไปหน้าตะกร้าสินค้า</a>
                    <a class="btn btn-primary" href="#" role="button">ยืนยันการสั่งซื้อสินค้า</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection @section('script')
<script src="{{ asset('js/front-cart.min.js') }}"></script>
@endsection