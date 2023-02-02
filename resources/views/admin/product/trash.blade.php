@extends('admin.layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th colspan="2">STT</th>
                                    <th colspan="2">Tên sản phẩm</th>
                                    <th colspan="2">Giá</th>
                                    <th colspan="2">Số lượng</th>
                                    <th colspan="2">Thể loại</th>
                                    <th colspan="2">Nhà sản xuất</th>
                                    <th>Mô tả</th>
                                    <th colspan="2">Ảnh</th>
                                    <th colspan="2">Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $key => $item)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td colspan="2">{{ $item->name }}</td>
                                    <td colspan="2">{{ $item->price }}</td>
                                    <td colspan="2">{{ $item->quantity }}</td>
                                    <td colspan="2">{{ $item->category->name }}</td>
                                    <td colspan="2">{{ $item->manufacture }}</td>
                                    <td colspan="2">{{ $item->description }}</td>   
                                    <td>
                                        <img src="{{ asset('public/uploads/' . $item->image) }}" alt="" style="width: 100px">
                                    </td>
                                    <td colspan="2">
                                        <form action="{{ route('products.deleteforever',[$item->id]) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <button onclick="return confirm('Bạn có chắc chắn xóa không?');"
                                                class="btn btn-danger">Delete Forever</button>
                                            <a href="{{ route('products.restore',[$item->id]) }}" class="btn btn-primary">Restore</a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{route('products.index')}}" class="btn btn-info" >Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
