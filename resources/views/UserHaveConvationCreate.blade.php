@extends('master')
@section('content')

<div class="content-body">
<div class="container-fluid">
<form action="{{route('userhaveconvation.store')}}" method="POST">
{{csrf_field()}}

    <div class="col-md-8 mb-3">
        <label for="validationCustom07">User ID</label>
        <input class="form-control" name="User_id">      
    </div>

    <div class="col-md-8 mb-3">
        <label >Conversations ID</label>
        <input class="form-control" name="Conversations_id">       
    </div>

    <div class="col-md-8 mb-3">
        <button type="submit" class="btn btn-outline-primary">Create</button></a>
    </div>
</form>
    </div>
    </div>
</div>
    @endsection
