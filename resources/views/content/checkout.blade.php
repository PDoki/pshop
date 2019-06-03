@extends('master')

@section('main_content')

<div class="container">
    <div class="row">
        <div class="col-md-10">
            @if($cart)
            <div class="table-responsive">
                <table class="table table-bordered table-cart-summary">
                    <thead>
                        <tr>
                                <th class="text-center">Item</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Qty</th>
                                <th class="text-center">Total Price</th>
                                <th class="text-center">Delete</th>
                        </tr><!-- /tr -->
                    </thead><!-- /thead -->

                    <tfoot >
                        <tr>
                            <td colspan="2" style="border: none;">
                                <form role="form" class="form-coupon-code">
                                    <label class="control-label">Coupon Code</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Coupon Code" autocomplete="off">
                                        <span class="input-group-btn">
                                        <button class="btn btn-primary" type="button">OK</button>
                                        </span>
                                    </div>
                                </form>
                            </td>
                            <td colspan="3" style="border: none;">
                                <p class="final-total text-right">
                                    <span class="final-total-text">Total to pay:</span>
                                    <span class="final-total-value">${{Cart::getTotal()}}</span>
                                </p>
                            </td>
                            
                            </tr><!-- /tr -->
                        </tfoot><!-- /tfoot -->

                <tbody>
                   
                    @foreach ($cart as $item)
                        <tr class="text-center">
                        <td><!-- Item -->
                                    
                        <img src="{{asset('images/' . $item['attributes']['pimage'])}}" alt="" height="70">
                                       
                        </td>

                        <td><!-- Description -->
                            {{$item['name']}} <br> ${{$item['price']}}
                        </td> 

                         <td><!-- Qty -->
                            <div class="cart-item-quantity">
                                <div class="input-group">
                                    <span class="input-group-btn">
                                    <a data-id="{{$item['id']}}" class="update-cart btn btn-default" href="{{url('shop/update-cart?pid=' . $item['id'] . '&op=minus')}}"><span data-icon="&#x4b;"></span></a>
                                    </span>
                                               
                                    <input type="text" class="form-control" id="item-quantity" value="{{$item['quantity']}}">
                                       
                                    <span class="input-group-btn">
                                    <a data-id="{{$item['id']}}"  class="update-cart btn btn-default" href="{{url('shop/update-cart?pid=' . $item['id'] . '&op=plus')}}"><span data-icon="&#x4c;"></span></a>
                                    </span>
                                </div><!-- /.input-group -->
                            </div><!-- /.cart-item-quantity -->
                        </td>
                     
                        <td><!-- Total price -->
                            ${{$item['quantity'] * $item['price']}}
                        </td> 

                        <td>
                            <a href="{{url('shop/remove-item?pid='.$item['id'])}}" class="cart-item-remove"><span data-icon="&#x4d;"></span></a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>

        <div class="row">
            <div class="col-md-10">
       
            <div class="col-md-1"><a style="width:100px;" class="btn btn-danger" href="{{url('shop/clear-cart')}}">Clear Cart</a></div>
             <div class="col-md-8"></div>
            <div class="col-md-1"><a style="width:100px;" class="btn btn-success" href="{{url('shop/order')}}">Oreder Now</a></div>
    
    </div>
    </div>

    @else
    <h2>There are no items in your cart...</h2>
    @endif
</div>

    
@endsection