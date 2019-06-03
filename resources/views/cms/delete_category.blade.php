@extends('cms.cms_master')
@section('main_cms_content')

<div class="mt-3 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Are you sure you are going to delete the item?</h1>
</div>

   
<div class="row">
    <div class="col-md-8">
    <form action="{{url('cms/categories/' . $item_id)}}" method="POST" autocomplete="off" novalidate="novalidate">
    @csrf
    {{method_field('DELETE')}}
    <input class="btn btn-danger" type="submit" name="submit" value="Delete item">
    <a href="{{url('cms/categories')}}" class="btn btn-warning">Cancel</a>
    
</form>
    </div>
</div>
@endsection