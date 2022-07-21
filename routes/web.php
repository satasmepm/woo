<?php

use App\Http\Controllers\add_to_cart;
use App\Http\Controllers\admin\admin_loginController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\product_itemController;
use App\Http\Controllers\admin\shipping_by_country;
use App\Http\Controllers\admin\Subcategory;
use App\Http\Controllers\admin\up_del_ProductController;
use App\Http\Controllers\checkoutController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\productController;
use App\Http\Controllers\web_customer_account;
use App\Http\Controllers\web_customer_login;
use App\Http\Controllers\web_product_controller;
use App\Http\Controllers\web_product_detailed;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('web.home');
// });






// route for website
Route::get('/', [homeController::class,'index']);
Route::get('/web/products', [web_product_controller::class,'index']);
Route::get('/web/products/detailed/{id}', [web_product_detailed::class,'index']);



Route::get('web/customer/login/check', [web_customer_login::class,'customer_login_check']);
Route::post('web/customer/login/check/verify', [web_customer_login::class,'customer_login_check_verify']);
Route::get('web/customer/register', [web_customer_login::class,'customer_register_view']);
Route::post('web/customer/register/new', [web_customer_login::class,'customer_register_new']);
Route::get('web/customer/signout', [web_customer_login::class,'logout']);

Route::get('web/customer/account', [web_customer_account::class,'index']);


Route::post('add/to/cart', [add_to_cart::class,'add']);
Route::get('cart', [add_to_cart::class,'cart']);
Route::get('cart_json', [add_to_cart::class,'cart_json']);
Route::get('cart_json_delete/{uid}', [add_to_cart::class,'item_delete']);

Route::get('checkout', [checkoutController::class,'index']);

// route for admin dashboard

 
Route::get('/admin/dashboard', [dashboardController::class,'index']);

Route::get('/admin/login', [admin_loginController::class,'index']);
Route::post('/admin/login',[admin_loginController::class,'check_login']);
Route::get('logout',[admin_loginController::class,'logout']);

Route::get('/admin/category', [CategoryController::class,'index']);


Route::post('/admin/category',[CategoryController::class,'add_category']);

Route::post('/admin/category/edit',[CategoryController::class,'edit_category']);

Route::post('/admin/category/delete',[CategoryController::class,'delete_category']);



Route::get('/admin/subcategory/{sub_id}', [Subcategory::class,'index']);

Route::post('/admin/subcategory/', [Subcategory::class,'add_subcategory']);

Route::post('/admin/subcategory/edit', [Subcategory::class,'edit_subcategory']);

Route::post('/admin/subcategory/delete', [Subcategory::class,'delete_subcategory']);

Route::get('/admin/product',[product_itemController::class,'index']);

Route::post('/admin/product',[product_itemController::class,'add_product']);


Route::get('/admin/product/displaysubcat/{cat_id}',[product_itemController::class,'displaysubcat']);

Route::get('/admin/producthome',[up_del_ProductController::class,'index']);

Route::get('/admin/producthome/edit/{id}',[up_del_ProductController::class,'edit_product']);

Route::put('/admin/producthome/update{id}',[up_del_ProductController::class,'update_product']);

Route::post('/admin/producthome/delete',[up_del_ProductController::class,'delete_product']);


// routes for add shipping prices for countries
Route::get('/admin/country_shipping',[shipping_by_country::class,'index']);
Route::post('/admin/country_shipping',[shipping_by_country::class,'add']);



















