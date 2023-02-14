@extends('admin.layouts.master')
@section('content')
    @include('sweetalert::alert')
    <div class="page-container">
        <div class="main-content">
            <div class="container">
                <main id="main" class="main">
                    <div class="pagetitle">
                        <h1 class="mb-1">Nhà Cung Cấp</h1>
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                <li class="breadcrumb-item">Nhà Cung Cấp</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h2 style="text-align: center">Danh Sách Nhà Cung Cấp</h2>
                            @if (Auth::user()->hasPermission('Supplier_create'))
                                <a class='btn btn-primary mb-2' href="{{ route('suppliers.create') }}">Thêm nhà cung cấp</a>
                                <a class='btn btn-secondary mb-2 float-right'
                                    href="{{ route('suppliers.getTrashed') }}">Thùng
                                    rác</a>
                            @else
                                <button type="button" class="btn btn-primary" disabled>Thêm nhà cung cấp</button>
                            @endif

                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">STT</th>
                                        <th scope="col">Tên</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Địa chỉ</th>
                                        <th scope="col">Số điện thoại</th>
                                        <th scope="col">Tùy chọn</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($suppliers as $key => $supplier)
                                        <tr>
                                            <th scope="row">{{ $key + 1 }}</th>
                                            <td>{{ $supplier->name }}</td>
                                            <td>{{ $supplier->email }}</td>
                                            <td>{{ $supplier->address }}</td>
                                            <td>{{ $supplier->phone }}</td>
                                            <td>
                                                <form action="{{ route('suppliers.destroy', $supplier->id) }}"
                                                    method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    @if (Auth::user()->hasPermission('Supplier_update'))
                                                        <a href="{{ route('suppliers.edit', [$supplier->id]) }}"
                                                            class="btn btn-warning">Sửa</a>
                                                    @else
                                                        <i data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Bạn không có quyền làm điều này!">
                                                            <button type="button" class="btn btn-warning"
                                                                disabled>Sửa</button>
                                                        </i>
                                                    @endif
                                                    @if (Auth::user()->hasPermission('Supplier_delete'))
                                                        <button onclick="return confirm('Bạn có chắc chắn xóa không?');"
                                                            class="btn btn-danger">Xóa</button>
                                                    @else
                                                        <i data-bs-toggle="tooltip" data-bs-placement="top"
                                                            title="Bạn không có quyền làm điều này!">
                                                            <button type="button" class="btn btn-danger"
                                                                disabled>Xóa</button>
                                                        </i>
                                                    @endif
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $suppliers->onEachSide(5)->links() }}
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
@endsection
