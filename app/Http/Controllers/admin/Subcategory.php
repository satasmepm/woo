<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\subcategory as ModelsSubcategory;
use Illuminate\Http\Request;
use DB;

class Subcategory extends Controller
{
    
 public function index( $sub_id){


   //  return view('admin.sub_category',compact('sub_id'));
   $subcategory_data = DB::table('subcategory')->where('sub_id', $sub_id)->get();

   //  $subcategory_data = ModelsSubcategory::get();
   return view('admin.sub_category', compact('sub_id', 'subcategory_data'));
     
   //  return view('admin.categories', ['subcategory_data' => $subcategory_data,'sub_id' => $sub_id]);


 }

 public function add_subcategory(Request $request){
   // dd($request);
   ModelsSubcategory::create($request->all());
   $sub_id = $request->sub_id;

  
   // $subcategory_data = ModelsSubcategory::get();
   $subcategory_data = DB::table('subcategory')->where('sub_id', $sub_id)->get();


   return view('admin.sub_category', ['subcategory_data' => $subcategory_data, 'sub_id'=> $sub_id]);

 }

   public function edit_subcategory(Request $request){

   // dd($request);

   DB::table('subcategory')->where('id', $request->id)->update(array('sub_name' => $request->sub_name)); 
   
   $sub_id = $request->sub_id;

  
   // $subcategory_data = ModelsSubcategory::get();
   $subcategory_data = DB::table('subcategory')->where('sub_id', $sub_id)->get();


   return view('admin.sub_category', ['subcategory_data' => $subcategory_data, 'sub_id'=> $sub_id]);
    


   }

   public function delete_subcategory(Request $request){

      // dd($request);
      DB::table('subcategory')->where('id', $request->id)->delete();

      $sub_id = $request->sub_id;

  
      // $subcategory_data = ModelsSubcategory::get();
      $subcategory_data = DB::table('subcategory')->where('sub_id', $sub_id)->get();
   
   
      return view('admin.sub_category', ['subcategory_data' => $subcategory_data, 'sub_id'=> $sub_id]);

   }



}
