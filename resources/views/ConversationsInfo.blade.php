@extends('master')
@section('content')
<div class="content-body">
            <div class="container-fluid">
<h1 class="w3ls">Conversation Edit</h1>
<div class="content-w3ls">
	<div class="content-agile2">
        {{csrf_field()}}
    	{{ method_field('PATCH') }}
		<div class="row">
        <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
        <div class="profile-name">
        <p>ID</p>
        <h4 class="text-muted">{{$conversation['id']}}</h4>
        </div>
        </div>
        <div class="col-xl-4 col-sm-4 border-right-1 prf-col">
        <div class="profile-email">
        <p>User One</p>
        <h4 class="text-muted">{{$conversation['User_one']}}</h4>
         </div>
        </div>
        <div class="col-xl-4 col-sm-4 prf-col">
        <div class="profile-call">
        <p>User Two</p>
        <h4 class="text-muted">{{$conversation['User_two']}}</h4>
        </div>
        </div>
        </div>
	</div>
</div>
</div>
</div>
@endsection

