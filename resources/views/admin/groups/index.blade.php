@extends('admin.layouts.master')
@section('content')
@include('sweetalert::alert')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="page-container">
        <div class="main-content">
            <div class="container">
                <section class="section">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <br>
                                    <h2 style="text-align: center">
                                        Danh Sách Quyền
                                    </h2><br>
                                    @if (Auth::user()->hasPermission('Group_create'))
                                        <a class="btn btn-primary" href="{{ route('group.create') }}"> Thêm Nhóm Quyền
                                            <a class="btn btn-danger" href="{{ route('group.trash') }}"> Thùng rác </a><hr>
                                        @else
                                            <button type="button" class="btn btn-primary" disabled>Thêm Nhóm
                                                Quyền</button>
                                    @endif
                                    </a>
                                    <table class="table" style="text-align: center">
                                        <thead>
                                            <tr>
                                                <th scope="col">STT</th>
                                                <th scope="col">Tên Nhóm Quyền</th>

                                                <th scope="col">Hiện có</th>

                                                <th scope="col">Tùy Chọn</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($groups as $key => $group)
                                                <tr>
                                                    <th scope="row">{{ ++$key }}</th>
                                                    <td>{{ $group->name }}</td>
                                                    <td>{{ count($group->users) }} Người</td>
                                                    <td>
                                                      
                                                            @if (Auth::user()->hasPermission('Group_create'))
                                                                <a href="{{ route('group.detail', $group->id) }}"
                                                                    class='btn btn-info'>
                                                                    Trao quyền </a>
                                                            @else
                                                                <button type="button" class="btn btn-info"
                                                                    disabled>Trao quyền</button>
                                                            @endif
                                                            @if (Auth::user()->hasPermission('Group_update'))
                                                                <a href="{{ route('group.edit', $group->id) }}"
                                                                    class='btn btn-warning'>
                                                                    Sửa </a>
                                                            @else
                                                                <i data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Bạn không có quyền làm điều này!">
                                                                    <button type="button" class="btn btn-warning"
                                                                        disabled>Sửa</button>
                                                                </i>
                                                            @endif
                                                            @if (Auth::user()->hasPermission('Group_delete'))
                                                                    <a href="">
                                                                        <form action="{{route('group.destroy', $group->id)}}" method="post">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button
                                                                            onclick="return confirm('Bạn có chắc chắn xóa không?');"
                                                                            class="btn btn-danger">Xóa</button>
                                                                        </form>
                                                                    </a>
                                                            @else
                                                                <i data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Bạn không có quyền làm điều này!">
                                                                    <button type="button" class="btn btn-danger"
                                                                        disabled>Xóa</button>
                                                                </i>
                                                            @endif

                                                       
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    {{ $groups->onEachSide(5)->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
              
            </div>
        </div>
    </div>
    @endsection
</body>

</html>