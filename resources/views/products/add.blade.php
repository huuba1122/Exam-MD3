@extends('master')
@section('content')
    <div class="col-md-12 mt-3">
        <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name" >

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Price</label>
                <input type="text" class="form-control" name="price">
            </div>
            <div class="form-group">
                <label >Image</label>
                <input type="file" class="form-control-file" name="image">
            </div>
            <div class="form-group">
                <label>Categories</label>
                <select class="form-control" name="category_id">
                    <option value="">choose category</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
