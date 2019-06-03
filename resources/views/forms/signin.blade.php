@extends('master')
@section('main_content')

<div class="container">

<div class="col-md-4 authentication">
    <div class="page-section no-margin-top">
        <h3 class="section-title">Enter your W.T.F. account</h3>    
        <form action="" method="POST" novalidate="novalidate" autocomplete="off" role="form">
                @csrf
            <div class="form-group">
                <label for="email" class="sr-only">Email Address</label>
                <input value="{{old('email')}}" type="email" id="email" name="email" class="form-control input-lg" placeholder="Email">
                <span class="text-danger">{{$errors->first('email')}}</span>
            </div><!-- /.form-group -->

            <div class="form-group">
                <label for="password" class="sr-only">Password</label>
                <input type="password" id="password" name="password" class="form-control input-lg" placeholder="Password">
                <span class="text-danger">{{$errors->first('password')}}</span>
            </div><!-- /.form-group -->

            <div class="form-group">
                <label class="checkbox label-lg"><input type="checkbox"> Remember me</label>
            </div><!-- /.form-group -->
            
            <div class="form-group">
                <button class="btn btn-primary btn-block btn-lg" name="submit" type="submit">Sign In</button>
            </div><!-- /.form-group -->
           
            @if(!empty ($auth_error))
        <span class="text-danger">{{$auth_error}}</span>
            @endif
        </form>
    </div>
</div>

</div>
@endsection
