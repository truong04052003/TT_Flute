@extends('admin.layouts.master')
@section('content')
    <style>
        img.act {
            width: 100px;
            height: 100px;
        }
    </style>
    <div class="page-wrapper">
        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-lg-8 col-xl-6">
                            <div class="card border-top border-bottom border-3" style="border-color: #000000 !important;">
                                <div class="card-body p-5">
                                    <p class="lead fw-bold mb-5" style="text-align: center">Chi Tiết Sản Phẩm</p>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <dt>Tên sản phẩm:</dt>
                                            <p>{{ $items->name }}</p>
                                        </div>
                                        <div class="col mb-3">
                                            <dt>Giá</dt>
                                            <p>{{ number_format($items->price) }} VNĐ</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col mb-3">
                                            <dt>Số lượng:</dt>
                                            <p>{{ $items->quantity }} sản phẩm</p>
                                        </div>
                                        <div class="col mb-3">
                                            <dt>Nhà sản xuất</dt>
                                            <p>{{ $items->supplier->name }}</p>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col mb-3">
                                            <dt>Thể loại</dt>
                                            <p>{{ $items->category->name }}</p>
                                        </div>
                                        <div class="col mb-3">
                                            <dt>Mô tả</dt>
                                            <p>{{ $items->description }}</p>
                                        </div>
                                    </div>
                                    <dt>Ảnh chi tiết</dt>
                                    <div class="thumbnail_images">
                                        <ul style="padding-left: 0rem;" id="thumbnail">
                                            @foreach ($items->image_products as $file_name)
                                                <img class="act" onclick="changeImage(this)"
                                                    src="{{ asset($file_name->image) }}">
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <a href="{{ route('products.index') }}" class="btn btn-danger">Trở lại</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
