@extends('admin.layouts.master')
@section('content')
@include('admin.orders.advanceSearch')

    <div class="page-container">
        <div class="main-content">
            <div class="container">
                <section class="section">
                    <div class="row">
                      
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <table class="table">
                                        <thead>
                                            <h2 style="text-align: center">Danh Sách Đơn Hàng</h2><br>
                                            <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#searchModal">Tìm chi tiết</button>
                                            <a href="{{ route('orders.export') }}" class="btn btn-info">Xuất file excel</a><hr>
                                            <ul class="nav nav-tabs nav-tabs-bordered">
                                                <li class="nav-item offset-7">
                                                    <a href="{{ route('orders.index') }}" class="nav-link">Tất cả</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ route('orders.wait') }}" class="nav-link">Chờ
                                                        duyệt</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ route('orders.browser') }}" class="nav-link">Đã
                                                        duyệt</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ route('orders.cancel') }}" class="nav-link">Đã
                                                        hủy</a>
                                                </li>
                                            </ul>
                                            <tr>
                                                <th colspan="2">STT</th>
                                                <th colspan="2">Tên</th>
                                                <th colspan="2">Email</th>
                                                <th colspan="2">Ngày giao</th>
                                                <th colspan="2">Trạng thái</th>
                                                <th colspan="2">Tùy chọn</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($items as $key => $item)
                                                <tr>
                                                    <th scope="row">{{ ++$key }}</th>
                                                    <td colspan="2">{{ $item->customer->name }}</td>
                                                    <td colspan="2">{{ $item->customer->email }}</td>
                                                    <td colspan="2">{{ $item->note }}</td>
                                                    <td colspan="2">
                                                        @if ($item->status === 0)
                                                            <h5 style="color: rgb(1, 48, 255)">Chờ duyệt</h5>
                                                        @endif
                                                        @if ($item->status === 1)
                                                            <h5 style="color:green">Đã duyệt</h5>
                                                        @endif
                                                        @if ($item->status === 2)
                                                            <h5 style="color: red">Hủy đơn</h5>
                                                        @endif
                                                    </td>
                                                    <td colspan="2">
                                                        <a href="{{ route('orders.detail', [$item->id]) }}"
                                                            class="btn btn-info">Chi tiết</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                    </table>
                                    {{ $items->onEachSide(5)->links() }}
                                </div>
                            </div>
                        </div>
                </section>
            </div>
        </div>
    </div>
@endsection
