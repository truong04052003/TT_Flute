@extends('admin.layouts.master')
@section('content')
    <div class="page-container">
        <div class="main-content">
            <div class="container">
                <section class="section">
                    <div class="row">
                        <ul class="nav nav-tabs nav-tabs-bordered">
                            <li class="nav-item offset-8">
                                <a href="{{ route('orders.index') }}" class="nav-link">Tất cả</a>
                            </li>
                            <li class="nav-item ">
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
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <table class="table datatable">
                                    <h2 style="text-align: center">Danh Sách Đơn Hàng</h2><br><br>

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
                                            @foreach ($orderBrowser as $key => $browser)
                                                <tr>
                                                    <th scope="row">{{ ++$key }}</th>
                                                    <td>{{ $browser->customer->name }}</td>
                                                    <td>{{ $browser->customer->phone }}</td>
                                                    <td>{{ $browser->note }}</td>
                                                    <td>
                                                        @if ($browser->status === 0)
                                                            <h4 style="color: rgb(1, 48, 255)"><i>Chờ duyệt</i></h4>
                                                        @endif
                                                        @if ($browser->status === 1)
                                                            <h4 style="color: green"><i>Đã Duyệt</i></h4>
                                                        @endif
                                                        @if ($browser->status === 2)
                                                            <h4 style="color: red"><i>Hủy Đơn</i>
                                                            </h4>
                                                        @endif
                                                    </td>
                                                    <td><a class='btn btn-warning'
                                                            href="{{ route('orders.show', $browser->id) }}">Chi
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
