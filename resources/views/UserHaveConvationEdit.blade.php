@extends('master')
@section('content')

<div class="content-body">
<div class="container-fluid">

<h1 class="w3ls">User Conversations Edit</h1>
<div class="content-w3ls">
	<div class="content-agile2">
		<form action="{{route('userhaveconvation.update', $user_has_conversations['id'])}}" method="POST">
        {{csrf_field()}}
    	{{ method_field('PATCH') }}
		
		<div class="col-md-8 mb-3">
				<label for="validationCustom07">User ID</label>
				<input  class="form-control" value="{{$user_has_conversations['User_id']}}" type="text"  name="User_id"  >      
			</div>

			<div class="col-md-8 mb-3">
				<label >Conversations ID</label>
				<input  class="form-control" value="{{$user_has_conversations['Conversations_id']}}" type="text"  name="Conversations_id" >       
			</div>
			<div class="col-md-8 mb-3">
			<button type="submit" class="btn btn-outline-primary" value="Edit">Edit</button></a>
			</div>

		</form>
	</div>
	<div class="clear"></div>
</div>
</div>
</div>

@endsection