@extends('admin.master')

@section('content')
    
<form method="POST" enctype="multipart/form-data" action="{{ url('/admin/producthome/update').$product_edit[0]->id }}">
    @csrf
    @method('PUT')
 
   


      <div class="m-3">
        <label for="product_name" class="form-label">product name</label>
        <input type="text" name="product_name" value="{{ $product_edit[0]->product_name }}" class="form-control" id="product_name" >
        <span style="color: brown" >@error('product_name'){{ $message }} @enderror   </span>
      </div>


      <div class="m-3">
        <label for="stock" class="form-label">stock</label>
        <input type="text" value="{{ $product_edit[0]->stock }}" name="stock" class="form-control" id="stock" >
        <span style="color: brown" >@error('stock'){{ $message }} @enderror   </span>
      </div>

      <div class="m-4">
        <label for="product_main_img" class="form-label">main image   </label><br>
        <img width="60px" src="{{ asset('product_images/'.$product_edit[0]->product_main_img) }}" alt="main_image" >
        <input type="file" name="product_main_img" id="product_main_img" ><br>
        <span style="color: brown" >@error('product_main_img'){{ $message }} @enderror   </span>
      </div>

     
      


      <div class="m-4">
        <label for="product_sub_img1" class="form-label">sub image one</label><br>
        <img width="60px" src="{{ asset('product_images/'.$product_edit[0]->product_sub_img1) }}" alt="main_image" >
        <input type="file" name="product_sub_img1"  id="product_sub_img1" ><br>
        <span style="color: brown" >@error('product_sub_img1'){{ $message }} @enderror   </span>
      </div>


      <div class="m-4">
        <label for="product_sub_img2" class="form-label">sub image two</label><br>
        <img width="60px" src="{{ asset('product_images/'.$product_edit[0]->product_sub_img2) }}" alt="main_image" >
        <input type="file" name="product_sub_img2"  id="product_sub_img2" ><br>
        <span style="color: brown" >@error('product_sub_img2'){{ $message }} @enderror   </span>
      </div>

      <div class="m-4">
        <label for="product_sub_img3" class="form-label">sub image three </label><br>
        <img width="60px" src="{{ asset('product_images/'.$product_edit[0]->product_sub_img3) }}" alt="main_image" >
        <input type="file" name="product_sub_img3"  id="product_sub_img3" ><br>
        <span style="color: brown" >@error('product_sub_img3'){{ $message }} @enderror   </span>
      </div>
      <div class="m-4">
        <label for="product_sub_img4" class="form-label">sub image four</label><br>
        <img width="60px" src="{{ asset('product_images/'.$product_edit[0]->product_sub_img4) }}" alt="main_image" >
        <input type="file" name="product_sub_img4"  id="product_sub_img4" ><br>
        <span style="color: brown" >@error('product_sub_img4'){{ $message }} @enderror   </span>
      </div>

      <div class="m-3">
        <label for="description" class="form-label">description</label>
        <input type="text" value="{{ $product_edit[0]->description }}"  name="description" class="form-control" id="description" >
        <span style="color: brown" >@error('description'){{ $message }} @enderror   </span>
      </div>

      <div class="m-3">
        <label for="price" class="form-label">price</label>
        <input type="text" value="{{ $product_edit[0]->price }}" name="price" class="form-control" id="price" >
        <span style="color: brown" >@error('price'){{ $message }} @enderror   </span>
      </div>

      <div class="m-3">
        <label for="discount" class="form-label">discount </label>
        <input type="text" value="{{ $product_edit[0]->discount }}" name="discount" class="form-control" id="discount" >
        <span style="color: brown" >@error('discount'){{ $message }} @enderror   </span>
      </div>
    
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>





@endsection

























