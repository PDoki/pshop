@extends('cms.cms_master')
@section('main_cms_content')

<div class="mt-3 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Contant Form</h1>
    <p><a class="btn btn-warning text-light" href="{{url('cms/content')}}"><i class="fas fa-hand-point-left"></i> Back</a></p>
    </div> 
<div class="row">
    <div class="col-md-8">
    <form action="{{url('cms/content')}}" method="POST" autocomplete="off" novalidate="novalidate">
    @csrf
    <div class="form-group">
        <select class="form-control" name="menu_id" id="menu-id">
            <option>Choose menu link...</option>
            @foreach($menu as $item)
        <option @if(old('menu_id') == $item['id']) selected="selected" @endif value="{{$item['id']}}">{{$item['link']}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="title"><span class="text-danger">*</span>Title</label>
        <input value="{{old('title')}}" class="form-control" type="text" name="title" id="title">
    </div>

    <div class="form-group">
        <label for="article"><span class="text-danger">*</span>Article</label>
        <textarea name="article" id="article" class="form-control">{{old('article')}}</textarea>
    </div>
    
    <div class="form-group">
        <input name="submit" class="btn btn-warning" type="submit" value="Save">
    </div>
</form>
    </div>
</div>

@endsection

