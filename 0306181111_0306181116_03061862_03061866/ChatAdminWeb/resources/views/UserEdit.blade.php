<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!doctype html>
<html>
<head>
<title>Official Signup Form Flat Responsive widget Template :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Official Signup Form Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Monoton" rel="stylesheet">
<!-- /fonts -->
<!-- css -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel='stylesheet' type='text/css' media="all" />
<!-- /css -->
</head>
<body>
<h1 class="w3ls">User Edit</h1>
<div class="content-w3ls">
	<div class="content-agile2">
		<form action="{{route('user.update', $id)}}" method="POST">
        {{csrf_field()}}
    {{ method_field('PATCH') }}

            <div class="form-control w3layouts"> 
				<input disabled value="{{$id}}" type="text" id="id" name="id" placeholder="id" title="Please enter your First Name" required="">
			</div>
			<div class="form-control w3layouts"> 
				<input value="{{$username}}" type="text" id="firstname" name="username" placeholder="Username" title="Please enter your First Name" required="">
			</div>

			<div class="form-control agileinfo">	
				<input value="{{$password}}" type="password" class="lock" name="password" placeholder="Password" id="password1" required="">
            </div>
            <div class="form-control agileinfo">	
				<input value="1" type="number" class="lock" name="status" placeholder="status" id="password1" required="">
            </div>
			<input type="submit" class="register" value="Edit">
		</form>
	</div>
	<div class="clear"></div>
</div>
<p class="copyright w3l">© 2017 Official Signup Form. All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts</a></p>
</body>
</html>