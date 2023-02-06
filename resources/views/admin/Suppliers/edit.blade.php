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
                                <li class="breadcrumb-item"><a href="{{ route('suppliers.index') }}">Nhà Cung Cấp</a></li>
                                <li class="breadcrumb-item"> Sửa nhà cung cấp</a></li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Sửa Nhà Cung Cấp</h5>
                            <form action="{{ route('suppliers.update', $item->id) }}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="col-md-10">
                                    <label for="inputName5" class="form-label">Tên nhà cung cấp</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="inputName5" name='name' value="{{ old('name') ?? $item->name }}">
                                    @error('name')
                                        <div class="text text-danger">{{ $message }}</div>
                                    @enderror

                                    <div class="row g-3">
                                        <div class="col-md-12">
                                            <label for="inputEmail5" class="form-label">Email</label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                name='email' id="inputName5" value="{{ old('email') ?? $item->email }}">
                                            @error('email')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputPassword5" class="form-label">Địa chỉ</label>
                                            <input type="text"
                                                class="form-control @error('address') is-invalid @enderror" name='address'
                                                id="inputName5" value="{{ old('address') ?? $item->address }}">
                                            @error('address')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="col-md-12">
                                            <label for="inputPassword5" class="form-label">Số điện thoại</label>
                                            <input type="text" class="form-control @error('phone') is-invalid @enderror"
                                                name='phone' id="inputName5" value="{{ old('phone') ?? $item->phone }}">
                                            @error('phone')
                                                <div class="text text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div><br>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    
                                    <a href="{{ route('suppliers.index') }}" class="btn btn-info">Back</a>
                                </div>
                            </form>

                        </div>
                    </div>
            </div>
            </main>
        </div>
    </div>
    </div>
@endsection
