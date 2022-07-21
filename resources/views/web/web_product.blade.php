@extends('web.web_master')

@section('content')

   

     {{-- <div class="container mt-4 mb-4">
    @if (session('success'))
      <div class="alert alert-success">
      {{ session('success') }}   
      <h1>lol</h1>
      </div>
        
    @endif --}}
    @if ($message = Session::get('item_added_to_cart'))
   <div class="alert alert-success alert-block">
    {{-- <button type="button" class="close" data-dismiss="alert">×</button>	 --}}
    <strong>{{ $message }}</strong>
   </div>
    @endif

    
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                <div class="row product-grid-4">
                  
                  
               {{-- <h1>this is testing</h1>      --}}
               @foreach ($product_data as $product)
                   
              

                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    
                                        <img class="default-img" src="{{ asset('product_images/'.$product->product_main_img) }}" alt="" />
                                        {{-- <img class="hover-img" src="{{ asset('product_images/1657514985991.jpg') }}" alt="" /> --}}
                                    
                                </div>
                               
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    {{-- <a href="shop-grid-right.html">Meats</a> --}}
                                    <p>{{ $product->Cat_name  }}</p>
                                </div>
                                <h2><a href=" {{ url('/web/products/detailed/'.$product->id) }}  ">{{ $product->product_name }}</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
       
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>${{ $product->price }}</span>
                                        
                                    </div>
                                    {{-- <div class="add-cart">
                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->

                    @endforeach

                   
                </div>
                <!--End product-grid-4-->
            </div>
        </div>
     </div>


@endsection


















