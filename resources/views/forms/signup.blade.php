@extends('master')
@section('main_content')

<div class="container">

<div class="col-md-4 authentication">
        <div class="page-section no-margin-top">
            <h3 class="section-title">Make your W.T.F. account</h3>
            <p> <span class="text-danger">*</span> You should fill all the fields.</p>
        <form action="" method="POST" novalidate="novalidate" autocomplete="off" role="form">
            @csrf
            <div class="form-group">
                <label for="name" class="sr-only">Name</label>
                <input value="{{old('name')}}" type="text" name="name" id="name" class="form-control input-lg" placeholder="Name">
                <span class="text-danger">{{$errors->first('name')}}</span>
            </div>

            <div class="form-group">
                <label for="email" class="sr-only">Email</label>
                <input value="{{old('email')}}" type="email" name="email" id="email" class="form-control input-lg" placeholder="Email">
                <span class="text-danger">{{$errors->first('email')}}</span>
            </div>

            <div class="form-group">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
                    <span class="text-danger">{{$errors->first('password')}}</span>
            </div>

            <div class="form-group">
                    <label class="checkbox label-lg"><input type="checkbox"> Remember me</label>
            </div>

            <div class="form-group">
                <button class="btn btn-primary btn-block btn-lg" name="submit" type="submit">Register</button>
            </div>
            @if(!empty ($auth_error))
            <span class="text-danger">{{$auth_error}}</span>
            @endif
            </form>
        </div>
    </div>
    
    </div>
    @endsection