@extends('cms.cms_master')
@section('main_cms_content')

<div class="mt-3 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Menu Form</h1>
    <p><a class="btn btn-warning text-light" href="{{url('cms/menu')}}"><i class="fas fa-hand-point-left"></i> Back</a></p>
    </div> 
<div class="row">
    <div class="col-md-8">
    <form action="{{url('cms/menu/' . $item['id'])}}" method="POST" autocomplete="off" novalidate="novalidate">
    <input type="hidden" name="item_id" value="{{$item['id']}}">
    @csrf
    {{method_field('PUT')}}
    <div class="form-group">
        <label for="link"><span class="text-danger">*</span>Link</label>
    <input value="{{$item['link']}}" class="form-control origin-text" type="text" name="link" id="link">
    </div>

    <div class="form-group">
            <label for="url"><span class="text-danger">*</span>url</label>
        <input value="{{$item['url']}}" class="form-control target-text" type="text" name="url" id="url">
        </div>

        <div class="form-group">
                <label for="title"><span class="text-danger">*</span>Title</label>
            <input value="{{$item['title']}}" class="form-control" type="text" name="title" id="title">
            </div>
            <div class="form-group">
<input name="submit" class="btn btn-warning" type="submit" value="Update">
            </div>
</form>
    </div>
</div>
@endsection