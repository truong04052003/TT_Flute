@extends('admin.layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="page-container">
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <table class="table">
                            <a href="{{ route('categories.create') }}" class="btn btn-primary">Add</a>
                            <thead>
                                <tr>
                                    <th colspan="2">id</th>
                                    <th colspan="2">Name</th>
                                    <th colspan="2">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $key => $item)
                                    <tr>
                                        <th scope="row">{{ $key++ }}</th>
                                        <td colspan="2">{{ $item->name }}</td>
                                        <td colspan="2">
                                            <a href="" class="btn btn-danger">Edit</a>
                                            <a href="" class="btn btn-info">Delete</a>
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
