@extends('web.web_master')


@section('content')
    

    <main class="main">
        <section class="home-slider position-relative mb-30">
            <div class="home-slide-cover">
                <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
                    <div class="single-hero-slider rectangle single-animation-wrap" style="background-image: url(assets/imgs/slider/slider-5.png)">
                        <div class="slider-content">
                            <div class="row">
                                <div class="col-md-9 col-lg-9 col-sm-12">
                                <h1 class="display-2 mb-40">
                                Don’t miss<br />
                                amazing deals
                            </h1>
                                </div> 
                                <div class="col-md-3 col-lg-3 col-sm-12">
                                  
                                </div>
                            </div>

                          
                            <p class="mb-65">Sign up for the daily newsletter</p>
                            <form class="form-subcriber d-flex">
                                <input type="email" placeholder="Your emaill address" />
                                <button class="btn" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="single-hero-slider rectangle single-animation-wrap" style="background-image: url(assets/imgs/slider/slider-6.png)">
                        <div class="slider-content">
                            <h1 class="display-2 mb-40">
                                Fresh Vegetables<br />
                                Big discount
                            </h1>
                            <p class="mb-65">Save up to 50% off on your first order</p>
                            <form class="form-subcriber d-flex">
                                <input type="email" placeholder="Your emaill address" />
                                <button class="btn" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="slider-arrow hero-slider-1-arrow"></div>
            </div>
        </section>
        <!--End hero-->

  <!--End category slider-->
  <section class="banners mb-25">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay="0">
                            <img src="assets/imgs/banner/banner-1.png" alt="" />
                            <div class="banner-text">
                                <h4>
                                    Everyday Fresh & <br />Clean with Our<br />
                                    Products
                                </h4>
                                <a href="shop-grid-right.html" class="btn btn-xs">Shop Now <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="banner-img wow animate__animated animate__fadeInUp" data-wow-delay=".2s">
                            <img src="assets/imgs/banner/banner-2.png" alt="" />
                            <div class="banner-text">
                                <h4>
                                    Make your Breakfast<br />
                                    Healthy and Easy
                                </h4>
                                <a href="shop-grid-right.html" class="btn btn-xs">Shop Now <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-md-none d-lg-flex">
                        <div class="banner-img mb-sm-0 wow animate__animated animate__fadeInUp" data-wow-delay=".4s">
                            <img src="assets/imgs/banner/banner-3.png" alt="" />
                            <div class="banner-text">
                                <h4>The best Organic <br />Products Online</h4>
                                <a href="shop-grid-right.html" class="btn btn-xs">Shop Now <i class="fi-rs-arrow-small-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End banners-->
        <section class="popular-categories section-padding">
            <div class="container">
                <div class="section-title">
                    <div class="title">
                        <h3>Shop by Categories</h3>
                        <a class="show-all" href="shop-grid-right.html">
                            All Categories
                            <i class="fi-rs-angle-right"></i>
                        </a>
                    </div>
                    <div class="slider-arrow slider-arrow-2 flex-right carausel-8-columns-arrow" id="carausel-8-columns-arrows"></div>
                </div>
                <div class="carausel-8-columns-cover position-relative">
                    <div class="carausel-8-columns" id="carausel-8-columns">
                        <div class="card-1">
                            <figure class="img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img src="assets/imgs/theme/icons/category-1.svg" alt="" /></a>
                            </figure>
                            <h6>
                                <a href="shop-grid-right.html">Milks and <br />Dairies</a>
                            </h6>
                        </div>
                        <div class="card-1">
                            <figure class="img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img src="assets/imgs/theme/icons/category-2.svg" alt="" /></a>
                            </figure>
                            <h6>
                                <a href="shop-grid-right.html">Wines & <br />
                                    Alcohol</a>
                            </h6>
                        </div>
                        <div class="card-1">
                            <figure class="img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img src="assets/imgs/theme/icons/category-3.svg" alt="" /></a>
                            </figure>
                            <h6>
                                <a href="shop-grid-right.html">Clothing & <br />Beauty</a>
                            </h6>
                        </div>
                        <div class="card-1">
                            <figure class="img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img src="assets/imgs/theme/icons/category-4.svg" alt="" /></a>
                            </figure>
                            <h6>
                                <a href="shop-grid-right.html">Pet Foods <br />& Toy</a>
                            </h6>
                        </div>
                        <div class="card-1">
                            <figure class="img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img src="assets/imgs/theme/icons/category-5.svg" alt="" /></a>
                            </figure>
                            <h6>
                                <a href="shop-grid-right.html">Packaged <br />fast food</a>
                            </h6>
                        </div>
                        <div class="card-1">
                            <figure class="img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img src="assets/imgs/theme/icons/category-6.svg" alt="" /></a>
                            </figure>
                            <h6>
                                <a href="shop-grid-right.html">Baking <br />material</a>
                            </h6>
                        </div>
                        <div class="card-1">
                            <figure class="img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img src="assets/imgs/theme/icons/category-7.svg" alt="" /></a>
                            </figure>
                            <h6>
                                <a href="shop-grid-right.html">Vegetables <br />& tubers</a>
                            </h6>
                        </div>
                        <div class="card-1">
                            <figure class="img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img src="assets/imgs/theme/icons/category-8.svg" alt="" /></a>
                            </figure>
                            <h6>
                                <a href="shop-grid-right.html">Fresh <br />Seafood</a>
                            </h6>
                        </div>
                        <div class="card-1">
                            <figure class="img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img src="assets/imgs/theme/icons/category-9.svg" alt="" /></a>
                            </figure>
                            <h6>
                                <a href="shop-grid-right.html">Noodles <br />Rice</a>
                            </h6>
                        </div>
                        <div class="card-1">
                            <figure class="img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img src="assets/imgs/theme/icons/category-10.svg" alt="" /></a>
                            </figure>
                            <h6><a href="shop-grid-right.html">Fastfood</a></h6>
                        </div>
                        <div class="card-1">
                            <figure class="img-hover-scale overflow-hidden">
                                <a href="shop-grid-right.html"><img src="assets/imgs/theme/icons/category-11.svg" alt="" /></a>
                            </figure>
                            <h6><a href="shop-grid-right.html">Ice cream</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End category slider-->
        <section class="featured section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 mb-md-4 mb-xl-0">
                    <div class="banner-left-icon d-flex align-items-center wow fadeIn animated">
                        <div class="banner-icon">
                            <img src="{{ asset('assets/imgs/theme/icons/icon-1.svg') }}" alt="" />
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">Best prices & offers</h3>
                            <p>Orders $50 or more</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="banner-left-icon d-flex align-items-center wow fadeIn animated">
                        <div class="banner-icon">
                            <img src="{{ asset('assets/imgs/theme/icons/icon-2.svg') }}" alt="" />
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">Free delivery</h3>
                            <p>24/7 amazing services</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="banner-left-icon d-flex align-items-center wow fadeIn animated">
                        <div class="banner-icon">
                            <img src="{{ asset('assets/imgs/theme/icons/icon-3.svg') }}" alt="" />
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">Great daily deal</h3>
                            <p>When you sign up</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="banner-left-icon d-flex align-items-center wow fadeIn animated">
                        <div class="banner-icon">
                            <img src="{{ asset('assets/imgs/theme/icons/icon-4.svg') }}" alt="" />
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">Wide assortment</h3>
                            <p>Mega Discounts</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                    <div class="banner-left-icon d-flex align-items-center wow fadeIn animated">
                        <div class="banner-icon">
                            <img src="{{ asset('assets/imgs/theme/icons/icon-5.svg') }}" alt="" />
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">Easy returns</h3>
                            <p>Within 30 days</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-xl-none">
                    <div class="banner-left-icon d-flex align-items-center wow fadeIn animated">
                        <div class="banner-icon">
                            <img src="{{ asset('assets/imgs/theme/icons/icon-6.svg') }}" alt="" />
                        </div>
                        <div class="banner-text">
                            <h3 class="icon-box-title">Safe delivery</h3>
                            <p>Within 30 days</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-grey-1 section-padding pt-100 pb-80 mb-80">
            <div class="container">
                <h1 class="mb-80 text-center">New Arrivals</h1>
                <div class="row product-grid">
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-right.html">
                                        <img class="default-img" src="assets/imgs/shop/product-1-1.jpg" alt="" />
                                        <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="hot">Hot</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Snack</a>
                                </div>
                                <h2><a href="shop-product-right.html">Seeds of Change Organic Quinoe Naturel</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>$28.85</span>
                                        <span class="old-price">$32.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-right.html">
                                        <img class="default-img" src="assets/imgs/shop/product-2-1.jpg" alt="" />
                                        <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="sale">Sale</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                </div>
                                <h2><a href="shop-product-right.html">All Natural Italian-Style Chicken Meatballs</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 80%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (3.5)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Stouffer</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>$52.85</span>
                                        <span class="old-price">$55.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-right.html">
                                        <img class="default-img" src="assets/imgs/shop/product-3-1.jpg" alt="" />
                                        <img class="hover-img" src="assets/imgs/shop/product-3-2.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="new">New</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Snack</a>
                                </div>
                                <h2><a href="shop-product-right.html">Angie’s Boomchickapop Sweet & Salty</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 85%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">StarKist</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>$48.85</span>
                                        <span class="old-price">$52.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-right.html">
                                        <img class="default-img" src="assets/imgs/shop/product-4-1.jpg" alt="" />
                                        <img class="hover-img" src="assets/imgs/shop/product-4-2.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Vegetables</a>
                                </div>
                                <h2><a href="shop-product-right.html">Foster Farms Takeout Crispy Classic</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>$17.85</span>
                                        <span class="old-price">$19.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-right.html">
                                        <img class="default-img" src="assets/imgs/shop/product-5-1.jpg" alt="" />
                                        <img class="hover-img" src="assets/imgs/shop/product-5-2.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                                <div class="product-badges product-badges-position product-badges-mrg">
                                    <span class="best">-14%</span>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Pet Foods</a>
                                </div>
                                <h2><a href="shop-product-right.html">Blue Diamond Almonds Lightly Naturel</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>$23.85</span>
                                        <span class="old-price">$25.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end product card-->
                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                        <div class="product-cart-wrap mb-30">
                            <div class="product-img-action-wrap">
                                <div class="product-img product-img-zoom">
                                    <a href="shop-product-right.html">
                                        <img class="default-img" src="assets/imgs/shop/product-6-1.jpg" alt="" />
                                        <img class="hover-img" src="assets/imgs/shop/product-6-2.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="product-action-1">
                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-content-wrap">
                                <div class="product-category">
                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                </div>
                                <h2><a href="shop-product-right.html">Chobani Complete Vanilla Greek Bottle</a></h2>
                                <div class="product-rate-cover">
                                    <div class="product-rate d-inline-block">
                                        <div class="product-rating" style="width: 90%"></div>
                                    </div>
                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                </div>
                                <div>
                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                </div>
                                <div class="product-card-bottom">
                                    <div class="product-price">
                                        <span>$54.85</span>
                                        <span class="old-price">$55.8</span>
                                    </div>
                                    <div class="add-cart">
                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
              
            </div>
        </section>

        <section class="newsletter mb-15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="position-relative newsletter-inner">
                            
                            <img src="assets/imgs/banner/banner-9.png" alt="newsletter" />
                             
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="position-relative newsletter-inner">
                            
                            <img src="assets/imgs/banner/banner-9.png" alt="newsletter" />
                            <div class="newsletter-content">
                                <h2 class="mb-20">
                                    Stay home & get your daily <br />
                                    needs from our shop
                                </h2>
                                <p class="mb-45">Start You'r Daily Shopping with <span class="text-brand">Nest Mart</span></p>
                                <form class="form-subcriber d-flex">
                                    <input type="email" placeholder="Your emaill address" />
                                    <button class="btn" type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container mb-30">
            <div class="row">
                <div class="col-lg-5-5">
                    <section class="product-tabs section-padding position-relative">
                        <div class="section-title style-2">
                            <h3>Popular Products</h3>
                            <ul class="nav nav-tabs links" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">All</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="nav-tab-two" data-bs-toggle="tab" data-bs-target="#tab-two" type="button" role="tab" aria-controls="tab-two" aria-selected="false">Milks & Dairies</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">Coffes & Teas</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="nav-tab-four" data-bs-toggle="tab" data-bs-target="#tab-four" type="button" role="tab" aria-controls="tab-four" aria-selected="false">Pet Foods</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="nav-tab-five" data-bs-toggle="tab" data-bs-target="#tab-five" type="button" role="tab" aria-controls="tab-five" aria-selected="false">Meats</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="nav-tab-six" data-bs-toggle="tab" data-bs-target="#tab-six" type="button" role="tab" aria-controls="tab-six" aria-selected="false">Vegetables</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="nav-tab-seven" data-bs-toggle="tab" data-bs-target="#tab-seven" type="button" role="tab" aria-controls="tab-seven" aria-selected="false">Fruits</button>
                                </li>
                            </ul>
                        </div>
                        <!--End nav-tabs-->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                                <div class="row product-grid-4">
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-1-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Seeds of Change Organic Quinoe</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$28.85</span>
                                                        <span class="old-price">$32.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-2-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">All Natural Italian-Style Chicken Meatballs</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 80%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (3.5)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Stouffer</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$52.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-3-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-3-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Angie’s Boomchickapop Sweet & Salty</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 85%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">StarKist</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$48.85</span>
                                                        <span class="old-price">$52.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-4-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-4-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Vegetables</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Foster Farms Takeout Crispy Classic</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$17.85</span>
                                                        <span class="old-price">$19.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-5-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-5-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">-14%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Pet Foods</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Blue Diamond Almonds Lightly</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-6-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-6-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Chobani Complete Vanilla Greek</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$54.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-7-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-7-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Meats</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Canada Dry Ginger Ale – 2 L Bottle</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$32.85</span>
                                                        <span class="old-price">$33.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-8-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-8-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Encore Seafoods Stuffed Alaskan</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$35.85</span>
                                                        <span class="old-price">$37.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-9-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-9-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Coffes</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Gorton’s Beer Battered Fish Fillets</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Old El Paso</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-10-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-10-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Cream</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Haagen-Dazs Caramel Cone Ice Cream</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 50%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (2.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Tyson</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$22.85</span>
                                                        <span class="old-price">$24.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-1-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Seeds of Change Organic Quinoe</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$28.85</span>
                                                        <span class="old-price">$32.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-2-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">All Natural Italian-Style Chicken Meatballs</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 80%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (3.5)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Stouffer</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$52.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-3-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-3-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Angie’s Boomchickapop Sweet & Salty</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 85%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">StarKist</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$48.85</span>
                                                        <span class="old-price">$52.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-4-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-4-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Vegetables</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Foster Farms Takeout Crispy Classic</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$17.85</span>
                                                        <span class="old-price">$19.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-5-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-5-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">-14%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Pet Foods</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Blue Diamond Almonds Lightly</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                </div>
                                <!--End product-grid-4-->
                            </div>
                            <!--En tab one-->
                            <div class="tab-pane fade" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                                <div class="row product-grid-4">
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-10-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-10-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Seeds of Change Organic Quinoa, Brown, & Red Rice</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$28.85</span>
                                                        <span class="old-price">$32.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-12-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-12-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">All Natural Italian-Style Chicken Meatballs</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 80%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (3.5)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Stouffer</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$52.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-13-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-13-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Angie’s Boomchickapop Sweet & Salty Kettle Corn</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 85%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">StarKist</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$48.85</span>
                                                        <span class="old-price">$52.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-14-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-14-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Vegetables</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Foster Farms Takeout Crispy Classic Buffalo Wings</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$17.85</span>
                                                        <span class="old-price">$19.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-15-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-15-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">-14%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Pet Foods</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Blue Diamond Almonds Lightly Salted Vegetables</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-16-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-16-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Chobani Complete Vanilla Greek Yogurt</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$54.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-7-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-7-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Meats</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Canada Dry Ginger Ale – 2 L Bottle - 200ml - 400g</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$32.85</span>
                                                        <span class="old-price">$33.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-8-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-8-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Encore Seafoods Stuffed Alaskan Salmon</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$35.85</span>
                                                        <span class="old-price">$37.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-9-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-9-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Coffes</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Gorton’s Beer Battered Fish Fillets with soft paper</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Old El Paso</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-10-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-10-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Cream</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Haagen-Dazs Caramel Cone Ice Cream Ketchup</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 50%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (2.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Tyson</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$22.85</span>
                                                        <span class="old-price">$24.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                </div>
                                <!--End product-grid-4-->
                            </div>
                            <!--En tab two-->
                            <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                                <div class="row product-grid-4">
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-9-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-9-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Seeds of Change Organic Quinoa, Brown, & Red Rice</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$28.85</span>
                                                        <span class="old-price">$32.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-8-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-8-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">All Natural Italian-Style Chicken Meatballs</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 80%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (3.5)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Stouffer</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$52.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-7-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-7-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Angie’s Boomchickapop Sweet & Salty Kettle Corn</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 85%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">StarKist</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$48.85</span>
                                                        <span class="old-price">$52.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-6-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-6-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Vegetables</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Foster Farms Takeout Crispy Classic Buffalo Wings</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$17.85</span>
                                                        <span class="old-price">$19.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-5-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-5-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">-14%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Pet Foods</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Blue Diamond Almonds Lightly Salted Vegetables</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-4-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-4-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Chobani Complete Vanilla Greek Yogurt</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$54.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-3-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-3-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Meats</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Canada Dry Ginger Ale – 2 L Bottle - 200ml - 400g</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$32.85</span>
                                                        <span class="old-price">$33.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-2-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Encore Seafoods Stuffed Alaskan Salmon</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$35.85</span>
                                                        <span class="old-price">$37.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-9-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-9-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Coffes</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Gorton’s Beer Battered Fish Fillets with soft paper</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Old El Paso</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-1-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Cream</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Haagen-Dazs Caramel Cone Ice Cream Ketchup</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 50%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (2.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Tyson</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$22.85</span>
                                                        <span class="old-price">$24.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                </div>
                                <!--End product-grid-4-->
                            </div>
                            <!--En tab three-->
                            <div class="tab-pane fade" id="tab-four" role="tabpanel" aria-labelledby="tab-four">
                                <div class="row product-grid-4">
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-6-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-6-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Seeds of Change Organic Quinoa, Brown, & Red Rice</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$28.85</span>
                                                        <span class="old-price">$32.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-7-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-7-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">All Natural Italian-Style Chicken Meatballs</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 80%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (3.5)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Stouffer</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$52.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-8-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-8-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Angie’s Boomchickapop Sweet & Salty Kettle Corn</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 85%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">StarKist</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$48.85</span>
                                                        <span class="old-price">$52.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-9-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-9-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Vegetables</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Foster Farms Takeout Crispy Classic Buffalo Wings</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$17.85</span>
                                                        <span class="old-price">$19.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-4-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-4-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">-14%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Pet Foods</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Blue Diamond Almonds Lightly Salted Vegetables</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-3-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-3-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Chobani Complete Vanilla Greek Yogurt</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$54.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-2-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-2-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Meats</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Canada Dry Ginger Ale – 2 L Bottle - 200ml - 400g</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$32.85</span>
                                                        <span class="old-price">$33.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-1-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-1-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Encore Seafoods Stuffed Alaskan Salmon</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$35.85</span>
                                                        <span class="old-price">$37.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-11-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-11-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Coffes</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Gorton’s Beer Battered Fish Fillets with soft paper</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Old El Paso</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-12-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-12-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Cream</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Haagen-Dazs Caramel Cone Ice Cream Ketchup</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 50%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (2.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Tyson</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$22.85</span>
                                                        <span class="old-price">$24.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                </div>
                                <!--End product-grid-4-->
                            </div>
                            <!--En tab four-->
                            <div class="tab-pane fade" id="tab-five" role="tabpanel" aria-labelledby="tab-five">
                                <div class="row product-grid-4">
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-12-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-12-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Seeds of Change Organic Quinoa, Brown, & Red Rice</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$28.85</span>
                                                        <span class="old-price">$32.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-13-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-13-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">All Natural Italian-Style Chicken Meatballs</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 80%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (3.5)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Stouffer</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$52.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-14-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-14-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Angie’s Boomchickapop Sweet & Salty Kettle Corn</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 85%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">StarKist</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$48.85</span>
                                                        <span class="old-price">$52.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-15-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-15-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Vegetables</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Foster Farms Takeout Crispy Classic Buffalo Wings</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$17.85</span>
                                                        <span class="old-price">$19.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-16-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-16-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">-14%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Pet Foods</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Blue Diamond Almonds Lightly Salted Vegetables</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-5-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-5-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Chobani Complete Vanilla Greek Yogurt</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$54.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-7-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-7-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Meats</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Canada Dry Ginger Ale – 2 L Bottle - 200ml - 400g</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$32.85</span>
                                                        <span class="old-price">$33.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-8-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-8-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Encore Seafoods Stuffed Alaskan Salmon</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$35.85</span>
                                                        <span class="old-price">$37.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-9-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-9-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Coffes</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Gorton’s Beer Battered Fish Fillets with soft paper</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Old El Paso</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-10-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-10-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Cream</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Haagen-Dazs Caramel Cone Ice Cream Ketchup</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 50%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (2.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Tyson</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$22.85</span>
                                                        <span class="old-price">$24.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                </div>
                                <!--End product-grid-4-->
                            </div>
                            <!--En tab five-->
                            <div class="tab-pane fade" id="tab-six" role="tabpanel" aria-labelledby="tab-six">
                                <div class="row product-grid-4">
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-4-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-4-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Seeds of Change Organic Quinoa, Brown, & Red Rice</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$28.85</span>
                                                        <span class="old-price">$32.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-6-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-6-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">All Natural Italian-Style Chicken Meatballs</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 80%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (3.5)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Stouffer</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$52.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-8-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-8-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Angie’s Boomchickapop Sweet & Salty Kettle Corn</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 85%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">StarKist</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$48.85</span>
                                                        <span class="old-price">$52.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-9-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-9-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Vegetables</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Foster Farms Takeout Crispy Classic Buffalo Wings</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$17.85</span>
                                                        <span class="old-price">$19.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-5-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-5-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">-14%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Pet Foods</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Blue Diamond Almonds Lightly Salted Vegetables</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-6-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-6-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Chobani Complete Vanilla Greek Yogurt</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$54.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-7-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-7-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Meats</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Canada Dry Ginger Ale – 2 L Bottle - 200ml - 400g</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$32.85</span>
                                                        <span class="old-price">$33.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-8-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-8-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Encore Seafoods Stuffed Alaskan Salmon</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$35.85</span>
                                                        <span class="old-price">$37.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-9-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-9-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Coffes</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Gorton’s Beer Battered Fish Fillets with soft paper</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Old El Paso</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-10-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-10-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Cream</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Haagen-Dazs Caramel Cone Ice Cream Ketchup</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 50%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (2.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Tyson</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$22.85</span>
                                                        <span class="old-price">$24.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                </div>
                                <!--End product-grid-4-->
                            </div>
                            <!--En tab six-->
                            <div class="tab-pane fade" id="tab-seven" role="tabpanel" aria-labelledby="tab-seven">
                                <div class="row product-grid-4">
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-5-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-5-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Seeds of Change Organic Quinoa, Brown, & Red Rice</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$28.85</span>
                                                        <span class="old-price">$32.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-3-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-3-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">All Natural Italian-Style Chicken Meatballs</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 80%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (3.5)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Stouffer</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$52.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-7-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-7-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="new">New</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Angie’s Boomchickapop Sweet & Salty Kettle Corn</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 85%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">StarKist</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$48.85</span>
                                                        <span class="old-price">$52.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-9-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-9-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Vegetables</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Foster Farms Takeout Crispy Classic Buffalo Wings</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$17.85</span>
                                                        <span class="old-price">$19.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap mb-30">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-10-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-10-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="best">-14%</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Pet Foods</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Blue Diamond Almonds Lightly Salted Vegetables</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-16-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-16-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Hodo Foods</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Chobani Complete Vanilla Greek Yogurt</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$54.85</span>
                                                        <span class="old-price">$55.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-7-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-7-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Meats</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Canada Dry Ginger Ale – 2 L Bottle - 200ml - 400g</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$32.85</span>
                                                        <span class="old-price">$33.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-8-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-8-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="sale">Sale</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Snack</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Encore Seafoods Stuffed Alaskan Salmon</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">NestFood</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$35.85</span>
                                                        <span class="old-price">$37.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-9-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-9-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                                <div class="product-badges product-badges-position product-badges-mrg">
                                                    <span class="hot">Hot</span>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Coffes</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Gorton’s Beer Battered Fish Fillets with soft paper</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 90%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (4.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Old El Paso</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$23.85</span>
                                                        <span class="old-price">$25.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                    <div class="col-lg-1-5 col-md-4 col-12 col-sm-6 d-none d-xl-block">
                                        <div class="product-cart-wrap">
                                            <div class="product-img-action-wrap">
                                                <div class="product-img product-img-zoom">
                                                    <a href="shop-product-right.html">
                                                        <img class="default-img" src="assets/imgs/shop/product-10-1.jpg" alt="" />
                                                        <img class="hover-img" src="assets/imgs/shop/product-10-2.jpg" alt="" />
                                                    </a>
                                                </div>
                                                <div class="product-action-1">
                                                    <a aria-label="Add To Wishlist" class="action-btn" href="shop-wishlist.html"><i class="fi-rs-heart"></i></a>
                                                    <a aria-label="Compare" class="action-btn" href="shop-compare.html"><i class="fi-rs-shuffle"></i></a>
                                                    <a aria-label="Quick view" class="action-btn" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-content-wrap">
                                                <div class="product-category">
                                                    <a href="shop-grid-right.html">Cream</a>
                                                </div>
                                                <h2><a href="shop-product-right.html">Haagen-Dazs Caramel Cone Ice Cream Ketchup</a></h2>
                                                <div class="product-rate-cover">
                                                    <div class="product-rate d-inline-block">
                                                        <div class="product-rating" style="width: 50%"></div>
                                                    </div>
                                                    <span class="font-small ml-5 text-muted"> (2.0)</span>
                                                </div>
                                                <div>
                                                    <span class="font-small text-muted">By <a href="vendor-details-1.html">Tyson</a></span>
                                                </div>
                                                <div class="product-card-bottom">
                                                    <div class="product-price">
                                                        <span>$22.85</span>
                                                        <span class="old-price">$24.8</span>
                                                    </div>
                                                    <div class="add-cart">
                                                        <a class="add" href="shop-cart.html"><i class="fi-rs-shopping-cart mr-5"></i>Add </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end product card-->
                                </div>
                                <!--End product-grid-4-->
                            </div>
                            <!--En tab seven-->
                        </div>
                        <!--End tab-content-->
                    </section>
                    <!--Products Tabs-->




                 
                    <!--End Deals-->




                   
                    <!--End banners-->
                </div>
              
            </div>
        </div>
      


      
        <!--End 4 columns-->
    </main>
    @endsection




    