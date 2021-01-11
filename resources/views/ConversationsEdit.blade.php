@extends('master')
@section('content')
<div class="content-body">
            <div class="container-fluid">
<h1 class="w3ls">Conversation Edit</h1>
<div class="content-w3ls">
	<div class="content-agile2">
		<form action="{{route('conversations.update', $conversation['id'])}}" method="POST">
        {{csrf_field()}}
    	{{ method_field('PATCH') }}

            <div class="form-control w3layouts"> 
				<label>ID</label>
				<input disabled value="{{$conversation['id']}}" type="text" id="id" name="id" placeholder="id" title="Please enter your First Name" required="">
			</div>
			<div class="form-control w3layouts"> 
			<label>User One</label>
				<input value="{{$conversation['User_one']}}" type="text"  name="one" placeholder="User One" title="Please enter your User One" required="">
			</div>
			<div class="form-control w3layouts"> 
			<label>User Two</label>
				<input value="{{$conversation['User_two']}}" type="text"name="two" placeholder="User Two" title="Please enter your User Two" required="">
			</div>
            </div>
			<input type="submit" class="register" value="Edit">
		</form>
	</div>
	<div class="clear"></div>
</div>
</div>
</div>
@endsection