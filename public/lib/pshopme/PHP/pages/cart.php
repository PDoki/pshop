<div class="content">
    <div class="container">
        <!-- ========================================= CONTENT ========================================= -->
        <h2 class="page-title text-md-center">Shopping Cart - 4 Items</h2>
        <p class="page-subtitle text-md-center">Lorem ipsum dolor sit amet, <strong>consectetur</strong> adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>

        <div class="page-section">
            <ul class="order-steps nav nav-pills nav-justified">
                <li class="active"><a href="index.php?page=cart">Review Cart</a></li>
                <li><a href="index.php?page=checkout">Confirm Payment</a></li>
                <li><a href="#">Finish</a></li>
            </ul><!-- /.order steps -->
        </div><!-- /.page section --> 

        <div class="page-section">
            <div class="row">
                <div class="col-md-8">
                   <?php require KY_ROOT.'/parts/section/cart-table.php';?> 
                </div>
                <div class="col-md-4 authentication">
                    <?php require KY_ROOT.'/parts/section/register-checkout.php';?> 
                    <?php require KY_ROOT.'/parts/section/new-customer.php';?> 
                </div>
            </div><!-- /.row-->
        </div><!-- /.page-section -->

         <!-- ========================================= CONTENT : END ========================================= -->
    </div><!-- /.container -->
</div><!-- /.content -->