<div class="content">
    <div class="container">
        <div class="row">
            <!-- ========================================= CONTENT ========================================= -->
            <div class="col-md-9 col-md-push-3">
                <?php require KY_ROOT.'/parts/section/featured-product.php';?>

                <?php require KY_ROOT.'/parts/section/category-products.php';?>
            </div><!-- /.col-md-9 -->
            <!-- ========================================= CONTENT : END ========================================= -->    

              <!-- ========================================= SIDEBAR ========================================= -->
            <div class="col-md-3 col-md-pull-9">

                <aside class="sidebar row">
                     <?php require KY_ROOT.'/parts/widgets/sidebar/grid-list-display.php';?>

                     <?php require KY_ROOT.'/parts/widgets/sidebar/sidebar-sort-by.php';?>

                     <?php require KY_ROOT.'/parts/widgets/sidebar/sidebar-filter.php';?>                  
                </aside><!-- /.sidebar -->
                
            </div><!-- /.col-md-3 -->
             <!-- ========================================= SIDEBAR : END ========================================= -->
        </div><!-- /.row -->
        <?php require KY_ROOT.'/parts/section/relate-pet-info.php';?>
    </div><!-- /.container -->
</div><!-- /.content -->