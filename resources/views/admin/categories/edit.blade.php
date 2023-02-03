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
                </section>
            </div>
        </div>
    </div>
@endsection


