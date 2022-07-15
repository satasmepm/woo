<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class web_customer_login extends Controller
{
    public function customer_login_check(){


        return view('web.customer_login');
    }


    public function customer_login_check_verify(Request $request){

        // dd($request);
        //  $decrypt= Crypt::decryptString($encrypted);

        $customer = customer::where(['cus_username'=>$request->cus_username ,'cus_password'=>$request->cus_password])->count();
        
        if($customer>0){
       
        $customer_data = customer::where(['cus_username'=>$request->cus_username ,'cus_password'=>$request->cus_password])->get();
        session(['customer_data'=>$customer_data]);
        // return redirect('web/customer/account');
        return view("web.customer_account");
    
    
       }else{

        return redirect('web/customer/login/check')->with('login_error_customer','check username and password');
    
     
       }
        
    }

    function logout(){
   
    
        session()->forget(['customer_data']);
        return view('web.home');
        
      }





    public function customer_register_view(){


        return view('web.customer_register');
    }

    public function customer_register_new(Request $request){

      
        $request->validate([
             
            'password' => 'required|confirmed',
            'cus_username' =>'required',
            'cus_email' =>'required',
            'cus_telephone' =>'required|integer',
             
            'cus_firstname' =>'required',
            'cus_lastname' =>'required'
        

        ]);
        // dd($request);

        // code for encrypt
        // $password = $request->password;
        // $encrypted = Crypt::encryptString( $password);
       

        // $decrypt= Crypt::decryptString($encrypted);
      
        // echo $decrypt;

        $customer_register = array([
           
            "cus_email"=>$request["cus_email"],
            "cus_username"=>$request["cus_username"],
            "cus_telephone"=>$request["cus_telephone"],
            "cus_password"=>$request["password"],
         
             ]
        );
      
 
        DB::table('customers')->insert($customer_register);
        $last = DB::table('customers')->orderBy('id','desc')->first();



        $customer_name = array([
           
            "cus_firstname"=>$request["cus_firstname"],
            "cus_lastname"=>$request["cus_lastname"],
            "cus_id"=>$last->id
            
         
        ]

        

        );

        DB::table('customer_names')->insert($customer_name);

        return $this->customer_login_check();





    }
}
