@extends('admin.layouts.master')
@section('content')

    <div class="page-wrapper">
        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <table class="table">
                            @if (Auth::user()->hasPermission('Category_create'))
                                <a href="{{ route('categories.create') }}" class="btn btn-primary">Thêm thể loại</a>
                            @else
                                <i data-bs-toggle="tooltip" data-bs-placement="top" title="Bạn không có quyền làm điều này!">
                                    <button type="button" class="btn btn-primary" disabled>Thêm thể loại</button>
                                </i>
                            @endif
                            <a href="{{ route('categories.trash') }}" class="btn btn-danger">Thùng Rác</a>
                            <thead>
                                <tr>
                                    <th colspan="2">STT</th>
                                    <th colspan="2">Tên thể loại</th>
                                    <th colspan="2">Tùy chọn</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $key => $item)
                                    <tr>
                                        <th scope="row">{{ ++$key }}</th>
                                        <td colspan="2">{{ $item->name }}</td>
                                        <td colspan="2">
                                            <form action="{{ route('categories.delete', $item->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                @if (Auth::user()->hasPermission('Category_update'))
                                                    <a href="{{ route('categories.edit', [$item->id]) }}"
                                                        class="btn btn-warning">Sửa</a>
                                                @else
                                                    <i data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Bạn không có quyền làm điều này!">
                                                        <button type="button" class="btn btn-warning" disabled>Sửa</button>
                                                    </i>
                                                @endif
                                                @if (Auth::user()->hasPermission('Category_delete'))
                                                    <button onclick="return confirm('Bạn có chắc chắn xóa không?');"
                                                        class="btn btn-danger">Xóa</button>
                                                @else
                                                    <i data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Bạn không có quyền làm điều này!">
                                                        <button type="button" class="btn btn-danger" disabled>Xóa</button>
                                                    </i>
                                                @endif
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>

