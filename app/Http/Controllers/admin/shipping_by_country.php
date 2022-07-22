<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\shipping_price;
use Illuminate\Http\Request;
use DB;




class shipping_by_country extends Controller
{
    public function index(){
          
        $shipping_details = DB::table('shipping_prices')->get();
        // return view('admin.shipping_by_country', compact('shipping_details'))->with('add_country_shipping', 'new shipping detail added');
        return view('admin.shipping_by_country',compact('shipping_details'));
    }

    public function add(Request $request){

    //   dd($request);

    $products = array([

        "country_name"=>$request["country_name"],
        "shipping_price"=>$request["shipping_price"],
      

    ]);

    DB::table('shipping_prices')->insert($products);
     $shipping_details = DB::table('shipping_prices')->get();
    //  dd($shipping_details);

    // return redirect('/admin/country_shipping')->with('add_country_shipping','new shipping price added')->with(['shipping_details',$shipping_details]);
    // return redirect('/admin/country_shipping')->with(['shipping_details',$shipping_details]);
  //    return view('admin.shipping_by_country')->with('add_country_shipping','new shipping price added');
  //    return view('admin.shipping_by_country',compact('shipping_details'),['add_country_shipping'=>'Property is updated .']);
      return view('admin.shipping_by_country', compact('shipping_details'))->with('add_country_shipping', 'new shipping detail added');

    }

    public function delete(Request $request){

        DB::table('shipping_prices')->where('id', $request->id)->delete();
        $shipping_details = DB::table('shipping_prices')->get();
        return view('admin.shipping_by_country', compact('shipping_details'))->with('add_country_shipping', 'new shipping detail added');
       

    }

    public function edit(Request $request){

        // dd($request);

        DB::table('shipping_prices')->where('id', $request->id_delete)->update(array('country_name' => $request->country, 'shipping_price' => $request->shipping )); 
  

        $shipping_details = shipping_price::get();
      
        return view('admin.shipping_by_country', compact('shipping_details'))->with('add_country_shipping', 'new shipping detail added');

    }

}
