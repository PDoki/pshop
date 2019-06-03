<!DOCTYPE html>
	<html lang="en">
	<head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        
    <script>var BASE_URL = "{{url('')}}" </script>
    <title>@if(!empty($pageTitle)){{$pageTitle}}@endif</title>

	@include('inc.css_header')

		<!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
		<!--[if lt IE 9]>
		<script src="{{asset('lib/pshopme/PHP/assets/js/html5shiv.js')}}"></script>
		<script src="{{asset('lib/pshopme/PHP/assets/js/respond.min.js')}}"></script>
        <![endif]-->

        <script> var BASE_URL = "{{url('')}}/"; </script>
        <title>@if(!empty($pageTitle)){{$pageTitle}}@endif</title>
    </head>
<body>


	<div class="wrapper">
		<!-- ======================= HEADER =================================== -->
        <header class="header">
	        <div class="container">
		        <div class="row">
			        <div class="col-md-4 col-sm-4 col-xs-12">
		<!--=================================LOGO=============================== -->
           <div class="logo text-md-center">
                <h1>
                <a href="{{url('')}}">
                <img src="{{asset('/svg/logo.svg')}}">
                    </a>
                </h1>
            </div><!-- /.logo -->
        <!-- ============================= LOGO : END ========================== -->			    </div><!-- /.col -->

			        <div class="col-md-3 col-sm-3 col-xs-12">
		<!-- ========================== SEARCH BAR=============================== -->
                    <form method="GET" action="{{url('shop/search')}}" role="search" class="block-search">
                        	<div class="input-group">
                            <input value="{{old('search')}}" type="text" class="form-control" name="search" id="search" placeholder="Search...">
                        		<span class="input-group-btn">
                        			<button class="btn btn-primary-very-light search-button" type="button"><span class="glyphicon glyphicon-search"></span></button>
                                </span>
                            </div>
                        </form>

                        <span class="text-danger">{{$errors->first('search')}}</span>

                  
                      
        <!-- ========================== SEARCH BAR :END ===========================-->			
                    </div><!-- /.col -->

			        <div class="col-md-5 col-sm-5 col-xs-12">
		<!-- ======================== BLOCK HEADER LINKS========================= -->
                        <div class="block-header-links">
                        	<ul class="nav nav-header-link pull-right">
                            @if(!Session::has('user_id'))
                            <li><a href="{{url('user/signin')}}">Login</a></li>
                            <li><a href="{{url('user/signup')}}">Register</a></li>
                            <li><a href="">Total: <span class="total-cart-amount">$200.00</span></a></li>
                            @else
                            <li><a href="{{url('user/profile')}}">{{Session::get('user_name')}}</a></li>
                            @if(Session::has('is_admin'))
                            <li><a href="{{url('cms/dashboard')}}">W.T.F. CPanel</a></li>
                            @endif
                            <li><a href="{{url('user/logout')}}">Logout</a></li>
                            <li><a href="{{url('shop/checkout')}}">Total: <span class="total-cart-amount">${{Cart::getTotal()}}</span></a></li>
                            @endif
                        	</ul><!-- /.nav-header-link -->
                        </div><!-- /.block-header-links -->	
        <!-- =================== BLOCK HEADER LINKS :END ======================== -->			   </div><!-- /.col -->		
		        </div><!-- /.row -->
            <a id="cartIcon" class="btn-shopping-cart hidden-xs" href="" data-toggle="modal" data-target=".myCart-modal-lg"><img src="{{asset('lib/pshopme/PHP/assets/images/icon-cart.png')}}" class="icon-cart" width="20" height="18" alt="Cart Icon" /><span class="cart-items-count">
                    @if(! Cart::isEmpty())
                   {{ Cart::getTotalQuantity()}}
                @endif
                </span></a>
	        </div><!-- /.container -->

	  @include('inc.topmenu')

        </header><!-- /.header -->
        <!-- =================== HEADER :END ============================== -->

        <!-- =================== MODAL ============================== -->
        <div class="modal fade myCart-modal-lg" id="myCart" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
       <div class="modal-content cart-modal-content">
           <div class="modal-header">
                <a class="close close-icon" data-dismiss="modal"><span data-icon="M"></span></a>
                <h2 class="modal-title"><span class="icon glyphicon glyphicon-shopping-cart"></span>your cart-infity items</h2>
           </div><!-- /.modal-header -->
           <div class="modal-body">
               <ul class="list-unstyled" id="inCartUl">
               </ul><!-- /.list-unstyled -->

               <div class="row">
                   <div class="product-actions">
                   <button class="btn btn-success btn-ky">${{Cart::getTotal()}}</button>
                   <a href="{{url('shop/checkout')}}" class="btn btn-inverse btn-ky">Checkout</a>  
                   </div><!-- /.product-actions -->
               </div><!-- /.row -->
           </div><!-- /.modal-body -->
       </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
        <br>
 
        <div class="content my-5">@yield('main_content')</div><br>

		<!-- ============================= FOOTER ============================-->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
        <!-- ========================== FOLLOW US FOOTER =================== -->
                        <div class="module widget">
                            <div class="module-header">
                                <h4 class="module-title text-md-center">Follow Us</h4>
                            </div><!-- /.module-header -->
                            <div class="module-body text-md-center">
                                <div class="row">
                                    <div class="col-md-12 col-sm-6">
                                        <p>Lorem ipsum dolor sit amet</p>
                                        <ul class="list-social-icons">
                                            <li><a href="http://facebook.com/transvelo"><span data-icon="&#xe093;"></span></a></li>
                                            <li><a href="#"><span data-icon="&#xe094;"></span></a></li>
                                            <li><a href="#"><span data-icon="&#xe095;"></span></a></li>
                                            <li><a href="#"><span data-icon="&#xe096;"></span></a></li>
                                            <li><a href="#"><span data-icon="&#xe09b;"></span></a></li>
                                        </ul><!-- /.list-social-icons -->
                                    </div><!-- /.col -->
                                    <div class="col-md-12 col-sm-6">
                                        <address>
                                            Lorem ipsum dolor sit amet<br/>
                                            <strong>W.T.F.Shop PSD</strong><br/>
                                            108 ABC, Mures, Transylvania <br/>
                                            (+00)-000-0000-000
                                        </address>  
                                    </div><!-- /.col -->
                                </div><!-- /.row -->
                            </div><!-- /.module-body -->
                        </div><!-- /.module -->
        <!-- ========================= FOLLOW US FOOTER :END ================== -->         
                    </div><!-- /.col -->

                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-md-12 col-sm-6">
        <!-- ========================== NEWSLETTER FOOTER ====================== -->
                                <div class="module block-newsletter">
                                    <div class="module-header">
                                        <h4 class="module-title text-md-center">Newsletter</h4>
                                    </div><!-- /.module-header -->
                                    <div class="module-body text-md-center">
                                        <p>Lorem ipsum dolor sit amet</p>
                                        <form role="form">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="yourname@email.com" autocomplete="off">
                                                <span class="input-group-btn">
                                                    <button class="btn btn-default" type="button"><span data-icon="&#x45;"></span></button>
                                                </span>
                                            </div><!-- /input-group -->
                                        </form>
                                    </div><!-- /.module-body -->
                                </div><!-- /.module -->
        <!-- ========================= NEWSLETTER FOOTER :END ==================== -->                
                            </div><!-- /.col -->
                            <div class="col-md-12 col-sm-6">
        <!-- ============================= PAYMENT FOOTER ======================== -->
                                <div class="module widget">
                                    <div class="module-header">
                                        <h4 class="module-title text-md-center">Payments</h4>
                                    </div><!-- /.module-header -->
                                    <div class="module-body text-md-center">
                                        <p>Lorem ipsum dolor sit amet</p>
                                        <ul class="list-payment-logos">
                                            <li><img src="{{asset('lib/pshopme/PHP/assets/images/payments/visa.png')}}" alt="Visa" width="48" height="32" /></li>
                                            <li><img src="{{asset('lib/pshopme/PHP/assets/images/payments/mastercard.png')}}" alt="MasterCard" width="48" height="32" /></li>
                                            <li><img src="{{asset('lib/pshopme/PHP/assets/images/payments/paypal.png')}}" alt="Paypal" width="48" height="32" /></li>
                                            <li><img src="{{asset('lib/pshopme/PHP/assets/images/payments/ebay.png')}}" alt="eBay" width="48" height="32" /></li>
                                            <li><img src="{{asset('lib/pshopme/PHP/assets/images/payments/american-express.png')}}" alt="American Express" width="48" height="32" /></li>                            
                                        </ul><!-- /.payment-logo-list -->
                                    </div><!-- /.module-body -->
                                </div><!-- /.module -->
        <!-- ============================= PAYMENT FOOTER : END ====================== -->                
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.col -->

                    <div class="col-md-4 col-sm-12 col-xs-12">
        <!-- ==============================MonsterShop Inc FOOTER =================== -->
                        <div class="module">
                            <div class="module-header">
                                <h4 class="module-title text-md-center">MonsterShop Inc<sup>&copy;</sup></h4>
                            </div><!-- /.module-header -->
                            <div class="module-body text-md-center">
                                <p>Lorem ipsum dolor sit amet</p>
                                <ul class="list-link">
                                        <li><a href="{{url('')}}">Home</a></li>
                                        @if(isset($categories))
                                        @foreach($categories as $category)
                                        <li><a href="{{url('shop/'. $category['curl'])}}">{{$category['ctitle']}}
                                        </a></li>
                                        @endforeach
                                        @endif
                                        @foreach($menu as $item)
                <li class="hidden-sm"><a href="{{url($item['url'])}}">{{$item['title']}}</a></li>
                   @endforeach
                                </ul><!-- /.list-link -->
                            </div><!-- /.module-body -->
                        </div><!-- /.module -->
        <!-- ============================MonsterShop Inc FOOTER : END ==================== -->         
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container -->

            <div class="navbar navbar-footer">
        <!-- =============================== NAVBAR FOOTER =================================== -->
                <div class="container">
                	<div class="row text-center">
                         <p class="navbar-text copyright-text m-auto">W.T.F.Shop &copy; Polina Dk 2019</p></div>
                </div><!-- /.container -->
        <!-- =========================== NAVBAR FOOTER : END ================================ -->
            </div><!-- /.navbar -->
    
        </footer>
        <!-- ================================ FOOTER :END ===================================== -->
	</div><!-- /.wrapper -->

	@include('inc.js_footer')

	

</body>
</html>