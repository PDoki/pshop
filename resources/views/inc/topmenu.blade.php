  <!-- =================== NAVBAR PRIMARY ============================== -->
  <nav class="yamm navbar navbar-primary animate-dropdown mb-5" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button id="btn-navbar-primary-collapse" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-primary-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div><!-- /.navbar-header -->
            <div class="collapse navbar-collapse" id="navbar-primary-collapse">
                <ul class="nav navbar-nav">
                <li><a href="{{url('')}}">Home</a></li>
                    <li id="gothere" class="dropdown">
                    <a href="{{url('shop')}}" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">Monsters Shop</a>
                    
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                            
                                        @if(isset($categories))
                                        @foreach($categories as $category)
                                    <div class="col-md-4 col-sm-4">
                                        <img src="{{asset('images/'.$category['cimage'])}}" width="150" height="150">
                                        <a href="{{url('shop/'. $category['curl'])}}" style="color:white;" class="megamenu-title">{{$category['ctitle']}}
                                        </a>     
                                    </div>
                                        @endforeach
                                        @endif
                                        
                                        <div><a style="color:bisque;" href="{{url('shop')}}">View Categories</a></div>

                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                   @foreach($menu as $item)
                <li class="hidden-sm"><a href="{{url($item['url'])}}">{{$item['title']}}</a></li>
                   @endforeach
                </ul><!-- /.nav -->
                
                <div class="navbar-right user-options">
                    <div class="btn-group">
                        <button data-hover="dropdown" data-toggle="dropdown"  class="dropdown-toggle btn btn-primary-very-light navbar-btn">USD <b class="caret"></b></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">EUR</a></li>
                            <li><a href="#">INR</a></li>
                        </ul>
                    </div><!-- /.btn-group -->
                    <div class="btn-group">
                        <button data-hover="dropdown" data-toggle="dropdown" class="dropdown-toggle btn btn-primary-very-light navbar-btn">EN <b class="caret"></b></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">DE</a></li>
                            <li><a href="#">TA</a></li>
                        </ul><!-- /.dropdown-menu -->
                    </div><!-- /.btn-group -->
                </div><!-- /.navbar-right -->
            </div><!-- /.collapse navbar-collapse -->
        </div><!-- /.container -->
    </nav><!-- /.yamm -->
<!-- =================== NAVBAR PRIMARY :END ============================== -->
