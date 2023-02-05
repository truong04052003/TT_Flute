@extends('admin.layouts.master')
@section('content')
    @include('sweetalert::alert')
    <div class="page-container">
        <div class="main-content">
            <div class="container">
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h2 style="text-align: center">Thùng rác</h2><br>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">STT</th>
                                                <th colspan="2">Tên sản phẩm</th>
                                                <th colspan="2">Giá</th>
                                                <th>Thể loại</th>
                                                <th>Ảnh</th>
                                                <th>Tùy chọn</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($items as $key => $item)
                                                <tr>
                                                    <th scope="row">{{ ++$key }}</th>
                                                    <td colspan="2">{{ $item->name }}</td>
                                                    <td colspan="2">{{ $item->price }}</td>
                                                    <td colspan="2">{{ $item->category->name }}</td>
                                                    <td>
                                                        <img src="{{ asset('public/uploads/' . $item->image) }}"
                                                            alt="" style="width: 100px">
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('products.deleteforever', [$item->id]) }}"
                                                            method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button onclick="return confirm('Bạn có chắc chắn xóa không?');"
                                                                class="btn btn-danger">Xóa vĩnh viễn</button>
                                                            <a href="{{ route('products.restore', [$item->id]) }}"
                                                                class="btn btn-primary">Khôi phục</a>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <a href="{{ route('products.index') }}" class="btn btn-info">Back</a>
                                </div>
                            </div>
                        </div>
                </section>
            </div>
        </div>
    </div>
@endsection
