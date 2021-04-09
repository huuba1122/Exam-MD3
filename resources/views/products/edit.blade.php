@extends('master')
@section('content')
    <div class="col-md-12 mt-3">
        <form action="{{route('product.update', $product->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="{{$product->name}}">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Price</label>
                <input type="text" class="form-control" name="price" value="{{$product->price}}">
            </div>
            <div class="form-group">
                <label >Image</label>
                <input type="file" class="form-control-file" name="image">
                <img src="{{'/storage/'.$product->image}}" alt="" style="width: 100px; height: 120px">
            </div>
            <div class="form-group">
                <label>Categories</label>
                <select class="form-control" name="category_id">
                    <option value="">choose category</option>
                    @foreach($categories as $category)
                        <option
                            @if($product->category_id == $category->id)
                                selected
                                @endif
                            value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
