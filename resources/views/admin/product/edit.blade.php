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
                                    <form action="{{ route('products.update', [$items->id]) }}" method="post"
                                        enctype="multipart/form-data">
                                        @method('put')
                                        @csrf
                                        <h2 style="text-align: center">Chỉnh Sửa</h2>
                                        <div class="mb-3">
                                            <label class="form-label">Tên</label>
                                            <input type="text" value="{{ $items->name }}" name="name"
                                                class="form-control">
                                        </div>
                                        @error('name')
                                            <div class="alert alert-danger ">{{ $message }}</div>
                                        @enderror

                                        <div class="mb-3">
                                            <label class="form-label">Giá</label>
                                            <input type="text" value="{{ $items->price }}" name="price"
                                                class="form-control">
                                        </div>
                                        @error('price')
                                            <div class="alert alert-danger ">{{ $message }}</div>
                                        @enderror
                                        <div class="mb-3">
                                            <label class="form-label">Số lượng</label>
                                            <input type="text" value="{{ $items->quantity }}" name="quantity"
                                                class="form-control">
                                        </div>
                                        @error('quantity')
                                            <div class="alert alert-danger ">{{ $message }}</div>
                                        @enderror


                                        <div class="form-group col-4  ">
                                            <label class="control-label" for="flatpickr01">Loại sản phẩm</label>
                                            <select name="category_id" id="" class="form-control">

                                                <option value="">--Vui lòng chọn--</option>
                                                @foreach ($categories as $category)
                                                <option <?= $category->id == $product->category_id ? 'selected' : '' ?>
                                                    value="{{ $category->id }}">
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                            </select>
                                            @error('category_id')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div><br>

                                        <div class="form-group col-4  ">
                                            <label class="control-label" for="flatpickr01">Nhà sản xuất</label>
                                            <select name="supplier_id" id="" class="form-control">
                                                <option value="">--Vui lòng chọn--</option>
                                                @foreach ($suppliers as $supplier)
                                                    <option <?= $supplier->id == $product->supplier_id ? 'selected' : '' ?>
                                                        value="{{ $supplier->id }}">
                                                        {{ $supplier->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div><br>

                                        <div class="mb-3">
                                            <label class="form-label">Mô tả</label>
                                            <textarea name="description" type="text" class="form-control" value="{{ $items->description }}" rows="4"
                                                style="resize: none">{!! $items->description !!}</textarea>
                                        </div>
                                        @error('description')
                                            <div class="alert alert-danger ">{{ $message }}</div>
                                        @enderror
                                        <div class="mb-3">
                                            <label for="inputCity" class="form-label">Ảnh</label>
                                            <input accept="image/*" type='file' id="inputFile" name="image"
                                                value="{{ $items->image }}"
                                                class="form-control @error('image') is-invalid @enderror"><br>
                                            @error('image')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                            <br>
                                            <img type="hidden" width="120px" height="120px" id="blah1"
                                                src="{{ asset('public/uploads/' . $items->image) }}" alt="" />

                                        </div>
                                        @error('name')
                                            <div class="alert alert-danger ">{{ $message }}</div>
                                        @enderror

                                        <div class="mb-3">
                                            <label for="file_name"><b>Hình ảnh liên quan</b></label>
                                            <div class="card_file_name">
                                                <div
                                                    class="form-group form_input @error('file_names') border border-danger @enderror">
                                                    <input type="file" name="file_names[]" id="file_name" multiple
                                                        class="form-control  @error('file_name') is-invalid @enderror">
                                                    <span class="inner">
                                                        <span class="select" style="color:red">Ctrl + click</span>
                                                    </span>
                                                </div>
                                                <div class="container_image">
                                                    @error($errors->any())
                                                        <p style="color:red">*{{ $errors->first('file_name') }}</p>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>


                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="{{ route('products.index') }}" class="btn btn-info">Back</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                </section>
            </div>
        </div>
    </div>
    <script src="{{ asset('admin/vendor/jquery-3.2.1.min.js') }}"></script>

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
@endsection
