@extends('master')
@section('main_content')

<div class="container mt-5 text-center">


    <div class="row">
        <div class="col-12">
        @if(count($products))
                @foreach ($products as $product)
                <div class="col-md-4">
                               <img src="{{ asset('images/' . $product->pimage)}}" alt="{{$product->ptitle}} image" height="150px">
                                <h4 class="text-uppercase">{{$product->ptitle}}</h4>
                                <div class="category-text">
                                <p>{!! $product->particle !!}</p>
                                </div>
                            <div class="btn-group">
                                <a class="btn btn-success" href="{{url('shop/'. $product->curl . '/' . $product->purl)}}">View details &raquo;</a>
                        </div>
                </div>
            
                @endforeach
                @else
                <h2>Sorry, there is no such a monster in our shop</h2>
                @endif
            </div>
        </div>
    </div>


@endsection