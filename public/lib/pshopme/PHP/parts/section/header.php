<!-- ============================================================= HEADER ============================================================= -->
<header class="header">

	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-4 col-xs-12">
				<?php require KY_ROOT.'/parts/widgets/header/logo.php';?>
			</div><!-- /.col -->

			<div class="col-md-3 col-sm-3 col-xs-12">
				<?php require KY_ROOT.'/parts/widgets/header/search-bar.php';?>
			</div><!-- /.col -->

			<div class="col-md-5 col-sm-5 col-xs-12">
				<?php require KY_ROOT.'/parts/widgets/header/block-header-links.php';?>
			</div><!-- /.col -->		
		</div><!-- /.row -->
		<a class="btn-shopping-cart hidden-xs" href="#" data-toggle="modal" data-target=".myCart-modal-lg"><img src="assets/images/icon-cart.png" class="icon-cart" width="20" height="18" alt="Cart Icon" /><span class="cart-items-count">5</span></a>
	</div><!-- /.container -->

	<?php require KY_ROOT.'/parts/navigation/navbar-primary.php';?>

</header><!-- /.header -->
<!-- ============================================================= HEADER : END ============================================================= -->


<!-- ============================================================= MODAL ============================================================= -->
<div class="modal fade myCart-modal-lg" id="myCart" tabindex="-1" role="dialog" aria-hidden="true">
     <div class="modal-dialog">
        <div class="modal-content cart-modal-content">
            <div class="modal-header">
                 <a class="close close-icon" data-dismiss="modal"><span data-icon="M"></span></a>
                 <h2 class="modal-title"><span class="icon glyphicon glyphicon-shopping-cart"></span>your cart-4 items</h2>
            </div><!-- /.modal-header -->
            <div class="modal-body">
                <ul class="list-unstyled">
                    <li>
                        <div class="basket-item">
                            <div class="row">
                            	<div class="col-md-3 col-sm-3">
                            		<div class="selected-item"><img src="assets/images/products/product-small-01.jpg" alt=""></div>
                            		<div class="selected-item-price">$1000.00</div>
                            	</div><!-- /.col-->
                            	<div class="col-md-8 col-sm-8">
                            		<h4>Adipiscing Elit,Sed do Eiusmod</h4>
                            		<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do  eiusmod tempor incididunt ut labore</p> 
                            	</div><!-- /.col -->
                            	<div class="col-md-1 col-sm-1">
                                    <a class="cart-item-remove" title="cancel"  href="#">
                                        <span data-icon="M"></span>
                                    </a>
                            	</div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.basket-item -->
                    </li>

                    <li>
                        <div class="basket-item">
                            <div class="row">
                            	<div class="col-md-3 col-sm-3">
                            		<div class="selected-item"><img src="assets/images/products/product-small-02.jpg" alt=""></div>
                            		<div class="selected-item-price">$1000.00</div>
                            	</div><!-- /.col -->
                            	<div class="col-md-8 col-sm-8">
                            		<h4>Do euismod tempor incididunt ut</h4>
                            		<p> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud</p>
                            	</div><!-- /.col -->
                            	<div class="col-md-1 col-sm-1">
                            		<a class="cart-item-remove" title="cancel" href="#">
                                        <span data-icon="M"></span>
                                    </a>
                            	</div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.basket-item -->
                    </li>
                </ul><!-- /.list-unstyled -->

                <div class="row">
                	<div class="product-actions">
                		<a  href="index.php?page=detail" class="btn btn-secondary btn-ky">Total:$2000.00</a>
                		<a href="index.php?page=checkout" class="btn btn-inverse btn-ky">Continued to checkout</a>  
                	</div><!-- /.product-actions -->
                </div><!-- /.row -->
            </div><!-- /.modal-body -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- ============================================================= MODAL : END ============================================================= -->