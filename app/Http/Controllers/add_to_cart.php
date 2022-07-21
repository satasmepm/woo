<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
// use Munna\ShoppingCart\Facades\Cart;
use Cart;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

// use Munna\ShoppingCart\Cart;

class add_to_cart extends Controller
{
    
  public function add(Request $request){

    $product = product::find($request->product_id);
   
    $product_id  = $product->id;
    $product_name = $product->product_name;
    $product_qty = $request->quantity;
    $product_price = $product->price;

   $num =  DB::table('create_product_image_tables')->where('product_id', '=', $product_id)->value('product_main_img');
    
   $product_weight = (int)$num;//string to int
  // return $product_weight;

    $new_cart = Cart::add($product_id, $product_name, $product_qty, $product_price ,$product_weight);
    // return $new_cart;

    $product_data =  DB::table('products')
    ->join('category','products.cat_id','=','category.id')
    ->join('subcategory','products.subcat_id','=','subcategory.id')
    ->join('create_product_image_tables','products.id','=','create_product_image_tables.product_id')
    ->select('products.*','category.Cat_name','subcategory.sub_name','create_product_image_tables.product_main_img','create_product_image_tables.product_sub_img1','create_product_image_tables.product_sub_img2','create_product_image_tables.product_sub_img3','create_product_image_tables.product_sub_img4')
    ->get();

  

   
      //  return view('web.web_product',compact('product_data'));

    return view('web.web_product',compact('product_data'))->with('success','Blog succesfully created');
    // return redirect()->route('/web/products')->with('product_data',$product_data)->with('warning',"Don't Open this link");

  }

  public function cart(){

    // $uid  = "zlmqrjfxjjtennpczhfz0gvodtwifzuc";

 
    
    
    
    // Cart::remove($uid);
   
   return view('web.cart');


  }

  public function cart_json(){
    
   $items= Cart::info();


  return json_encode($items);

  }


  public function item_delete($uid){

  
      Cart::remove($uid);
     // return json_encode($uid);

      $items= Cart::info();
      return json_encode($items);

  }


}
