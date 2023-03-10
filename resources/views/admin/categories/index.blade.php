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
                                <div class="card-body"><br>
                                    <h2 style="text-align: center">Thể Loại Sản Phẩm</h2><br>

                                    <table class="table"style="text-align: center">
                                        @if (Auth::user()->hasPermission('Category_create'))
                                            <a href="{{ route('categories.create') }}" class="btn btn-primary">Thêm thể
                                                loại</a>
                                            <a href="{{ route('categories.trash') }}" class="btn btn-danger">Thùng rác</a>
                                        @else
                                            <i data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Bạn không có quyền làm điều này!">
                                                <button type="button" class="btn btn-primary" disabled>Thêm Loại Sản
                                                    Phẩm</button>
                                            </i>
                                        @endif
                                        <hr>
                                        <thead>
                                            <tr>
                                                <th colspan="2">STT</th>
                                                <th colspan="2">Tên thể loại</th>
                                                <th scope="col">Hiện có</th>
                                                <th colspan="2">Tùy chọn</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($items as $key => $item)
                                                <tr>
                                                    <th scope="row">{{ ++$key }}</th>
                                                    <td colspan="2">{{ $item->name }}</td>
                                                    <td colspan="2">{{ count($item->products) }} Sản phẩm</td>
                                                    <td colspan="2">
                                                        <form action="{{ route('categories.delete', $item->id) }}"
                                                            method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            @if (Auth::user()->hasPermission('Category_update'))
                                                                <a href="{{ route('categories.edit', [$item->id]) }}"
                                                                    class="btn btn-warning">Sửa</a>
                                                            @else
                                                                <i data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Bạn không có quyền làm điều này!">
                                                                    <button type="button" class="btn btn-warning"
                                                                        disabled>Sửa</button>
                                                                </i>
                                                            @endif
                                                            @if (Auth::user()->hasPermission('Category_delete'))
                                                                <button
                                                                    onclick="return confirm('Bạn có chắc chắn xóa không?');"
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
                                    {{ $items->onEachSide(5)->links() }}
                                </div>
                            </div>
                        </div>
                </section>
            </div>
        </div>
    </div>
@endsection
