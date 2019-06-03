@extends('cms.cms_master')
@section('main_cms_content')

<div class="mt-3 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Site Menu</h1>
<p><a class="btn btn-warning t-colour" href="{{url('cms/menu/create')}}"><i class="fas fa-plus"></i>Add Menu Link</a></p>
</div> 

<div class="row">
    <div class="col-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Link</th>
                    <th>Updated At</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
                @foreach($menu as $item)
                <tr>
                <td>{{$item['link']}}</td>
                <th>{{date('d/m/Y', strtotime($item['updated_at']))}}</th>
                <td>
                <a class="mr-2 t-colour" href="{{url('cms/menu/'.$item['id'].'/edit')}}"><i class="fas fa-pencil-ruler"></i>Edit</a> |
                <a class="ml-2 t-colour" href="{{url('cms/menu/'.$item['id'])}}"><i class="fas fa-dumpster-fire"></i>Delete</a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection