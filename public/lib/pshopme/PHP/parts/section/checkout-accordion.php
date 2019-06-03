<form class="checkout-form">
    <div class="panel-group" id="checkout-accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#checkout-accordion" href="#collapseDescription">
                        Billing Address
                        <span data-icon="&#x50;" class="expand pull-right"></span>
                        <span data-icon="&#x4f;" class="contract pull-right"></span>
                    </a>
                </h3><!-- /.panel-title -->
            </div><!-- /.panel-heading -->

            <div id="collapseDescription" class="panel-collapse collapse in">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="first-name" class="required control-label">First Name</label>
                                <input id="first-name" type="text" placeholder="First name" class="form-control">
                            </div>        
                        </div><!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="last-name" class="required control-label">Last Name</label>
                                <input id="last-name" type="text" placeholder="Last name" class="form-control">
                            </div>        
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <div class="form-group">
                        <label for="company-name" class="control-label">Company Name</label>
                        <input id="company-name" type="text" placeholder="Company name" class="form-control">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label for="address" class="required control-label">Address</label>
                        <input id="address" type="text" placeholder="Street Address" class="form-control">
                    </div><!-- /.form-group -->

                    <div class="form-group">
                        <label for="apartment" class="sr-only">Apartment, suite, unit, etc</label>
                        <input id="apartment" type="text" placeholder="Apartment, suite, unit, etc" class="form-control">
                    </div><!-- /.form-group -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="town-city" class="required control-label">Town/City</label>
                                <input id="town-city" type="text" placeholder="Town/City" class="form-control">
                            </div><!-- /.form-group -->       
                        </div><!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="state-country" class="required control-label">State/County</label>
                                <input id="state-country" type="text" placeholder="State/County" class="form-control">
                            </div><!-- /.form-group -->        
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="post-code" class="control-label required">Postcode</label>
                                <input id="post-code" type="text" placeholder="Postcode" class="form-control">
                            </div><!-- /.form-group -->            
                        </div><!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="country" class="control-label required">Country</label>
                                <input id="country" type="text" placeholder="Country" class="form-control">
                            </div><!-- /.form-group -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email-address" class="control-label required">Email Address</label>
                                <input id="email-address" type="text" placeholder="Email Address" class="form-control">
                            </div><!-- /.form-group -->
                        </div><!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone-number" class="control-label required">Phone Number</label>
                                <input id="phone-number" type="text" placeholder="Phone Number" class="form-control">
                            </div><!-- /.form-group -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <div class="form-group">
                        <label for="create-an-account" class="checkbox"><input type="checkbox" id="create-an-account" /> Create an account</label>
                        <label for="ship-to-billing-address" class="checkbox"><input type="checkbox" checked id="ship-to-billing-address" /> Ship to Billing Address</label>
                    </div><!-- /.form-group -->
                    <div class="form-group text-right">
                        <a data-toggle="collapse" data-parent="#checkout-accordion" href="#collapseShipping" class="btn btn-primary btn-lg uppercase strong">Continue</a>
                    </div><!-- /.form-group -->
                </div><!-- /.panel-body -->
            </div><!-- /.panel-collapse  -->
        </div><!-- /.panel-default -->

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#checkout-accordion" href="#collapseShipping" class="collapsed">
                        Delivery Methods
                        <span data-icon="&#x50;" class="expand pull-right"></span>
                        <span data-icon="&#x4f;" class="contract pull-right"></span>
                    </a>
                </h3><!-- /.panel-title -->
            </div><!-- /.panel-heading -->
            <div id="collapseShipping" class="panel-collapse collapse">
                <div class="panel-body">
                    <table class="table table-delivery-option">
                        <thead>
                            <tr>
                                <th colspan="3">Choose a delivery option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    <label class="radio">
                                        <input name="carrier" type="radio">
                                    </label>
                                </td>
                                <td>
                                    <a class="media">
                                        <img src="http://placehold.it/64x64" alt="" class="pull-left media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">FedExpress</h4>
                                            <p>
                                                Delivery in 24 hours within the USA
                                            </p>
                                        </div>
                                    </a>
                                </td>
                                <td class="text-center">
                                    <span class="price">$20.00</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-center">
                                    <label class="radio">
                                        <input name="carrier" type="radio">
                                    </label>
                                </td>
                                <td>
                                    <a class="media">
                                        <img src="http://placehold.it/64x64" alt="" class="pull-left media-object">
                                        <div class="media-body">
                                            <h4 class="media-heading">RedDart</h4>
                                            <p>
                                                Delivery in 24 hours within the USA
                                            </p>
                                        </div>
                                    </a>
                                </td>
                                <td class="text-center">
                                    <span class="price">$20.00</span>
                                </td>
                            </tr>
                        </tbody>
                    </table><!-- /table -->

                    <div class="form-group text-right">
                        <a data-toggle="collapse" data-parent="#checkout-accordion" href="#collapseFeatures" class="btn btn-primary btn-lg uppercase strong">Continue</a>
                    </div><!-- /.form-group -->
                </div><!-- /.panel-body -->
            </div><!-- /.panel-collapse -->
        </div><!-- /.panel-default -->

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">
                    <a data-toggle="collapse" data-parent="#checkout-accordion" href="#collapseFeatures" class="collapsed">
                        Payment Method
                        <span data-icon="&#x50;" class="expand pull-right"></span>
                        <span data-icon="&#x4f;" class="contract pull-right"></span>
                    </a>
                </h3><!-- /.panel-title -->
            </div><!-- /.panel-heading -->
            <div id="collapseFeatures" class="panel-collapse collapse">
                <div class="panel-body text-justify">
                    <div id="HOOK_PAYMENT">
                        <p class="payment_module">
                            <label class="radio">
                                <input type="radio" name="payment-method" />
                                Pay by Check
                            </label>
                        </p><!-- /.payment_module -->

                        <p class="payment_module">
                            <label class="radio">
                                <input type="radio" name="payment-method" />
                                Pay by Bankwire
                            </label>
                        </p><!-- /.payment_module -->

                        <p class="payment_module">
                            <label class="radio">
                                <input type="radio" name="payment-method" />
                                Pay by Paypal
                            </label>
                        </p><!-- /.payment_module -->
                    </div><!-- /#hook_module -->

                    <div class="form-actions text-right">
                        <a href="index.php?page=order-confirmation" class="btn btn-primary uppercase strong btn-lg">Place Order</a>
                    </div><!-- /.form-actions -->
                </div><!-- /.panel-body -->
            </div><!-- /.panel-collapse -->
        </div><!-- /.panel-default -->
    </div><!-- /.panel group -->
</form><!-- /.checkout form -->