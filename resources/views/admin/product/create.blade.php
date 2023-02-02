@extends('admin.layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <h2 style="text-align: center">Thêm Mới</h2>
                            <div class="mb-3">
                                <label class="form-label">Tên sản phẩm</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            @error('name')
                                <div class="alert alert-danger ">{{ $message }}</div>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label">Giá</label>
                                <input type="text" name="price" class="form-control">
                            </div>
                            @error('price')
                                <div class="alert alert-danger ">{{ $message }}</div>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label">Số lượng</label>
                                <input type="text" name="quantity" class="form-control">
                            </div>
                            @error('quantity')
                                <div class="alert alert-danger ">{{ $message }}</div>
                            @enderror
                            <div class="form-group col-4  ">
                                <label class="control-label" for="flatpickr01">Loại Sản Phẩm</label>
                                <select name="category_id" id="" class="form-control">
                                    <option value="">--Vui lòng chọn--</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="text text-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Nhà sản xuất</label>
                                <input type="text" name="manufacture" class="form-control">
                            </div>
                            @error('manufacture')
                                <div class="alert alert-danger ">{{ $message }}</div>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label">Mô tả</label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            @error('description')
                                <div class="alert alert-danger ">{{ $message }}</div>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label">Ảnh</label>
                                <input type="file" name="image" class="form-control">
                            </div>
                            @error('image')
                                <div class="alert alert-danger ">{{ $message }}</div>
                            @enderror
                            <br>
                            {{-- <img type="hidden" width="120px" height="120px" id="blah" src=""
                                alt="" /> --}}
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('categories.index') }}" class="btn btn-info">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
