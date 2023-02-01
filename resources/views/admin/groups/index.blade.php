@extends('admin.layouts.master')
{{-- @section('content') --}}
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
                                    <h2 class="offset-4">
                                        Nhóm Quyền
                                    </h2>
                                    <a class="btn btn-primary" href="{{ route('group.create') }}"> Thêm Nhóm Quyền </a>
                                    <a class="btn btn-primary" href="{{ route('group.trash') }}"> Thùng rác </a>
                                    <table class="table">
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
                                                        <form action="{{ route('group.destroy', $group->id) }}"
                                                            method="post">
                                                            @method('DELETE')
                                                            @csrf
                                                            <a href="{{ route('group.detail', $group->id) }}"
                                                                class='btn btn-info'>
                                                                Trao quyền </a>

                                                            <a href="{{ route('group.edit', $group->id) }}"
                                                                class='btn btn-warning'>
                                                                Sửa </a>
                                                            <i data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Bạn không có quyền làm điều này!">
                                                                {{-- <button type="button" class="btn btn-warning" disabled>Sửa</button> --}}
                                                            </i>

                                                            <a data-href="{{ route('group.destroy', $group->id) }}"
                                                                id="{{ $group->id }}"
                                                                class="btn btn-danger sm deleteIcon">Xóa</a>
                                                            <i data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Bạn không có quyền làm điều này!">

                                                            </i>

                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div style="float:right">
                                        {{-- {{ $groups->onEachSide(5)->links() }} --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    {{-- @endsection --}}


</body>

</html>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
{{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script> --}}
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).on('click', '.deleteIcon', function(e) {
        // e.preventDefault();
        let id = $(this).attr('id');
        let href = $(this).data('href');
        let csrf = '{{ csrf_token() }}';
        console.log(id);
        Swal.fire({
            title: 'Bạn có chắc không?',
            text: "Bạn sẽ không thể hoàn nguyên điều này!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Có, xóa!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: href,
                    method: 'delete',
                    data: {
                        _token: csrf
                    },
                    success: function(res) {
                        Swal.fire(
                            'Deleted!',
                            'Tệp của bạn đã bị xóa!',
                            'success'
                        )
                        $('.item-' + id).remove();
                    }
                })
                window.location.reload();
            }
        })
    });
</script>
