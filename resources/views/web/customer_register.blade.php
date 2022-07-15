@extends('web.web_master')

@section('content')


<div class="page-content pt-150 pb-150">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                <div class="row">
                    <div class="col-lg-6 col-md-8">
                        <div class="login_wrap widget-taber-content background-white">
                            <div class="padding_eight_all bg-white">
                                <div class="heading_s1">
                                    <h1 class="mb-5">Create an Account</h1>
                                    <p class="mb-30">Already have an account? <a href="{{ url('web/customer/login/check') }}">Login</a></p>
                                </div>
                                <form method="post" action="{{ url('web/customer/register/new') }}">
                                    @csrf

                                    <div class="form-group">
                                        <input type="text" maxlength="20" name="cus_firstname" placeholder="First name" />   
                                        <span style="color: brown" >@error('cus_firstname'){{ $message }} @enderror   </span> 
                                    </div>

                                    <div class="form-group">
                                        <input type="text" maxlength="20" name="cus_lastname" placeholder="Last name" />
                                        <span style="color: brown" >@error('cus_lastname'){{ $message }} @enderror   </span>
                                    </div>

                                    <div class="form-group">
                                        <input  type="text" maxlength="20" name="cus_username" placeholder="Username" />
                                        <span style="color: brown" >@error('cus_username'){{ $message }} @enderror   </span>
                                    </div>

                                    <div class="form-group">
                                        <input  type="email" maxlength="25" name="cus_email" placeholder="Email" />
                                        <span style="color: brown" >@error('cus_email'){{ $message }} @enderror   </span>
                                    </div>

                                    <div class="form-group">
                                        <input  type="text" maxlength="15" name="cus_telephone" placeholder="Telephone" />
                                        <span style="color: brown" >@error('cus_telephone'){{ $message }} @enderror   </span>
                                    </div>

                                    <div class="form-group">
                                        {{-- <input  type="text" name="cus_password" placeholder="Password" /> --}}
                                        <input id="password" maxlength="15" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="password" name="password" >

                                     @error('password')
                                         <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                         </span>
                                     @enderror
                                  
                                        {{-- <span style="color: brown" >@error('password'){{ $message }} @enderror   </span> --}}
                                    </div>

                                    <div class="form-group">
                                        {{-- <input  type="text" name="cus_password_repeat" placeholder="Confirm password" /> --}}
                                        <input id="password" maxlength="15" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="retype password" name="password_confirmation" >
                                        <span style="color: brown" >@error('cat_id'){{ $message }} @enderror   </span>
                                    </div>

                                  
                                 
                                    <div class="login_footer form-group mb-50">
                                        <div class="chek-form">
                                            <div class="custome-checkbox">
                                                <input class="form-check-input" type="checkbox"  id="exampleCheckbox12" value="" />
                                                <label class="form-check-label" for="exampleCheckbox12"><span>I agree to terms &amp; Policy.</span></label>
                                            </div>
                                        </div>
                                        <a href="page-privacy-policy.html"><i class="fi-rs-book-alt mr-5 text-muted"></i>Lean more</a>
                                    </div>

                                    
                                    <div class="form-group mb-30">
                                        <button type="submit" class="btn btn-fill-out btn-block hover-up font-weight-bold" name="login">Submit &amp; Register</button>
                                    </div>
                                    <p class="font-xs text-muted"><strong>Note:</strong>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy</p>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 pr-30 d-none d-lg-block">
                        <div class="card-login mt-115">
                            <a href="#" class="social-login facebook-login">
                                <img src="assets/imgs/theme/icons/logo-facebook.svg" alt="" />
                                <span>Continue with Facebook</span>
                            </a>
                            <a href="#" class="social-login google-login">
                                <img src="assets/imgs/theme/icons/logo-google.svg" alt="" />
                                <span>Continue with Google</span>
                            </a>
                            <a href="#" class="social-login apple-login">
                                <img src="assets/imgs/theme/icons/logo-apple.svg" alt="" />
                                <span>Continue with Apple</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection