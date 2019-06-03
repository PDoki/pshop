<div class="content">
    <div class="container">
        <!-- ========================================= CONTENT ========================================= -->
        <h2 class="page-title text-md-center">Checkout - 4 Items</h2>
        <p class="page-subtitle text-md-center">Lorem ipsum dolor sit amet, <strong>consectetur</strong> adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim</p>
        
        <div class="page-section">
            <ul class="order-steps nav nav-pills nav-justified">
                <li><a href="index.php?page=cart">Review Cart</a></li>
                <li class="active"><a href="index.php?page=checkout">Confirm Payment</a></li>
                <li><a href="#">Finish</a></li>
            </ul><!-- /.order steps -->
        </div><!-- /.page section -->

        <div class="page-section">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-md-push-8">
                    <?php require KY_ROOT.'/parts/section/order-summary-table.php';?>
                </div>

                <div class="col-md-8 col-sm-8 col-md-pull-4">
                    <?php require KY_ROOT.'/parts/section/checkout-accordion.php';?>
                </div>
            </div>
        </div><!-- /.page-section -->

        <!-- ========================================= CONTENT : END ========================================= -->
    </div><!-- /.container -->
</div><!-- /.content -->