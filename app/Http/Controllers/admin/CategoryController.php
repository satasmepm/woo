<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\category;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class CategoryController extends Controller
{
    
  public function index(){

      $category_data = category::get();
     
     return view('admin.categories', ['category_data' => $category_data]);

  }

  public function add_category(Request $request){

    category::create($request->all());

    // return redirect()->route('/admin/category.index')->with('add_category', $request->Cat_name.' added succesfully');
    // return redirect()->route('/admin/category.index');
    $category_data = category::get();
    return view('admin.categories', ['category_data' => $category_data]);
  }

  public function edit_category(Request $request){

    DB::table('category')->where('id', $request->id)->update(array('Cat_name' => $request->Cat_name)); 
  

    $category_data = category::get();
    return view('admin.categories', ['category_data' => $category_data]);

  }

  public function delete_category(Request $request){

    
    DB::table('category')->where('id', $request->id2)->delete();
     
    
    $category_data = category::get();
    return view('admin.categories', ['category_data' => $category_data]);
  }

}
