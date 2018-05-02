@extends('layouts.frontmaster') @section('title', $product->name) @section('content')

<div class="p-5 bg-live">
    <div class="container">
        <div class="card">
            <div class="row">
                <aside class="col-sm-4 border-right">
                    <article class="gallery-wrap">
                        <div class="img-big-wrap">
                            <div>
                                <a href="#">
                                    <img src="{{ $product->full_image }}">
                                </a>
                            </div>
                        </div>
                        <!-- slider-product.// -->
                    </article>
                    <!-- gallery-wrap .end// -->
                </aside>
                <aside class="col-sm-8">
                    <article class="card-body p-5">
                        <h3 class="title mb-3">{{ $product->name }}</h3>

                        <p class="price-detail-wrap">
                            <span class="price h3 text-warning">
                                <span class="currency">฿</span>
                                <span class="num">{{ $product->price_currency }}</span>
                            </span>
                        </p>
                        <!-- price-detail-wrap .// -->
                        <dl class="item-property">
                            <dt>รายละเอียด</dt>
                            <dd>
                                <p>{{ $product->detail }}</p>
                            </dd>
                        </dl>
                        <dl class="param param-feature">
                            <dt>ยีห้อ</dt>
                            <dd>{{ $product->brand }}</dd>
                        </dl>
                        <!-- item-property-hor .// -->
                        <dl class="param param-feature">
                            <dt>หมวดหมู่</dt>
                            <dd>{{ $product->category->name }}</dd>
                        </dl>
                        <!-- item-property-hor .// -->
                        <dl class="param param-feature">
                            <dt>สถานะ</dt>
                            <dd>
                                @if($product->quantity > 0)
                                <span class="badge badge-success">{{ $product->stock_status }}</span>
                                @else
                                <span class="badge badge-danger">{{ $product->stock_status }}</span>
                                @endif
                            </dd>
                        </dl>
                        <!-- item-property-hor .// -->

                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <form class="form-inline" method="POST" id="cartOrder" action="{{ url('cart/add/') }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">฿</div>
                                        </div>
                                        <input type="number" name="quantity" class="form-control" placeholder="จำนวน" autocomplete="off">
                                    </div>                                    
                                </form>
                                <!-- item-property .// -->
                            </div>
                            <!-- col.// -->
                        </div>
                        <!-- row.// -->
                        @if($product->quantity > 0)
                        <hr>
                        <a href="#" class="btn btn-lg btn-outline-primary text-uppercase add-item">
                            <i class="fas fa-shopping-cart"></i> สั่งซื้อ </a>
                        @endif
                    </article>
                    <!-- card-body.// -->
                </aside>
                <!-- col.// -->
            </div>
            <!-- row.// -->
        </div>
        <!-- card.// -->
    </div>
</div>

@endsection

@section('script')
    <script src="{{ asset('js/front-cart.min.js') }}"></script>
@endsection