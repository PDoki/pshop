@extends('cms.cms_master')
@section('main_cms_content')

<div class="mt-3 d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add User Form</h1>
    <p><a class="btn btn-warning text-light" href="{{url('cms/users')}}"><i class="fas fa-hand-point-left"></i> Back</a></p>
    </div> 
<div class="row">
    <div class="col-md-8">
    <form action="{{url('cms/users')}}" method="POST" autocomplete="off" novalidate="novalidate">
    @csrf
    <div class="form-group">
        <label for="name"><span class="text-danger">*</span>Name</label>
    <input value="{{old('name')}}" class="form-control origin-text" type="text" name="name" id="name">
    </div>

    <div class="form-group">
            <label for="email"><span class="text-danger">*</span>Email</label>
        <input value="{{old('email')}}" class="form-control target-text" type="text" name="email" id="email">
        </div>

        <div class="form-group">
                <label for="password"><span class="text-danger">*</span>Password</label>
            <input class="form-control" type="password" name="password" id="password">
        </div>

        <div>
            <label for="role"><span class="text-danger">*</span>Role</label>
            <div class="form-group ml-5" style="display: inline-block">
            <input type="radio" name="role" id="role" value="148">admin <br>
            <input type="radio" name="role" id="role" value="7">user <br>
        </div>
        </div>
        <div class="form-group">
            <input name="submit" class="btn btn-warning" type="submit" value="Save">
        </div>
</form>
    </div>
</div>
@endsection