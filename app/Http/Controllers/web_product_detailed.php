<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class web_product_detailed extends Controller
{
    public function index($id){

        $product_detailed =  DB::table('products')
        ->join('category','products.cat_id','=','category.id')
        ->join('subcategory','products.subcat_id','=','subcategory.id')    
        ->join('create_product_image_tables','products.id','=','create_product_image_tables.product_id')
        ->select('products.*','category.Cat_name','subcategory.sub_name','create_product_image_tables.product_main_img','create_product_image_tables.product_sub_img1','create_product_image_tables.product_sub_img2','create_product_image_tables.product_sub_img3','create_product_image_tables.product_sub_img4')
        ->where('products.id', '=', $id)
        ->get();

        // dd($product_detailed);
        $product_images =  DB::table('create_product_image_tables')->where('product_id', '=', $id)->get();
      
        
        return view('web.web_product_detailed',compact('product_detailed','product_images'));







    }
}
