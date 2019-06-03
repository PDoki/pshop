@extends('cms.cms_master')
@section('main_cms_content')

<div class="mt-3 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Product Form</h1>
    <p><a class="btn btn-warning text-light" href="{{url('cms/products')}}"><i class="fas fa-hand-point-left"></i> Back</a></p>
    </div> 
<div class="row">
    <div class="col-md-8">
    <form action="{{url('cms/products/' . $item['id'])}}" enctype="multipart/form-data" method="POST" autocomplete="off" novalidate="novalidate">
    <input type="hidden" name="item_id" value="{{$item['id']}}">
    @csrf
    {{method_field('PUT')}}

    <div class="form-group">
    <select class="form-control" name="categorie_id" id="categorie-id">
        @foreach($categories as $row)
        <option @if($item['categorie_id'] == $row['id']) selected="selected" @endif value="{{$row['id']}}">{{$row['ctitle']}}</option>
         @endforeach
    </select>
    </div>

    <div class="form-group">
        <label for="title"><span class="text-danger">*</span>Title</label>
        <input value="{{$item['ptitle']}}" class="form-control origin-text" type="text" name="title" id="title">
    </div>
    
    <div class="form-group">
        <label for="url"><span class="text-danger">*</span>url</label>
        <input value="{{$item['purl']}}" class="form-control target-text" type="text" name="url" id="url">
    </div>

    <div class="form-group">
            <label for="url"><span class="text-danger">*</span>Price</label>
            <input value="{{$item['price']}}" class="form-control" type="text" name="price" id="price">
        </div>

    <div class="form-group">
        <label for="article"><span class="text-danger">*</span>Article</label>
    <textarea name="article" id="article" class="form-control">{{$item['particle']}}</textarea>
    </div>

    <div class="form-group">
        <label for="image">Change Image For Product</label>
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
        <input name="submit" class="btn btn-warning" type="submit" value="Update">
    </div>
</form>
    </div>
</div>
@endsection