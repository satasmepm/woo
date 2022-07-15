<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>E commerce admin login</title>
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="http://infiniteiotdevices.com/images/logo.png" rel="icon" sizes="16x16" type="image/gif" />
	<link rel="stylesheet" type="text/css" href="{{ asset('admin/css/login-form-5.css') }}">
   
</head>
<body>
	<div class="box">
		<h2>Admin Login</h2>
       <div>

		@if (Session::has('login_error_customer'))
		<p class="danger">{{ Session('login_error_customer') }}</p> 
	     @endif
	   </div>

		<form method="POST" action="{{ url('/admin/login') }}">
			@csrf
			<div class="inputBox">
				<input type="text-danger" name="username" required="">
				<label>Username</label>
			</div>
			<div class="inputBox">
				<input type="password" name="password" required="">
				<label>Password</label>
			</div>
			<input type="submit" name="" value="Login">
		</form>
	
	</div>
</body>
</html>