<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;




class shipping_by_country extends Controller
{
    public function index(){

        return view('admin.shipping_by_country');

    }

    public function add(Request $request){

    //   dd($request);

    $products = array([
        "country_name"=>$request["country_name"],
        "shipping_price"=>$request["shipping_price"],
      

    ]);

    DB::table('shipping_prices')->insert($products);



  

    }

}
