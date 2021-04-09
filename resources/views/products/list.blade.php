@extends('master')
@section('content')
    <div class="col-12">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">image</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $key => $product)
            <tr>
                <th scope="row">{{++$key}}</th>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->category->name}}</td>
                <td><img src="{{'/storage/'. $product->image}}" alt="" width="50px" height="50px"></td>
                <td>
                    <a href="{{route('product.edit', $product->id)}}">update</a> |
                    <a href="{{route('product.delete', $product->id)}}" onclick="return confirm('delete product name: {{$product->name}}')">delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
