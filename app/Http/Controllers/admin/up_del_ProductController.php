<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\create_product_image_table;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class up_del_ProductController extends Controller
{
    public function index(){

     $product_data =  DB::table('products')
     ->join('category','products.cat_id','=','category.id')
     ->join('subcategory','products.subcat_id','=','subcategory.id')
     ->join('create_product_image_tables','products.id','=','create_product_image_tables.product_id')
     ->select('products.*','category.Cat_name','subcategory.sub_name','create_product_image_tables.product_main_img','create_product_image_tables.product_sub_img1','create_product_image_tables.product_sub_img2','create_product_image_tables.product_sub_img3','create_product_image_tables.product_sub_img4')
     ->get();

 
    
        return view('admin.product_home',compact('product_data'));
    }

   public function edit_product($id){

    $product_edit =  DB::table('products')
    ->join('category','products.cat_id','=','category.id')
    ->join('subcategory','products.subcat_id','=','subcategory.id')
    ->join('create_product_image_tables','products.id','=','create_product_image_tables.product_id')
    ->select('products.*','category.Cat_name','subcategory.sub_name','create_product_image_tables.product_main_img','create_product_image_tables.product_sub_img1','create_product_image_tables.product_sub_img2','create_product_image_tables.product_sub_img3','create_product_image_tables.product_sub_img4')
    ->where('products.id' , $id)
    ->get();

    // dd($product_edit);

    // dd($product_data);
    return view('admin.update_product',compact('product_edit'));


   }

   public function update_product(Request $request , $id){

  

    $request->validate([

   
        'product_name' =>'required',
        'stock' =>'required|regex:"^\d*\.?\d*$"',
        'description' =>'required',
        'price' =>'required|regex:"^\d*\.?\d*$"',
        'discount'=>'required|regex:"^\d*\.?\d*$"',

    ]);




    
    $products = product::find($id);
    $products->product_name = $request->input('product_name');
    $products->stock = $request->input('stock');
    $products->description = $request->input('description');
    $products->price = $request->input('price');
    $products->discount = $request->input('discount');

    
    // code for images
   
    $old_images = DB::table('create_product_image_tables')->where('product_id' , $id)->get();

    // code for product_main_img
    if($request->hasFile('product_main_img')){
      
         $destination = 'product_images/'.$old_images[0]->product_main_img;
         if(File::exists($destination)){
         File::delete($destination);
        }
        $product_main_img = time().rand(1,1000).'.'.$request->product_main_img->extension();
        $request->product_main_img->move(public_path('product_images'),$product_main_img); 
        DB::table('create_product_image_tables')->where('product_id',$id)->update(array('product_main_img' => $product_main_img)); 
         }
       else{
        DB::table('create_product_image_tables')->where('product_id',$id)->update(array('product_main_img' => $old_images[0]->product_main_img)); 
    }
     //end code for product_main_img


       // code for subimg1
    if($request->hasFile('product_sub_img1')){
      
        $destination = 'product_images/'.$old_images[0]->product_sub_img1;
        if(File::exists($destination)){
        File::delete($destination);
       }
       $product_sub_img1 = time().rand(1,1000).'.'.$request->product_sub_img1->extension();
       $request->product_sub_img1->move(public_path('product_images'),$product_sub_img1); 
       DB::table('create_product_image_tables')->where('product_id',$id)->update(array('product_sub_img1' => $product_sub_img1)); 
        }
      else{
       DB::table('create_product_image_tables')->where('product_id',$id)->update(array('product_sub_img1' => $old_images[0]->product_sub_img1)); 
   }
    //end code for subimg1



      // code for subimg2
      if($request->hasFile('product_sub_img2')){
      
        $destination = 'product_images/'.$old_images[0]->product_sub_img2;
        if(File::exists($destination)){
        File::delete($destination);
       }
       $product_sub_img2 = time().rand(1,1000).'.'.$request->product_sub_img2->extension();
       $request->product_sub_img2->move(public_path('product_images'),$product_sub_img2); 
       DB::table('create_product_image_tables')->where('product_id',$id)->update(array('product_sub_img2' => $product_sub_img2)); 
        }
      else{
       DB::table('create_product_image_tables')->where('product_id',$id)->update(array('product_sub_img2' => $old_images[0]->product_sub_img2)); 
   }
    //end code for subimg2

      // code for subimg3
      if($request->hasFile('product_sub_img3')){
      
        $destination = 'product_images/'.$old_images[0]->product_sub_img3;
        if(File::exists($destination)){
        File::delete($destination);
       }
       $product_sub_img3 = time().rand(1,1000).'.'.$request->product_sub_img3->extension();
       $request->product_sub_img3->move(public_path('product_images'),$product_sub_img3); 
       DB::table('create_product_image_tables')->where('product_id',$id)->update(array('product_sub_img3' => $product_sub_img3)); 
        }
      else{
       DB::table('create_product_image_tables')->where('product_id',$id)->update(array('product_sub_img3' => $old_images[0]->product_sub_img3)); 
   }
    //end code for subimg3




      // code for subimg4
      if($request->hasFile('product_sub_img4')){
      
        $destination = 'product_images/'.$old_images[0]->product_sub_img4;
        if(File::exists($destination)){
        File::delete($destination);
       }
       $product_sub_img4 = time().rand(1,1000).'.'.$request->product_sub_img4->extension();
       $request->product_sub_img4->move(public_path('product_images'),$product_sub_img4); 
       DB::table('create_product_image_tables')->where('product_id',$id)->update(array('product_sub_img4' => $product_sub_img4)); 
        }
      else{
       DB::table('create_product_image_tables')->where('product_id',$id)->update(array('product_sub_img4' => $old_images[0]->product_sub_img4)); 
   }
    //end code for subimg4
   

     // code for images

    $products->save();

   return $this->index();


   }

   public function delete_product(Request $request){

    product::where('id', $request->id)->delete();
    return $this->index();

   }















}
