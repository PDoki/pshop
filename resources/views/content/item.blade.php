@extends('master')

@section('main_content')


   <div class="content">

       <div class="container">
   <!-- ========================================= CONTENT ========================================= -->
    <div class="container">
    <div class="row">
        <div class="col-md-8">
            <h2 class="page-title text-md-center">{{$products['ptitle']}}
                    <br><a class="btn btn-success" href="{{url('shop/' . $products['curl'])}}">Back to Category</a>
            </h2>
            <p class="page-subtitle text-md-center">{!! $products['particle'] !!}</p>
        </div>
    </div>
    </div> 
           <div class="row product-carousel">
               <div class="col-md-6 col-md-push-3 col-sm-12 col-xs-12">
                   <div id="product-image-carousel" class="product-image owl-carousel owl-theme carousel slide" data-ride="carousel">
                       <div class="carousel-inner">
                           <div class="item active">
                               <a href="#">
                                    <img width="500" height="700" src="{{asset('images/' . $products['pimage'])}}" alt="{{$products['ptitle']}} image">
                               </a>
                           </div><!-- /.item -->
                           <div class="item">
                                <a href="#">
                                        <img width="500" height="700" src="{{asset('images/' . $products['pimage'])}}" alt="{{$products['ptitle']}} image">
                               </a>
                           </div><!-- /.item -->
                       </div><!-- /.carousel-inner -->
                   </div><!-- /.product-image-carousel -->
               </div><!-- /.col-md-6 -->
               <div class="col-md-3 col-md-pull-6 col-sm-6 col-xs-6">
                   <a class="left carousel-control" href="#product-image-carousel" data-slide="prev">
                       <span data-icon="&#x34;"></span>
                   </a>
               </div><!-- /.col-md-3 -->
               <div class="col-md-3 col-sm-6 col-xs-6">
                   <a class="right carousel-control" href="#product-image-carousel" data-slide="next">
                       <span data-icon="&#x35;"></span>
                   </a>
               </div><!-- /.col-md-3 -->
           </div><!-- /.product-carousel -->
           <div class="row product-detail">
               <div class="col-md-6">
                   <div class="panel-group" id="product-detail-accordion">
                       <div class="panel panel-default">
                           <div class="panel-heading">
                               <h3 class="panel-title">
                                   <a data-toggle="collapse" data-parent="#product-detail-accordion" href="#collapseDescription">
                                       Description
                                       <span data-icon="&#x50;" class="expand pull-right"></span>
                                       <span data-icon="&#x4f;" class="contract pull-right"></span>
                                   </a>
                               </h3><!-- /.panel-title -->
                           </div><!-- /.panel-heading -->
                           <div id="collapseDescription" class="panel-collapse collapse in">
                               <div class="panel-body">
                                   <ul class="list-kybully uppercase">
                                       <li>Sed do eiusmod tempor incididunt ut labore et dolore</li>
                                       <li>Sed do eiusmod tempor incididunt ut labore et dolore</li>
                                       <li>Sed do eiusmod tempor incididunt ut labore et dolore</li>
                                       <li>Sed do eiusmod tempor incididunt ut labore et dolore</li>
                                   </ul>
                                   <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch.</p>
                               </div><!-- /.panel-body -->
                           </div><!-- /.panel-collapse -->
                       </div><!-- /.panel-default -->

                       <div class="panel panel-default">
                           <div class="panel-heading">
                               <h3 class="panel-title">
                                   <a data-toggle="collapse" data-parent="#product-detail-accordion" href="#collapseShipping" class="collapsed">
                                       Shipping
                                       <span data-icon="&#x50;" class="expand pull-right"></span>
                                       <span data-icon="&#x4f;" class="contract pull-right"></span>
                                   </a>
                               </h3><!-- /.panel-title -->
                           </div><!-- /.panel-heading -->
                           <div id="collapseShipping" class="panel-collapse collapse">
                               <div class="panel-body text-justify">
                                   Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                               </div><!-- /.panel-body -->
                           </div><!-- /.panel-collapse -->
                       </div><!-- /.panel-default -->

                       <div class="panel panel-default">
                           <div class="panel-heading">
                               <h3 class="panel-title">
                                   <a data-toggle="collapse" data-parent="#product-detail-accordion" href="#collapseFeatures" class="collapsed">
                                       Features
                                       <span data-icon="&#x50;" class="expand pull-right"></span>
                                       <span data-icon="&#x4f;" class="contract pull-right"></span>
                                   </a>
                               </h3><!-- /.panel-title -->
                           </div><!-- /.panel-heading -->
                           <div id="collapseFeatures" class="panel-collapse collapse">
                               <div class="panel-body text-justify">
                                   Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                               </div>
                           </div><!-- /.panel-collapse -->
                       </div><!-- /.panel-default -->
                   </div><!-- /.panel-group -->            
               </div>

               <div class="col-md-6">
                   <div class="order-box">
                       <form role="form">
                           <div class="row">
                               <div class="col-md-7 col-sm-7 col-xs-12">
                                   <div class="form-group">
                                       <label for="color" class="control-label">Color</label>
                                       <select name="color" id="color" class="form-control selectpicker">
                                           <option value="1">Select Color</option>
                                           <option value="2">Color 1</option>
                                           <option value="2">Color 2</option>
                                           <option value="2">Color 3</option>
                                       </select>
                                   </div><!-- /.form-group -->

                                   <div class="form-group clearfix">
                                       <div class="row">
                                           <div class="col-md-4">
                                               <label for="qty" class="control-label">QTY</label>
                                               <select name="qty" id="qty" class="form-control selectpicker">
                                                   <option value="1">1</option>
                                                   <option value="1">2</option>
                                                   <option value="1">3</option>
                                                   <option value="1">4</option>
                                               </select>
                                           </div><!-- /.col -->
                                           <div class="col-md-8">
                                               <label for="size" class="control-label">Size</label>
                                               <select name="size" id="size" class="form-control selectpicker">
                                                   <option value="p">Puppy</option>
                                                   <option value="p">Adult</option>
                                               </select>
                                           </div><!-- /.col -->
                                       </div><!-- /.row -->
                                   </div><!-- /.form-group -->
                                   
                               </div><!-- /.col-md-7 -->
                               <div class="col-md-5 col-sm-5 col-xs-12">
                                   <h4 class="control-label text-md-center">Terms</h4>
                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                               </div><!-- /.col-md-5 -->

                               <div class="col-md-7 col-sm-7 col-xs-12">
                                   <div class="form-group form-actions">
                                       @if(!Cart::get($products['id']))
                                       <button data-id="{{$products['id']}}" class="btn btn-lg btn-add-to-cart btn-primary btn-block" type="button">
                                        Add to Cart
                                       </button>
                                       @else
                                       <button disabled="disabled" class="btn btn-lg btn-add-to-cart btn  btn-success btn-block" type="button">
                                        Already In Cart
                                       </button>
                                       @endif
                                       <a class="btn btn-lg btn-primary btn-block" href="{{url('/shop/checkout')}}">
                                             Checkout
                                       </a>
                                   </div>
                               </div><!-- /.col-md-7 -->

                               <div class="col-md-5 col-sm-5 col-xs-12">
                                   <div class="form-group form-actions">
                                       <button class="btn btn-lg btn-wishlist uppercase btn-block">
                                           <span data-icon="&#x50;" class="icon-btn"></span> Wishlist
                                       </button>
                                   </div><!-- /.form-group -->
                               </div><!-- /.col-md-5 -->
                           </div><!-- /.row -->
                       </form>
                   </div><!-- /.order box -->            
               </div><!-- /.col -->
           </div><!-- /.product detail -->
   <!-- ========================================= CONTENT : END ========================================= -->
       </div><!-- /.container -->
   </div><!-- /.content -->

@endsection