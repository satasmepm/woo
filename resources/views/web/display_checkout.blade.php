@extends('web.web_master')

@section('content')

<div class="container mb-80 mt-50"> 
    <div class="row">
        <div class="col-lg-8 mb-40">
            <h1 class="heading-2 mb-10">Checkout</h1>
            <div class="d-flex justify-content-between">
                <h6 class="text-body">There are <span class="text-brand" id="count"></span> products in your cart</h6>
            </div>
        </div>
    </div>

    <div class="row">
        {{-- <div class="col-lg-7"> --}}
            {{-- <div class="row mb-50">
             
                <div class="col-lg-6">
                    <form method="post" class="apply-coupon">
                        <input type="text" placeholder="Enter Coupon Code...">
                        <button class="btn  btn-md" name="login">Apply Coupon</button>
                    </form>
                </div>
            </div> --}}

            <div class="row">
                <h4 class="mb-30">Shipping Details</h4>
                <form method="post">
                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input type="text" required name="first_name" placeholder="First name *">
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" required name="last_name" placeholder="Last name *">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input type="text" name="billing_address1" required placeholder="Address line1 *">
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" name="billing_address2" required placeholder="Address line2 *">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input type="text" name="billing_address3" required placeholder="Address line3 *">
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" name="billing_address4" required placeholder="Address line4 *">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group  col-lg-6">
                            {{-- <div class="custom_select"> --}}
                                <select id="country_dropdown" class="form-select form-select-sm mb-3" >
                                    {{-- <option selected>select your country</option> --}}
                                    @foreach ($shipping as $item)
                                    
                                    <option value="{{ $item->shipping_price  }}">{{ $item->country_name }}</option>
                                    
                                    @endforeach
                                   
                                    
                                  </select>
                         
                        {{-- </div> --}}
                    </div>

                    <div class="form-group col-lg-6">
                        <input required="" type="text" name="email" placeholder="Email address *">
                    </div>
                    </div>

                    {{-- <div class="row shipping_calculator">
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
                        </div> --}}


                        {{-- <div class="form-group col-lg-6">
                            <input required="" type="text" name="city" placeholder="City / Town *">
                        </div> --}}
                    </div>


                    <div class="row">
                        <div class="form-group col-lg-6">
                            <input required type="text" name="zipcode" placeholder="Postcode / ZIP *">
                        </div>
                        <div class="form-group col-lg-6">
                            <input required type="text" name="phone" placeholder="Phone *">
                        </div>
                    </div>


                    {{-- <div class="row">
                       
                        <div class="form-group col-lg-6">
                            <input required="" type="text" name="email" placeholder="Email address *">
                        </div>
                    </div> --}}
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


        
        <div class="col-lg-12">
            <div class="border p-40 cart-totals ml-30 mb-50">
                {{-- <div class="d-flex align-items-end justify-content-between mb-30"> --}}
                  <div >
                    <h3 class="m-3">Order</h3>
                    <h5 class="m-2">Sub total : <span id="total"> </span></h5>
                    {{-- <h5 class="m-2">Subtotal :  <span id="subtotal">44 </span></h5> --}}
                    <h5 class="m-2">Shipping price :  <span id="shipping_price"> </span></h5>
                    <h5 class="m-2">Total price  <span id="final"> </span></h5>
                    {{-- <h5 id="order_details"></h5> --}}
                  
                </div>
                <div class="divider-2 mb-30"></div>
                <div class="table-responsive order_table checkout">
                    <table class="table no-border">
                        <tbody id="order_details">
                            {{-- <tr>
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
                            </tr> --}}
                         
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

                <a href="#" class="btn btn-fill-out btn-block mt-30 m-5">Place an Order<i class="fi-rs-sign-out ml-15"></i></a>
            </div>
        </div>
    </div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script>

$(document).ready(function(){


    var last_price = 0;
    load(last_price)


      $("#country_dropdown").change(function (event) {

      
       last_price=0;


        var country_shipping =  $('#country_dropdown').val();


        last_price = last_price+parseFloat(country_shipping);
      
        var order_details4 = document.getElementById('shipping_price');
        var  _details4 = '';
        _details4+=country_shipping;
        order_details4.innerHTML = _details4;
        // console.log(last_price);
        load(last_price)
        });


        function load(last){


      

$.ajax({

    
      
 url: "{{url('cart_json')}}", //this is your uri
 type: 'get', //this is your method
 success: function (checkout) {
 console.log(checkout);
    var pro = JSON.parse(checkout);
   
    var count = pro.original.count;
    var total = pro.original.total;
    var final_price = last+parseFloat(total);
    var final_prices = final_price.toFixed(2);
    // console.log(last_price);
   
   

    // total = total+ last_price;
    // console.log(final_price);

    var order_details =  document.getElementById('order_details');
    var order_details2 = document.getElementById('total');
    var order_details3 = document.getElementById('count');
    var order_details4 = document.getElementById('final');

    var  _details2 = '';
    var  _details  = '';
    var  _details3 = '';
    var  _details4 = '';

    _details2+=total;
    _details3+=count;
    _details4+=final_prices;

    // console.log(count);
    // console.log(total);
    for (var i in pro.original.items) {


        // _details+='testing1';
        _details+='<tr>'+
                                '<td class="image product-thumbnail"><img src="{{ asset('/product_images/')}}/' +pro.original.items[i].weight+'.jpg'+ '" alt=""> </td>'+
                               
                                '<td>'+
                                    '<h4 class="w-160 mb-5">'+pro.original.items[i].name+'</h4></span>'+
                                    // '<div class="product-rate-cover">'+
                                    //     '<div class="product-rate d-inline-block">'+
                                    //         '<div class="product-rating" style="width:90%">'+
                                    //         '</div>'+
                                    //     '</div>'+
                                    //     '<span class="font-small ml-5 text-muted"> (4.0)</span>'+
                                    // '</div>'+
                                '</td>'+
                                '<td>'+
                                    '<h4 class=" pl-20 pr-20">x '+pro.original.items[i].qty+'</h6>'+
                                '</td>'+
                                '<td>'+
                                    '<h4 class="text-brand">'+pro.original.items[i].subtotal+'</h4>'+
                                '</td>'+
                            '</tr> ';






    }

    
   
    order_details.innerHTML = _details;
    order_details2.innerHTML = _details2;
    order_details3.innerHTML = _details3;
    order_details4.innerHTML = _details4;


}


});

        }



});
</script>
    
@endsection

















