@extends('admin.layouts.master')
@section('content')
    @include('sweetalert::alert')
    @include('admin.product.advanceSearch')

    <div class="page-container">
        <div class="main-content">
            <div class="container">
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table">
                                        <h2 style="text-align: center">Danh Sách Sản Phẩm</h2><br>

                                        @if (Auth::user()->hasPermission('Product_create'))
                                            <a href="{{ route('products.create') }}" class="btn btn-primary">Thêm sản
                                                phẩm</a>
                                        @else
                                            <button type="button" class="btn btn-primary" disabled>Thêm Sản Phẩm</button>
                                        @endif
                                        <a href="{{ route('products.trash') }}" class="btn btn-danger">Thùng Rác</a>
                                        <a href="{{ route('products.export') }}" class="btn btn-info">Xuất file excel</a>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#searchModal">Tìm chi tiết</button>
                                        <table class="table" style="text-align: center">

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
                                                            @if (Auth::user()->hasPermission('Product_view'))
                                                                <img src="{{ asset('public/uploads/' . $item->image) }}"
                                                                    alt="" style="width: 100px; height:100px">
                                                            @else
                                                                <img id="avt" style="width:100px; height:100px"
                                                                    src="{{ asset('public/uploads/' . $item->image) }}">
                                                            @endif
                                                        </td>

                                                        <td colspan="2">
                                                            @if (Auth::user()->hasPermission('Product_update'))
                                                                <a href="{{ route('products.edit', [$item->id]) }}"
                                                                    class="btn btn-warning">Sửa</a>
                                                            @else
                                                                <i data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Bạn không có quyền làm điều này!">
                                                                    <button type="button" class="btn btn-warning"
                                                                        disabled>Sửa</button>
                                                                </i>
                                                            @endif
                                                            <a href="{{ route('products.detail', [$item->id]) }}"
                                                                class="btn btn-info">Chi tiết</a>
                                                            @if (Auth::user()->hasPermission('Product_delete'))
                                                                <a href="">
                                                                    <form
                                                                        action="{{ route('products.delete', [$item->id]) }}"
                                                                        method="post">
                                                                        @method('DELETE')
                                                                        @csrf
                                                                        <button
                                                                            onclick="return confirm('Bạn có chắc chắn xóa không?');"
                                                                            class="btn btn-danger">Xóa</button>
                                                                    @else
                                                                        <i data-bs-toggle="tooltip" data-bs-placement="top"
                                                                            title="Bạn không có quyền làm điều này!">
                                                                            <button type="button" class="btn btn-danger"
                                                                                disabled>Xóa</button>
                                                                        </i>
                                                            @endif
                                                            </form>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>

                                        </table>
                                </div>
                                {{ $items->onEachSide(5)->links() }}
                            </div>
                        </div>
                </section>
            </div>
        </div>
    </div>
@endsection
