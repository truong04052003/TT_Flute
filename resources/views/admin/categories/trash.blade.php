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
                                <div class="card-body">
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
                                    <a href="{{route('categories.index')}}" class="btn btn-info" >Back</a>
                                </div>
                            </div>
                        </div>
                </section>
            </div>
        </div>
    </div>
@endsection

