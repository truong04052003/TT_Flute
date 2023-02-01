@extends('admin.layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-8 col-xl-6">
                            <div class="card border-top border-bottom border-3" style="border-color: #000000 !important;">
                                <div class="card-body p-5">
                                    <p class="lead fw-bold mb-5" style="text-align: center">Chi Tiết Sản phẩm</p>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <dt>Name:</dt>
                                            <p>{{ $items->name }}</p>
                                        </div>
                                        <div class="col mb-3">
                                            <dt>Price</dt>
                                            <p>{{ $items->price }}</p>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col mb-3">
                                            <dt>Quantity:</dt>
                                            <p>{{ $items->quantity }}</p>
                                        </div>
                                        <div class="col mb-3">
                                            <dt>Manufacture</dt>
                                            <p>{{ $items->manufacture }}</p>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col mb-3">
                                            <dt>Manufacture</dt>
                                            <p>{{ $items->category->name }}</p>
                                        </div>
                                        <div class="col mb-3">
                                            <dt>Description</dt>
                                            <p>{{ $items->description }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('products.index') }}" class="btn btn-danger">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
