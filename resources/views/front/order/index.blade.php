@extends('layouts.frontmaster') @section('title', 'การสั่งซื้อสินค้า') @section('content')

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row">
            {{-- billto --}}
            <div class="col-sm-8">
                <h4 class="mb-3">ที่อยู่ในการจัดส่งสินค้า</h4>
                {{-- message shipto --}}
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>แจ้งชำระเงิน!</strong> หลังจากลูกค้าชำระเงินแล้วกรุณาแจ้งการโอนเงินพร้อมสลิป ทางไลน์ไอดี @baht
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {{-- message error --}} @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form id="orderSave" method="POST" action="{{ url('checkout') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label for="firstName">ชื่อ-นามสกุล</label>
                            <input type="text" class="form-control" name="name" autocomplete="off">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="lastName">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" name="tel" autocomplete="off">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 mb-3">
                            <label for="firstName">อีเมล์</label>
                            <input type="text" class="form-control" name="email" autocomplete="off">
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="lastName">ไอดีไลน์</label>
                            <input type="text" class="form-control" name="lineid" autocomplete="off">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 mb-3">
                            <label for="address">ที่อยู่</label>
                            <input type="text" class="form-control" name="address" autocomplete="off">
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-sm-5 mb-3">
                            <label for="country">อำเภอ</label>
                            <select class="custom-select d-block w-100" name="district">
                                <option value="">เลือก...</option>
                                @foreach($districts as $district)
                                <option value="{{ $district->id }}">{{ $district->name_th }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-4 mb-3">
                            <label for="state">จังหวัด</label>
                            <select class="custom-select d-block w-100" name="province">
                                <option value="">เลือก...</option>
                                @foreach($provinces as $province)
                                <option value="{{ $province->id }}">{{ $province->name_th }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-sm-3 mb-3">
                            <label for="postcode">รหัสไปรษณีย์</label>
                            <input type="text" class="form-control" name="postcode" autocomplete="off">
                        </div>
                    </div>                                       
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block order-save" type="button" aria-disabled="true">สั่งซื้อสินค้า</button>
                </form>
            </div>
            {{-- end billto --}} {{-- in cart --}}
            <div class="col-sm-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">ตะกร้าสินค้าของคุณ</span>
                    <span class="badge badge-success badge-pill">{{ $products->count() }} รายการ</span>
                </h4>
                <ul class="list-group mb-3">
                    @forelse($products as $product)
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">{{ $product->name }}</h6>
                            <span class="font-weight-light .text-black-50">({{ $product->barcode }})</span>
                            <small class="text-muted">
                                {{ $product->price_currency }} x {{ number_format($product->cart_qty) }}
                            </small>
                        </div>
                        <span class="text-muted">฿ {{ number_format($product->total, 2) }}</span>
                    </li>
                    @empty
                    <p class="text-center">ไม่มีสินค้าในตะกร้า</p>
                    @endforelse

                    <li class="list-group-item d-flex justify-content-between">
                        <strong>รวมทั้งสิ้น (บาท)</strong>
                        <strong>฿ {{ number_format($grand_total, 2) }}</strong>
                    </li>
                </ul>
                <form class="card p-2">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Promo code">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                    </div>
                </form>
            </div>
            {{-- end incart --}}
        </div>
    </div>
</div>

@endsection @section('script')
<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('js/messages_th.js') }}"></script>
<script src="{{ asset('js/front-order.min.js') }}"></script>
@endsection