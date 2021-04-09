@extends('master')
@section('content')
    @foreach($products as $product)
        <div class="card col-2 mr-3">
            <a href=""><img class="card-img-top" src="{{'/storage/'.$product->image}}" alt="Card image cap"></a>
            <div class="card-body text-center">
                <h5 class="card-title">{{$product->name}}</h5>
                <h6 class="card-title">{{$product->category->name}}</h6>
                <p class="card-text">{{$product->price}}</p>
            </div>
        </div>
    @endforeach
@endsection
