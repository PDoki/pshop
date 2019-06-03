@extends('master')

@section('main_content')

<div class="container mt-5">
    <div class="row text-center">
    <h2>{{$products[0]->ctitle}}</h2>
    </div>
    <div class="row">                
                @foreach ($products as $product)
                <div class="item col-sm-4">
                <img width="300px" height="420px" src="{{asset('images/' . $product->pimage)}}" alt="{{$product->ptitle}} image">
                        <div class="category-text">
                        <h4 class="text-uppercase">{{$product->ptitle}}</h4>
                        <p>{!! $product->particle !!}</p>
                        <p><b>Price on site:</b> ${{$product->price}}</p>
                        </div>
                        <a href="{{url('shop/'. $product->curl . '/' . $product->purl)}}" class="btn btn-warning">View item</a>
                    @if (! Cart::get($product->id))
                    <button data-id="{{$product->id}}" class="btn-add-to-cart btn btn-success" type="button">+ Add To Cart</button>
                    @else
                    <button disabled="disabled" class="btn-add-to-cart btn btn-success" type="button">In Cart</button>
                    @endif
                </div>
                @endforeach
                {{$products->links()}}
            
            
    </div>
</div>
		


@endsection