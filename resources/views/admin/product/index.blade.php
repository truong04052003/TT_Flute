@extends('admin.layouts.master')
@section('content')
    <div class="page-container">
        <div class="main-content">
            <div class="container">
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table">
                                        <a href="{{ route('products.create') }}" class="btn btn-primary">Thêm sản phẩm</a>
                                        <a href="{{ route('products.trash') }}" class="btn btn-danger">Thùng Rác</a>
                                        <thead>
                                            <tr>
                                                <th colspan="2">STT</th>
                                                <th colspan="2">Tên sản phẩm</th>
                                                <th colspan="2">Giá</th>
                                                <th colspan="2">Số lượng</th>
                                                <th colspan="2">Thể loại</th>
                                                <th colspan="2">Ảnh</th>
                                                <th colspan="2">Tùy chọn</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($items as $key => $item)
                                                <tr>
                                                    <th scope="row">{{ ++$key }}</th>
                                                    <td colspan="2">{{ $item->name }}</td>
                                                    <td colspan="2">{{ number_format($item->price) }} VNĐ</td>
                                                    <td colspan="2">{{ $item->quantity }}</td>
                                                    <td colspan="2">{{ $item->category->name }}</td>
                                                    <td></td>
                                                    <td>
                                                        <img src="{{ asset('public/uploads/' . $item->image) }}"
                                                            alt="" style="width: 100px">
                                                    </td>

                                                    <td colspan="2">
                                                        <a href="{{ route('products.edit', [$item->id]) }}"
                                                            class="btn btn-warning">Sửa</a>
                                                        <a href="{{ route('products.detail', [$item->id]) }}"
                                                            class="btn btn-info">Chi tiết</a>
                                                        <a href="">
                                                            <form action="{{ route('products.delete', [$item->id]) }}"
                                                                method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button
                                                                    onclick="return confirm('Bạn có chắc chắn xóa không?');"
                                                                    class="btn btn-danger">Xóa</button>
                                                            </form>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </section>
            </div>
        </div>
    </div>
@endsection
