{{-- @extends('admin.layouts.master') --}}
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
</head>
<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="card">
    <br>
    <h2 class="offset-4">
        Chỉnh sửa thông tin người dùng
    </h2>
    <br>
    <main></main>
    <div class="card-body">
        <form action="{{ route('users.update', $users->id) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="tf1">Email<abbr name="Trường bắt buộc">*</abbr></label>
                        <input name="email" type="text" class="form-control" value="{{ $users->email }}">
                        <small id="" class="form-text text-muted"></small>
                        @error('email')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                </div>

                <div class="col-lg-8">
                    <div class="form-group">
                        <label for="tf1">Họ Và Tên<abbr name="Trường bắt buộc">*</abbr></label>
                        <input name="name" type="text" class="form-control" value="{{ $users->name }}">
                        <small id="" class="form-text text-muted"></small>
                        @error('name')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="tf1">Số Điện Thoại<abbr name="Trường bắt buộc">*</abbr></label> <input
                            name="phone" type="number" class="form-control" value="{{ $users->phone }}">
                        <small id="" class="form-text text-muted"></small>
                        @error('phone')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                </div>
                <div class="form-group col-lg-4">
                    <label class="control-label" for="flatpickr01">Chức Vụ<abbr name="Trường bắt buộc">*</abbr></label>
                    <select name="group_id" id="" class="form-control">
                        @foreach ($groups as $group)
                            <option <?= $group->id == $users->group_id ? 'selected' : '' ?> value="{{ $group->id }}">
                                {{ $group->name }}</option>
                        @endforeach
                    </select>
                    @error('group_id')
                        <div class="text text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group col-lg-4">
                    <label class="control-label" for="flatpickr01">Giới Tính<abbr
                            name="Trường bắt buộc">*</abbr></label>
                    <select name="gender" id="" class="form-control">
                        <option value="{{ $users->gender }}">{{ $users->gender }}</option>


                        @if ($users->gender !== 'Nam')
                            <option value="Nam">Nam</option>
                        @endif
                        @if ($users->gender !== 'Nữ')
                            <option value="Nữ">Nữ</option>
                        @endif
                        @if ($users->gender !== 'Khác')
                            <option value="Khác">Khác</option>
                        @endif

                    </select>
                    @if ('gender')
                        <p style="color:red">{{ $errors->first('gender') }}</p>
                    @endif

                </div>

                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="tf1">Ngày sinh<abbr name="Trường bắt buộc">*</abbr></label> <input
                            name="birthday" type="date" class="form-control" value="{{ $users->birthday }}">
                        <small id="" class="form-text text-muted"></small>
                        @error('birthday')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="tf1">Địa chỉ chi tiết<abbr name="Trường bắt buộc">*</abbr></label> <input
                            name="address" type="text" class="form-control" value="{{ $users->address }}">
                        <small id="" class="form-text text-primary">Ví dụ: Số 20/Hai Bà Trưng... </small>
                        @error('address')
                            <div class="text text-danger">{{ $message }}</div>
                        @enderror
                        <br>
                    </div>
                    <br>
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Ảnh đại diện*</label>
                    <input accept="image/*" type='file' id="inputFile" name="image" class="form-control"
                        placeholder="{{ $users->image }}"><br>
                    <img type="hidden" width="150px" height="150px" id="blah1"
                        src="{{ asset($users->image) ?? asset($users->image) }}" alt="" />
                    @error('image')
                        <div class="text text-danger">{{ $message }}</div>
                    @enderror
                    <br>
                </div>
                <div class="form-actions">
                    <br><br><br><br>
                    <button class="btn btn-primary" type="submit">Lưu thay đổi</button>
                    <a class="btn btn-danger" href="{{ route('users.index') }}">Hủy</a>
                </div>
            </div>
        </form>
    </div>
    <script type="text/javascript">
        $(function() {
            $(document).on('change', '.province_id', function() {
                var province_id = $(this).val();
                var district_name = $('.district_id').find('option:selected').text();
                console.log(district_name);
                console.log(province_id);
                if (province_id == '') {
                    $('#province_id').notify("Lỗi:Địa chỉ không được để trống", {
                        globalPosition: 'top left',
                    });
                    return false;
                }

            });
        });
    </script>

    <script>
        jQuery(document).ready(function() {
            if ($('#blah').hide()) {
                $('#blah').hide();
            }
            jQuery('#inputFile').change(function() {
                $('#blah').show();
                const file = jQuery(this)[0].files;
                if (file[0]) {
                    jQuery('#blah').attr('src', URL.createObjectURL(file[0]));
                    jQuery('#blah1').attr('src', URL.createObjectURL(file[0]));
                }
            });
        });
    </script>
    {{-- @endsection --}}
</body>
</html>

