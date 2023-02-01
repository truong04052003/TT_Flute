@extends('admin.layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <table class="table">
                            <a href="{{ route('products.create') }}" class="btn btn-primary">Add</a>
                            <a href="{{ route('products.trash') }}" class="btn btn-primary">Thùng Rác</a>
                            <thead>
                                <tr>
                                    <th colspan="2">id</th>
                                    <th colspan="2">Name</th>
                                    <th colspan="2">Price</th>
                                    <th colspan="2">Quantity</th>
                                    <th colspan="2">Category</th>
                                    <th colspan="2">Manufacture</th>
                                    <th>Description</th>
                                    <th colspan="2">Image</th>
                                    <th colspan="2">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $key => $item)
                                    <tr>
                                        <th scope="row">{{ ++$key }}</th>
                                        <td colspan="2">{{ $item->name }}</td>
                                        <td colspan="2">{{ $item->price }}</td>
                                        <td colspan="2">{{ $item->quantity }}</td>
                                        <td colspan="2">{{ $item->category->name }}</td>
                                        <td colspan="2">{{ $item->manufacture }}</td>
                                        <td colspan="2">{{ $item->description }}</td>
                                        <td>
                                            <img src="{{ asset('public/uploads/' . $item->image) }}" alt=""
                                                style="width: 100px">
                                        </td>
                                        
                                        <td colspan="2">
                                            <a href="{{ route('products.edit', [$item->id]) }}"
                                                class="btn btn-primary">Edit</a>
                                            <a href="{{ route('products.detail', [$item->id]) }}"
                                                class="btn btn-primary">Show</a>
                                                <form action="{{ route('products.delete', [$item->id]) }}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button onclick="return confirm('Bạn có chắc chắn xóa không?');"
                                                    class="btn btn-danger">Delete</button>
                                                </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
