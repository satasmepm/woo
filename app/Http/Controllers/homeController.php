<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class homeController extends Controller
{
   public function index(){

      // $product_data =  DB::table('products')
      // ->join('category','products.cat_id','=','category.id')
      // ->join('subcategory','products.subcat_id','=','subcategory.id')
      // ->join('create_product_image_tables','products.id','=','create_product_image_tables.product_id')
      // ->select('products.*','category.Cat_name','subcategory.sub_name','create_product_image_tables.product_main_img','create_product_image_tables.product_sub_img1','create_product_image_tables.product_sub_img2','create_product_image_tables.product_sub_img3','create_product_image_tables.product_sub_img4')
      // ->get();

      $new_arrival =  DB::table('products')
      ->join('category','products.cat_id','=','category.id')
      ->join('subcategory','products.subcat_id','=','subcategory.id')
      ->join('create_product_image_tables','products.id','=','create_product_image_tables.product_id')
      ->select('products.*','category.Cat_name','subcategory.sub_name','create_product_image_tables.product_main_img','create_product_image_tables.product_sub_img1','create_product_image_tables.product_sub_img2','create_product_image_tables.product_sub_img3','create_product_image_tables.product_sub_img4')
      ->orderBy('products.id', 'desc')
      ->limit(2)
      ->get();


      $products =  DB::table('products')
      ->join('category','products.cat_id','=','category.id')
      ->join('subcategory','products.subcat_id','=','subcategory.id')
      ->join('create_product_image_tables','products.id','=','create_product_image_tables.product_id')
      ->select('products.*','category.Cat_name','subcategory.sub_name','create_product_image_tables.product_main_img','create_product_image_tables.product_sub_img1','create_product_image_tables.product_sub_img2','create_product_image_tables.product_sub_img3','create_product_image_tables.product_sub_img4')
      ->get();
      

      //  dd($product_data);
      return view('web.home',compact(['new_arrival','products']));   
   

   }

}
