@extends('admin.layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <table class="table">
                            <thead>
                                <h2 style="text-align: center">Danh Sách Khách Hàng</h2>
                                <tr>
                                    <th colspan="2">id</th>
                                    <th colspan="2">Name</th>
                                    <th colspan="2">Address</th>
                                    <th colspan="2">Email</th>
                                    <th colspan="2">Phone</th>
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
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection