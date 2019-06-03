@extends('master')
@section('main_content')
    
<div class="container">
    <div class="row">
    @foreach($contents as $content)
    <div class="col-12">
        <h3>{{$content->title}}</h3>
        <p>{!! $content->article !!}</p>
    </div>
    @endforeach
    </div>
</div>

@endsection