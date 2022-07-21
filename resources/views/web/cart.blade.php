@extends('web.web_master')


@section('content')


<div class="container mb-80 mt-50">
    <div class="row">
        <div class="col-lg-8 mb-40">
            <h1 class="heading-2 mb-10">Your Cart</h1>
            <div class="d-flex justify-content-between">
                <h6 class="text-body">There are <span class="text-brand"><h5 id="count" ></h5></span> products in your cart</h6>
                {{-- <h6 class="text-body"><a href="#" class="text-muted"><i class="fi-rs-trash mr-5"></i>Clear Cart</a></h6> --}}
            </div>
        </div>
    </div>
   
   
  

    <div class="row">
        <div class="col-lg-8">
            <div class="table-responsive shopping-summery">
                <table class="table table-wishlist">
                    <thead>
                        <tr class="main-heading">
                            <th class="custome-checkbox start pl-30">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox11" value="">
                                <label class="form-check-label" for="exampleCheckbox11"></label>
                            </th>
                            <th scope="col">Product</th>
                            <th scope="col">Product name</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Subtotal</th>
                            <th scope="col" class="end">Remove</th>
                        </tr>
                    </thead>
                    <tbody id="mycart">

                      
                    

                        {{-- <tr class="pt-30">
                            <td class="custome-checkbox pl-30">
                                <input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">
                                <label class="form-check-label" for="exampleCheckbox1"></label>
                            </td>
                            <td class="image product-thumbnail pt-40"><img src="assets/imgs/shop/product-1-1.jpg" alt="#"></td>
                            <td class="product-des product-name">
                                <h6 class="mb-5"><a class="product-name mb-10 text-heading" href="shop-product-right.html"> </a></h6>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width:90%">
                                        </div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                            </td>
                            <td class="price" data-title="Price">
                                <h4 class="text-body">$2.51 </h4>
                            </td>
                            <td class="text-center detail-info" data-title="Stock">
                                <div class="detail-extralink mr-15">
                                    <div class="detail-qty border radius">
                                        <a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
                                        <input type="text" name="quantity" class="qty-val" value="1" min="1">
                                        <a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
                                    </div>
                                </div>
                            </td>
                            <td class="price" data-title="Price">
                                <h4 class="text-brand">$2.51 </h4>
                            </td>
                            <td class="action text-center" data-title="Remove"><a href="#" class="text-body"><i class="fi-rs-trash"></i></a></td>
                        </tr> --}}
                      
                      

                       
               
                    </tbody>
                </table>
            </div>
            <div class="divider-2 mb-30"></div>
            <div class="cart-action d-flex justify-content-between">
                <a href="{{ url('/web/products') }}" class="btn "><i class="fi-rs-arrow-left mr-10"></i>Continue Shopping</a>
                {{-- <a class="btn  mr-10 mb-sm-15"><i class="fi-rs-refresh mr-10"></i>Update Cart</a> --}}
            </div>
            {{-- <div class="row mt-50">
                <div class="col-lg-7">
                    <div class="calculate-shiping p-40 border-radius-15 border">
                        <h4 class="mb-10">Calculate Shipping</h4>
                        <p class="mb-30"><span class="font-lg text-muted">Flat rate:</span><strong class="text-brand">5%</strong></p>
                        <form class="field_form shipping_calculator">
                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <div class="custom_select">
                                        <select class="form-control select-active w-100">
                                            <option value="">United Kingdom</option>
                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row row">
                                <div class="form-group col-lg-6">
                                    <input required="required" placeholder="State / Country" name="name" type="text">
                                </div>
                                <div class="form-group col-lg-6">
                                    <input required="required" placeholder="PostCode / ZIP" name="name" type="text">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="p-40">
                        <h4 class="mb-10">Apply Coupon</h4>
                        <p class="mb-30"><span class="font-lg text-muted">Using A Promo Code?</p>
                        <form action="#">
                            <div class="d-flex justify-content-between">
                                <input class="font-medium mr-15 coupon" name="Coupon" placeholder="Enter Your Coupon">
                                <button class="btn"><i class="fi-rs-label mr-10"></i>Apply</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="col-lg-4 mt-4">
            <div class="border p-md-4 cart-totals ml-30">
                <div class="table-responsive">
                    <table class="table no-border">
                        <tbody>
                            {{-- <tr>
                                <td class="cart_total_label">
                                    <h6 class="text-muted">Subtotal</h6>
                                </td>
                                <td class="cart_total_amount">
                                    <h4 class="text-brand text-end">$12.31</h4>
                                </td>
                            </tr> --}}
                            {{-- <tr>
                                <td scope="col" colspan="2">
                                    <div class="divider-2 mt-10 mb-10"></div>
                                </td>
                            </tr> --}}
                            {{-- <tr>
                                <td class="cart_total_label">
                                    <h6 class="text-muted">Shipping</h6>
                                </td>
                                <td class="cart_total_amount">
                                    <h5 class="text-heading text-end">Free</h5></td> </tr> <tr>
                                <td class="cart_total_label">
                                    <h6 class="text-muted">Estimate for</h6>
                                </td>
                                <td class="cart_total_amount">
                                    <h5 class="text-heading text-end">United Kingdom</h5></td> </tr> <tr>
                                <td scope="col" colspan="2">
                                    <div class="divider-2 mt-10 mb-10"></div>
                                </td>
                            </tr> --}}
                            <tr>
                                <td class="cart_total_label">
                                    <h6 class="text-muted">Total</h6>
                                </td>
                                <td class="cart_total_amount">
                                    <h4 id="display_total" class="text-brand text-end"></h4>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a href="{{ url('checkout') }}" class="btn mb-20 w-100">Proceed To CheckOut<i class="fi-rs-sign-out ml-15"></i></a>
            </div>
        </div>
    </div>
</div>



{{-- <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script>

var table_body = document.getElementById('mycart');
var h3 = document.getElementById('count');
var h4 = document.getElementById('display_total');

var _html = '';
var _html2 = '';
var _html3 = '';

$.ajax({

       
url: "{{url('cart_json')}}", //this is your uri
type: 'get', //this is your method
success: function (data) {
 console.log(data);
    var pro = JSON.parse(data);
   
    var count = pro.original.count;
    var total = pro.original.total;

    _html2+=count;
    _html3+=total;

    console.log(_html3);
    // console.log(count);

  
   
    


    for (var i in pro.original.items) {
      
        console.log(">>>>>>>>>>>>>> : "+pro.original.items[i].weight);
        // console.log(">>>>>>>>>>>>>> : "+pro.original[i].total);
       // amount = parseFloat(pro.original[i].price) * parseFloat(pro.original[i].qty);
 
    //    _html+='<tr><td>'+pro.original.items[i].price+'</td></tr>';
    // _html+='<tr><td>'+pro.original.items[i].price+'</td></tr>';






    _html+='<tr class="pt-30">'+
                            '<td class="custome-checkbox pl-30">'+
                                '<input class="form-check-input" type="checkbox" name="checkbox" id="exampleCheckbox1" value="">'+
                                '<label class="form-check-label" for="exampleCheckbox1"></label>'+
                            '</td>'+
                            // '<td class="image product-thumbnail pt-40"><img src="" alt="not found"></td>'+
                            '<td class="image product-thumbnail pt-40">'+
                                // '<img src="{{ asset('/+pro.original.items[i].weight+".jpg"+') }}" alt="not found">'+
                                '<img src="{{ asset('/images/food')}}/' +data[i].img + '" alt="">' + 
                                '<img src="{{ asset('/product_images/')}}/' +pro.original.items[i].weight+'.jpg'+ '" alt="">' + 
                                // '<img src="{{ asset('/product_images/')}}'+pro.original.items[i].weight + '.jpg'+'" >' + 
                               '</td>'+
                            // '<td class="product-des product-name">'+
                            //     '<h6 class="mb-5"><a class="product-name mb-10 text-heading" href="shop-product-right.html"> </a></h6>'+
                            //     '<div class="product-rate-cover">'+
                            //         '<div class="product-rate d-inline-block">'+
                            //             '<div class="product-rating" style="width:90%">'+
                            //             '</div>'+
                            //         '</div>'+
                            //         '<span class="font-small ml-5 text-muted"> (4.0)</span>'+
                            //     '</div>'+
                            // '</td>'+
                            '<td class="custome-checkbox pl-30">'+
                                '<p> '+pro.original.items[i].name+' </p>'+
                            '</td>'+
                            '<td class="price" data-title="Price">'+
                                '<h4 class="text-body"> '+'$'+pro.original.items[i].price+'  </h4>'+
                            '</td>'+
                            // '<td class="text-center detail-info" data-title="Stock">'+
                            //     '<div class="detail-extralink mr-15">'+
                            //         '<div class="detail-qty border radius">'+
                            //             // '<a href="#" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>'+
                            //             // '<input type="text" name="quantity" class="qty-val" value="1" min="1">'+
                            //             '<a href="#" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>'+
                            //         '</div>'+
                            //     '</div>'+
                            // '</td>'+
                            '<td class="price" data-title="Price">'+
                                '<h4 class="text-brand"> '+pro.original.items[i].qty+' </h4>'+
                            '</td>'+
                             '<td class="price" data-title="Price">'+
                                '<h4 class="text-brand">'+'$'+pro.original.items[i].subtotal+' </h4>'+
                            '</td>'+
                            '<td class="action text-center" data-title="Remove"><button onclick="delete_confirm('+pro.original.items[i].uid+')"  class="text-body"><i class="fi-rs-trash"></i></button></td>'+
                        '</tr>';



       

    }


    table_body.innerHTML = _html;
    h3.innerHTML = _html2;
    h4.innerHTML = _html3;

   

}


});

function delete_confirm(uid){
    var test = uid;
    $.ajax({
    url:"{{ url('cart_json_delete') }}"+"/"+test,
    dataType:'json',

        success:function(res){
                console.log("res : "+res);
                location.reload();
        }
});






// ajax for send uid to controller
  

}

</script>
@endsection