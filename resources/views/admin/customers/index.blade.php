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
                                        <thead>
                                            <h2 style="text-align: center">Danh Sách Khách Hàng</h2>
                                            <tr>
                                                <th colspan="2">STT</th>
                                                <th colspan="2">Tên khách hàng</th>
                                                <th colspan="2">Địa chỉ</th>
                                                <th colspan="2">Email</th>
                                                <th colspan="2">Số điện thoại</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($items as $key => $item)
                                                <tr>
                                                    <th scope="row">{{ ++$key }}</th>
                                                    <td colspan="2">{{ $item->name }}</td>
                                                    <td colspan="2">{{ $item->address }}</td>
                                                    <td colspan="2">{{ $item->email }}</td>
                                                    <td colspan="2">{{ $item->phone }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
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
