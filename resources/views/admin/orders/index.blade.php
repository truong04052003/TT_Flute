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
                                    <table class="table"style="text-align: center">
                                        <thead><br>
                                            <h2 style="text-align: center">Danh Sách Đơn Hàng</h2>  
                                            <a href="{{ route('orders.export') }}" class="btn btn-info">Xuất file excel</a><br><br>

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
                                                <td colspan="2">{{ $item->status }}</td>
                                                <td colspan="2">
                                                    <a href="{{ route('orders.detail', [$item->id]) }}"
                                                        class="btn btn-info">Chi tiết</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                        </tbody>
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
