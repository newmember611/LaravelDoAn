@extends('master')
@section('content')
<h1 class="w3ls">User Edit</h1>
<div class="content-w3ls">
	<div class="content-agile2">
		<form action="{{route('user.update', $user['Id'])}}" method="POST">
        {{csrf_field()}}
    	{{ method_field('PATCH') }}

            <div class="form-control w3layouts"> 
				<input disabled value="{{$user['Id']}}" type="text" id="id" name="id" placeholder="id" title="Please enter your First Name" required="">
			</div>
			<div class="form-control w3layouts"> 
				<input value="{{$user['Name']}}" type="text" id="firstname" name="Username" placeholder="Username" title="Please enter your First Name" required="">
			</div>
			<div class="form-control w3layouts"> 
				<input value="{{$user['Email']}}" type="text" id="firstname" name="Email" placeholder="Username" title="Please enter your First Name" required="">
			</div>
			<div class="form-control w3layouts"> 
				<input value="{{$user['PhoneNumber']}}" type="text" id="firstname" name="PhoneNumber" placeholder="Username" title="Please enter your First Name" required="">
			</div>
			<div class="form-control w3layouts"> 
				<input value="{{$user['Img']}}" type="text" id="firstname" name="Img" placeholder="Username" title="Please enter your First Name" required="">
			</div>
			<div class="form-control agileinfo">	
				<input value="{{$user['Password']}}" type="password" class="lock" name="password" placeholder="Password" id="password1" required="">
            </div>
            <div class="form-control agileinfo">	
				<input value="{{$user['Status']}}" type="number" class="lock" name="status" placeholder="status" id="password1" required="">
            </div>
			<input type="submit" class="register" value="Edit">
		</form>
	</div>
	<div class="clear"></div>
</div>
@endsection