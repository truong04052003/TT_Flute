@extends('admin.layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <form action="{{ route('categories.update',[$items->id]) }}" method="post">
                            @method('PUT')
                            @csrf
                            <h2 style="text-align: center">Sửa</h2>
                            <div class="mb-3">
                                <label class="form-label">Tên thể loại</label>
                                <input type="text" value="{{$items->name}}" name="name" class="form-control">
                            </div>
                            @error('name')
                                <div class="alert alert-danger ">{{ $message }}</div>
                            @enderror
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{route('categories.index')}}" class="btn btn-info" >Thoát</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
