@extends('admin.layouts.master')
@section('content')
<div class="page-wrapper">
    <div class="page-container">
        <div class="main-content">
            <div class="section__content section__content--p30">
                <div class="container-fluid">
                    <table class="table">
                        <thead>
                            <h2 style="text-align: center">Danh Sách Đơn Hàng</h2>
                            <tr>
                                <th colspan="2">id</th>
                                <th colspan="2">Name</th>
                                <th colspan="2">Email</th>
                                <th colspan="2">Note</th>
                                <th colspan="2">Status</th>
                                <th colspan="2">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $key => $item)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td colspan="2">{{ $item->customer->name }}</td>
                                    <td colspan="2">{{ $item->customer->email }}</td>
                                    <td colspan="2">{{ $item->note }}</td>
                                    <td colspan="2">{{ $item->status }}</td>
                                    <td colspan="2">
                                        <a href="{{ route('orders.detail',[$item->id]) }}" class="btn btn-info">Show</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection