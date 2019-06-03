@extends('cms.cms_master')
@section('main_cms_content')

<div class="mt-3 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Site Users</h1>
<p><a class="btn btn-warning t-colour" href="{{url('cms/users/create')}}"><i class="fas fa-plus"></i>Add User</a></p>
</div> 

<div class="row">
    <div class="col-12">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Created At</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $item)
                <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->rid==148 ? 'admin':'user'}}</td>
                <td>{{date('d/m/Y', strtotime($item->created_at))}}</td>
                <td>
                <a class="mr-2 t-colour" href="{{url('cms/users/'.$item->id.'/edit')}}"><i class="fas fa-pencil-ruler"></i>Edit</a> |
                <a class="ml-2 t-colour" href="{{url('cms/users/'.$item->id)}}"><i class="fas fa-dumpster-fire"></i>Delete</a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection