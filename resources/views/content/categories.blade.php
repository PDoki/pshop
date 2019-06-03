@extends('master')

@section('main_content')

<div class="container mt-5 text-center">

                <div class="row">
                
                @foreach ($categories as $category)
                <div class="item">
                        <div class="col-lg-4">
                               <img width="150px" src="{{ asset('images/' . $category['cimage'])}}" alt="">
                                <h4 class="text-uppercase">{{$category['ctitle']}}</h4>
                                <div class="category-text">
                                <p>{!! $category['carticle'] !!}</p>
                                </div>
                                <div class="btn-group">
                                <a class="btn btn-success" href="{{url('shop/' . $category['curl'])}}">View details &raquo;</a>
                                </div>
                        </div>
                </div>
                @endforeach
            
                </div>


@endsection