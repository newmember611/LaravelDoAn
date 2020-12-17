@extends('master')
@section('content')
<div class="content-body">
            <div class="container-fluid">
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
</div>
</div>
@endsection