@extends('web.web_master')

@section('content')

<div class="container mb-80 mt-50"> 
    <div class="row">
        <div class="col-lg-8 mb-40">
            <h1 class="heading-2 mb-10">Checkout</h1>
            <div class="d-flex justify-content-between">
                <h6 class="text-body">There are <span class="text-brand">3</span> products in your cart</h6>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-7">
            <div class="row mb-50">
                {{-- <div class="col-lg-6 mb-sm-15 mb-lg-0 mb-md-3">
                    <div class="toggle_info">
                        <span><i class="fi-rs-user mr-10"></i><span class="text-muted font-lg">Already have an account?</span> <a href="#loginform" data-bs-toggle="collapse" class="collapsed font-lg" aria-expanded="false">Click here to login</a></span>
                    </div>
                    <div class="panel-collapse collapse login_form" id="loginform">
                        <div class="panel-body">
                            <p class="mb-30 font-sm">If you have shopped with us before, please enter your details below. If you are a new customer, please proceed to the Billing &amp; Shipping section.</p>
                            <form method="post">
                                <div class="form-group">
                                    <input type="text" name="email" placeholder="Username Or Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" placeholder="Password">
                                </div>
                                <div class="login_footer form-group">
                                    <div class="chek-form">
                                        <div class="custome-checkbox">
                                            <input class="form-check-input" type="checkbox" name="checkbox" id="remember" value="">
                                            <label class="form-check-label" for="remember"><span>Remember me</span></label>
                                        </div>
                                    </div>
                                    <a href="#">Forgot password?</a>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-md" name="login">Log in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-6">
                    <form method="post" class="apply-coupon">
                        <input type="text" placeholder="Enter Coupon Code...">
                        <button class="btn  btn-md" name="login">Apply Coupon</button>
                    </form>
                </div>
            </div>

            <div class="row">
                <h4 class="mb-30">Shipping Details</h4>
                <form method="post">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input type="text" required="" name="fname" placeholder="First name *">
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" required="" name="lname" placeholder="Last name *">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input type="text" name="billing_address" required="" placeholder="Address *">
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" name="billing_address2" required="" placeholder="Address line2">
                        </div>
                    </div>
                    <div class="row shipping_calculator">
                        <div class="form-group col-lg-6">
                            <div class="custom_select">
                                <select class="form-control select-active">
                                    <option value="">Select an option...</option>
                                   
                                    <option value="WS">Western Samoa</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-lg-6">
                            <input required="" type="text" name="city" placeholder="City / Town *">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input required="" type="text" name="zipcode" placeholder="Postcode / ZIP *">
                        </div>
                        <div class="form-group col-lg-6">
                            <input required="" type="text" name="phone" placeholder="Phone *">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input required="" type="text" name="cname" placeholder="Company Name">
                        </div>
                        <div class="form-group col-lg-6">
                            <input required="" type="text" name="email" placeholder="Email address *">
                        </div>
                    </div>
                    <div class="form-group mb-30">
                        <textarea rows="5" placeholder="Additional information"></textarea>
                    </div>
                    {{-- <div class="form-group">
                        <div class="checkbox">
                            <div class="custome-checkbox">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="createaccount">
                                <label class="form-check-label label_info" data-bs-toggle="collapse" href="#collapsePassword" data-target="#collapsePassword" aria-controls="collapsePassword" for="createaccount"><span>Create an account?</span></label>
                            </div>
                        </div>
                    </div>
                    <div id="collapsePassword" class="form-group create-account collapse in">
                        <div class="row">
                            <div class="col-lg-6">
                                <input required="" type="password" placeholder="Password" name="password">
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="ship_detail">
                        <div class="form-group">
                            <div class="chek-form">
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="differentaddress">
                                    <label class="form-check-label label_info" data-bs-toggle="collapse" data-target="#collapseAddress" href="#collapseAddress" aria-controls="collapseAddress" for="differentaddress"><span>Ship to a different address?</span></label>
                                </div>
                            </div>
                        </div>
                        <div id="collapseAddress" class="different_address collapse in">
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <input type="text" required="" name="fname" placeholder="First name *">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" required="" name="lname" placeholder="Last name *">
                                </div>
                            </div>
                            <div class="row shipping_calculator">
                                <div class="form-group col-lg-6">
                                    <input required="" type="text" name="cname" placeholder="Company Name">
                                </div>
                                <div class="form-group col-lg-6">
                                    <div class="custom_select w-100">
                                        <select class="form-control select-active">
                                            
                                            <option value="WS">Western Samoa</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <input type="text" name="billing_address" required="" placeholder="Address *">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input type="text" name="billing_address2" required="" placeholder="Address line2">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <input required="" type="text" name="state" placeholder="State / County *">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input required="" type="text" name="city" placeholder="City / Town *">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <input required="" type="text" name="zipcode" placeholder="Postcode / ZIP *">
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </form>
            </div>
        </div>


        
        <div class="col-lg-5">
            <div class="border p-40 cart-totals ml-30 mb-50">
                <div class="d-flex align-items-end justify-content-between mb-30">
                    <h4>Your Order</h4>
                    <h6 class="text-muted">Subtotal</h6>
                </div>
                <div class="divider-2 mb-30"></div>
                <div class="table-responsive order_table checkout">
                    <table class="table no-border">
                        <tbody>
                            <tr>
                                <td class="image product-thumbnail"><img src="assets/imgs/shop/product-1-1.jpg" alt="#"></td>
                                <td>
                                    <h6 class="w-160 mb-5"><a href="shop-product-full.html" class="text-heading">Yidarton Women Summer Blue</a></h6></span>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                </td>
                                <td>
                                    <h6 class="text-muted pl-20 pr-20">x 1</h6>
                                </td>
                                <td>
                                    <h4 class="text-brand">$13.3</h4>
                                </td>
                            </tr>
                            <tr>
                                <td class="image product-thumbnail"><img src="assets/imgs/shop/product-2-1.jpg" alt="#"></td>
                                <td>
                                    <h6 class="w-160 mb-5"><a href="shop-product-full.html" class="text-heading">Seeds of Change Organic Quinoa</a></h6></span>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                </td>
                                <td>
                                    <h6 class="text-muted pl-20 pr-20">x 1</h6>
                                </td>
                                <td>
                                    <h4 class="text-brand">$15.0</h4>
                                </td>
                            </tr>
                            <tr>
                                <td class="image product-thumbnail"><img src="assets/imgs/shop/product-3-1.jpg" alt="#"></td>
                                <td>
                                    <h6 class="w-160 mb-5"><a href="shop-product-full.html" class="text-heading">Angie’s Boomchickapop Sweet </a></h6></span>
                                    <div class="product-rate-cover">
                                        <div class="product-rate d-inline-block">
                                            <div class="product-rating" style="width:90%">
                                            </div>
                                        </div>
                                        <span class="font-small ml-5 text-muted"> (4.0)</span>
                                    </div>
                                </td>
                                <td>
                                    <h6 class="text-muted pl-20 pr-20">x 1</h6>
                                </td>
                                <td>
                                    <h4 class="text-brand">$17.2</h4>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="payment ml-30">
                <h4 class="mb-30">Payment</h4>
                <div class="payment_option">
                    <div class="custome-radio">
                        <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3" checked="">
                        <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#bankTranfer" aria-controls="bankTranfer">Direct Bank Transfer</label>
                    </div>
                    <div class="custome-radio">
                        <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios4" checked="">
                        <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-target="#checkPayment" aria-controls="checkPayment">Cash on delivery</label>
                    </div>
                    <div class="custome-radio">
                        <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios5" checked="">
                        <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse" data-target="#paypal" aria-controls="paypal">Online Getway</label>
                    </div>
                </div>
                <div class="payment-logo d-flex">
                    <img class="mr-15" src="assets/imgs/theme/icons/payment-paypal.svg" alt="">
                    <img class="mr-15" src="assets/imgs/theme/icons/payment-visa.svg" alt="">
                    <img class="mr-15" src="assets/imgs/theme/icons/payment-master.svg" alt="">
                    <img src="assets/imgs/theme/icons/payment-zapper.svg" alt="">
                </div>
                <a href="#" class="btn btn-fill-out btn-block mt-30">Place an Order<i class="fi-rs-sign-out ml-15"></i></a>
            </div>
        </div>
    </div>
</div>
    
@endsection

















