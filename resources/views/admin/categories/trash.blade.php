@extends('admin.layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <table class="table">
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
                                        <th scope="row">{{ $key++ }}</th>
                                        <td colspan="2">{{ $item->name }}</td>
                                        <td colspan="2">
                                            <form action="{{ route('categories.deleteforever', $item->id) }}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <a href="{{ route('categories.restore',[$item->id]) }}" class="btn btn-primary">Khôi phục</a>
                                                <button onclick="return confirm('Bạn có chắc chắn xóa không?');"
                                                    class="btn btn-danger">Xóa vĩnh viễn</button>
                                            </form>
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
