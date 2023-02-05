@extends('admin.layouts.master')
@section('content')
    <div class="page-container">
        <div class="main-content">
            <div class="container">
                <section class="section">
                    <div class="row">
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            <li class="nav-item offset-8">
                                <a href="{{ route('orders.index') }}" class="nav-link">Tất Cả</a>
                            </li>
                            <li class="nav-item ">
                                <a href="{{ route('orders.wait') }}" class="nav-link">Chờ
                                    Duyệt</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('orders.browser') }}" class="nav-link">Đã
                                    Duyệt</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('orders.cancel') }}" class="nav-link">Đã
                                    Hủy</a>
                            </li>
                        </ul>
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th scope="col">STT</th>
                                                <th scope="col">Tên Khách Hàng</th>
                                                <th scope="col">Số Điện Thoại</th>
                                                <th scope="col">Ghi Chú</th>
                                                <th scope="col">Trạng Thái</th>
                                                <th scope="col">Duyệt</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orderWait as $key => $wait)
                                                <tr>
                                                    <th scope="row">{{ ++$key }}</th>
                                                    <td>{{ $wait->customer->name }}</td>
                                                    <td>{{ $wait->customer->phone }}</td>
                                                    <td>{{ $wait->note }}</td>
                                                    <td>
                                                        @if ($wait->status === 0)
                                                            <h4 style="color: rgb(1, 48, 255)">Chờ duyệt</h4>
                                                        @endif
                                                        @if ($wait->status === 1)
                                                            <h4 style="color: green">Đã Duyệt</h4>
                                                        @endif
                                                        @if ($wait->status === 2)
                                                            <h4 style="color: red">Hủy Đơn</h4>
                                                        @endif
                                                    </td>
                                                    <td><a class='btn btn-warning'
                                                            href="{{ route('orders.show', $wait->id) }}">Chi
                                                            tiết</a></td>
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
