@extends('admin.layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container py-5 h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-lg-10 col-xl-8">
                                <div class="card" style="border-radius: 10px;">
                                    <div class="card-header px-4 py-5">
                                        <h5 style="text-align:center;">Đơn Hàng Của Bạn, <span
                                                style="color: rgb(248, 61, 61);">Anna</span>!</h5>
                                    </div>
                                    <div class="card-body p-4">
                                        <div class="d-flex justify-content-between align-items-center mb-4">
                                            <p class="lead fw-normal mb-0" style="color: rgb(248, 61, 61);">Sản Phẩm Đã Mua</p>
                                        </div>
                                        @php
                                            $total = 0;
                                        @endphp
                                        <div class="row">
                                            <div class="col-md-2">Ảnh</div>
                                            <div
                                                class="col-md-4 text-center d-flex justify-content-center align-items-center">
                                                Tên Sản Phẩm</div>
                                            <div
                                                class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                Số Lượng</div>
                                            <div
                                                class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                Giá 1/1</div>
                                            <div
                                                class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                Tổng Giá</div>
                                        </div>
                                        @foreach ($order_details as $key => $order_detail)
                                        {{-- @php
                                            dd($order_detail)
                                        @endphp --}}
                                            @php $total += $order_detail->quantity * $order_detail->price  @endphp
                                            <div class="card shadow-0 border mb-4">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <img src="{{ asset('public/uploads/' . $order_detail->products->image) }}"
                                                                alt="{{ $order_detail->products->name }}">
                                                        </div>
                                                        <div
                                                            class="col-md-4 text-center d-flex justify-content-center align-items-center">
                                                            <p class="text-muted mb-0">{{ $order_detail->products->name }}
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                            <p class="text-muted mb-0 small">{{ $order_detail->quantity }}
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                            <p class="text-muted mb-0 small">
                                                                {{ number_format($order_detail->price) }}</p>
                                                        </div>
                                                        <div
                                                            class="col-md-2 text-center d-flex justify-content-center align-items-center">
                                                            <p class="text-muted mb-0 small">
                                                                {{ number_format($order_detail->quantity * $order_detail->price) }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="d-flex justify-content-between pt-2">
                                            <h3 style="color: rgb(248, 61, 61)" >Thông Tin Khách Hàng</h3>
                                        </div>
                                        <div class="d-flex justify-content-between pt-2">
                                            <p class="text-muted mb-0">Tên khách hàng </p>
                                            <p class="text-muted mb-0"><span
                                                    class="fw-bold me-4">{{ $order->customer->name }}</span></p>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <p class="text-muted mb-0">Địa Chỉ</p>
                                            <p class="text-muted mb-0"><span
                                                    class="fw-bold me-4">{{ $order->customer->address }}</span></p>
                                        </div>

                                        <div class="d-flex justify-content-between">
                                            <p class="text-muted mb-0">Số Điện Thoại</p>
                                            <p class="text-muted mb-0"><span
                                                    class="fw-bold me-4">{{ $order->customer->phone }}</span>
                                            </p>
                                        </div>
                                        <div class="d-flex justify-content-between mb-5">
                                            <p class="text-muted mb-0">Email</p>
                                            <p class="text-muted mb-0"><span
                                                    class="fw-bold me-4">{{ $order->customer->email }}</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-footer border-0 px-2 py-3"
                                        style="background-color: rgb(248, 61, 61); border-bottom-left-radius: 7px; border-bottom-right-radius: 7px;">
                                        <h5
                                            class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">
                                            <strong>Tổng Tiền :
                                                {{ number_format($total) }} vnđ</strong>
                                            </span>
                                        </h5>
                                    </div>
                                </div>
                                <a href="{{ route('orders.index') }}" class="btn btn-danger">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
