<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>admin pannel</title>
   
    <style>
            .bd-placeholder-img {
              font-size: 1.125rem;
              text-anchor: middle;
              -webkit-user-select: none;
              -moz-user-select: none;
              -ms-user-select: none;
              user-select: none;
            }
      
            @media (min-width: 768px) {
              .bd-placeholder-img-lg {
                font-size: 3.5rem;
              }
            }
          </style>
        
  <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">


  </head>

  <body>
<nav class="navbar fixed-top nav-colour flex-md-nowrap p-0 shadow">
<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="{{url('cms/dashboard')}}">W.T.F. Admin Pannel</a>
        {{-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> --}}
        <ul class="nav">
          <li class="nav-item">
              <a target="_blank" class="nav-link" href="{{url('')}}">Back to Site</a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('user/logout')}}">Logout</a>
            </li>
        </ul>
      </nav>
      
      <div class="container-fluid">
        <div class="row">
         
            <nav class="col-md-2 mt-3 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
              <ul class="nav flex-column">
                
                <li class="nav-item">
                  <a class="nav-link" href="{{url('cms/dashboard')}}">
                    <span data-feather="file"></span>
                    Dashboard
                  </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('cms/menu')}}">
                    <span data-feather="file"></span>Menu</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('cms/content')}}">
                    <span data-feather="file"></span>Content</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('cms/categories')}}">
                    <span data-feather="file"></span>Categories</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('cms/products')}}">
                    <span data-feather="file"></span>Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{url('cms/orders')}}">
                    <span data-feather="file"></span>Orders</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="{{url('cms/users')}}">
                  <span data-feather="file"></span>Users</a>
              </li>
              </ul>
          </nav>
      
          <main role="main" class="col-md-9 ml-sm-auto mt-3 col-lg-10 px-4">
          
            @include('inc.error_messages')
            
            @yield('main_cms_content')
           

      @include('inc.js_footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script> 
<script>
    $('#article').summernote({
      //height: 100
    });
  </script>    
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
<script src="{{asset('js/dashboard.js')}}"></script>


  </body>
</html>