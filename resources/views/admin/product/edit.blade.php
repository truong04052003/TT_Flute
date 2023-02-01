@extends('admin.layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <form action="{{ route('products.update',[$items->id]) }}" method="post" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <h2 style="text-align: center">EDIT</h2>
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" value="{{$items->name}}" name="name" class="form-control">
                            </div>
                            @error('name')
                                <div class="alert alert-danger ">{{ $message }}</div>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label">Price</label>
                                <input type="text" value="{{$items->price}}" name="price" class="form-control">
                            </div>
                            @error('price')
                                <div class="alert alert-danger ">{{ $message }}</div>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label">Quantity</label>
                                <input type="text" value="{{$items->quantity}}" name="quantity" class="form-control">
                            </div>
                            @error('quantity')
                                <div class="alert alert-danger ">{{ $message }}</div>
                            @enderror
                            <div  class="form-select form-select-lg mb-3">
                                    <label >Loại Sản Phẩm</label>
                                    <select name="category_id" >
                                    </option>
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
                            </div>
                            
                            <div class="mb-3">
                                <label class="form-label">Manufacture</label>
                                <input type="text" value="{{$items->manufacture}}" name="manufacture" class="form-control">
                            </div>
                            @error('manufacture')
                                <div class="alert alert-danger ">{{ $message }}</div>
                            @enderror

                            <div class="mb-3">
                                <label class="form-label">Description</label>
                                <input type="text" value="{{$items->description}}" name="description" class="form-control">
                            </div>
                            @error('description')
                                <div class="alert alert-danger ">{{ $message }}</div>
                            @enderror
                            <div class="mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" value="{{$items->image}}" name="image" class="form-control">
                            </div>
                            @error('name')
                                <div class="alert alert-danger ">{{ $message }}</div>
                            @enderror
                            
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{route('products.index')}}" class="btn btn-info" >Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
