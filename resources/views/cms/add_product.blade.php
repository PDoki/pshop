@extends('cms.cms_master')
@section('main_cms_content')

<div class="mt-3 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add Product Form</h1>
    <p><a class="btn btn-warning text-light" href="{{url('cms/products')}}"><i class="fas fa-hand-point-left"></i> Back</a></p>
    </div> 
<div class="row">
    <div class="col-md-8">
    <form action="{{url('cms/products')}}" enctype="multipart/form-data" method="POST" autocomplete="off" novalidate="novalidate">
    @csrf

    <div class="form-group">
            <select class="form-control" name="categorie_id" id="categorie-id">
                <option>Choose Category...</option>
                @foreach($categories as $item)
            <option @if(old('categorie_id') == $item['id']) selected="selected" @endif value="{{$item['id']}}">{{$item['ctitle']}}</option>
                @endforeach
            </select>
        </div>

    <div class="form-group">
        <label for="title"><span class="text-danger">*</span>Title</label>
        <input value="{{old('title')}}" class="form-control origin-text" type="text" name="title" id="title">
    </div>
    
    <div class="form-group">
        <label for="url"><span class="text-danger">*</span>url</label>
        <input value="{{old('url')}}" class="form-control target-text" type="text" name="url" id="url">
    </div>

    <div class="form-group">
            <label for="url"><span class="text-danger">*</span>Price</label>
            <input value="{{old('price')}}" class="form-control" type="text" name="price" id="price">
        </div>

    <div class="form-group">
        <label for="article"><span class="text-danger">*</span>Article</label>
    <textarea name="article" id="article" class="form-control">{{old('article')}}</textarea>
    </div>

    <div class="form-group">
        <label for="image">Image For Product</label>
    </div>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
        </div>
        <div class="custom-file">
            <input name="image" type="file" class="custom-file-input" id="image" aria-describedby="inputGroupFileAddon01">
            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>
    </div>

    <div class="form-group">
        <input name="submit" class="btn btn-warning" type="submit" value="Save">
    </div>
</form>
    </div>
</div>
@endsection