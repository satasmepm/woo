@extends('admin.master')

@section('content')

{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}


<form method="POST" enctype="multipart/form-data" action="{{ url('/admin/product') }}">
    @csrf

    <div class="m-3">
      <label for="cat_id" class="form-label">select category</label>
      {{-- <input type="text" name="cat_id" class="form-control" id="cat_id" > --}}
      <select class="form-control cat_id" id="cat_id" name="cat_id">
        @foreach ($category as $item)
        <option value="{{ $item->id }}">{{ $item->Cat_name }}</option>  
        @endforeach 
        </select>
        <span style="color: brown" >@error('cat_id'){{ $message }} @enderror   </span>
   
     </div>


     <div class="m-3">
        <label for="subcat_id" class="form-label">sub category</label>
        <select id="subcat_id" class="form-control subcat_id" name="subcat_id">
            
           
         </select>
         <span style="color: brown" >@error('subcat_id'){{ $message }} @enderror   </span>
      </div>
   


      <div class="m-3">
        <label for="product_name" class="form-label">product name</label>
        <input type="text" name="product_name" class="form-control" id="product_name" >
        <span style="color: brown" >@error('product_name'){{ $message }} @enderror   </span>
      </div>


      <div class="m-3">
        <label for="stock" class="form-label">stock</label>
        <input type="text" name="stock" class="form-control" id="stock" >
        <span style="color: brown" >@error('stock'){{ $message }} @enderror   </span>
      </div>

      <div class="m-4">
        <label for="product_main_img" class="form-label">main image   </label><br>
        <input type="file" name="product_main_img" id="product_main_img" ><br>
        <span style="color: brown" >@error('product_main_img'){{ $message }} @enderror   </span>
      </div>

     
      


      <div class="m-4">
        <label for="product_sub_img1" class="form-label">sub image one</label><br>
        <input type="file" name="product_sub_img1"  id="product_sub_img1" ><br>
        <span style="color: brown" >@error('product_sub_img1'){{ $message }} @enderror   </span>
      </div>


      <div class="m-4">
        <label for="product_sub_img2" class="form-label">sub image two</label><br>
        <input type="file" name="product_sub_img2"  id="product_sub_img2" ><br>
        <span style="color: brown" >@error('product_sub_img2'){{ $message }} @enderror   </span>
      </div>

      <div class="m-4">
        <label for="product_sub_img3" class="form-label">sub image three </label><br>
        <input type="file" name="product_sub_img3"  id="product_sub_img3" ><br>
        <span style="color: brown" >@error('product_sub_img3'){{ $message }} @enderror   </span>
      </div>
      <div class="m-4">
        <label for="product_sub_img4" class="form-label">sub image four</label><br>
        <input type="file" name="product_sub_img4"  id="product_sub_img4" ><br>
        <span style="color: brown" >@error('product_sub_img4'){{ $message }} @enderror   </span>
      </div>

      <div class="m-3">
        <label for="description" class="form-label">description</label>
        <input type="text" name="description" class="form-control" id="description" >
        <span style="color: brown" >@error('description'){{ $message }} @enderror   </span>
      </div>

      <div class="m-3">
        <label for="price" class="form-label">price</label>
        <input type="text" name="price" class="form-control" id="price" >
        <span style="color: brown" >@error('price'){{ $message }} @enderror   </span>
      </div>

      <div class="m-3">
        <label for="discount" class="form-label">discount </label>
        <input type="text" name="discount" class="form-control" id="discount" >
        <span style="color: brown" >@error('discount'){{ $message }} @enderror   </span>
      </div>
    
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>



  <script>
     $(".cat_id").on('click',function(){

     var cat_id =$(this).val();
    //console.log(cat_id);

     $.ajax({

     url:"{{ url('/admin/product/displaysubcat') }}/"+cat_id,
     dataType:'json',
     
     beforeSend:function(){
     $(".subcat_id").html('<option>loading</option>');
     },


    
     success:function(res){
  
          var _html='';
          $.each(res.sub_category,function(index,row){

         _html+='<option  value="'+row.id+'" >'+row.sub_name+'<option>'
         

          });
        $(".subcat_id").html(_html);
   
 
    

    }
});

}); 






  </script>










    
@endsection