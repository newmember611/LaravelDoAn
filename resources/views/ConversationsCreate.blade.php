@extends('master')
@section('content')
<div class="content-body">
<div class="container-fluid">

<!-- </div>
<div class="form-row"> -->
<form action="{{route('conversations.store')}}" method="POST">
{{csrf_field()}}
<div class="col-md-8 mb-3">
        <label for="validationCustom07">User One</label>
        <input type="text" name="one" min="20" class="form-control" id="validationCustom07" placeholder="User One" required>
        <div class="invalid-tooltip">
            Please provide a User One.
        </div>
    </div>
    <div class="col-md-8 mb-3">
        <label for="validationCustom06">User Two</label>
        <input name="two" type="text" class="form-control" id="validationCustom06" placeholder="User Two" required>
        <div class="invalid-tooltip">
            Please provide a User Two.
        </div>
    </div>
    <div class="col-md-8 mb-3">
        <button type="submit" class="btn btn-outline-primary">Create</button></a>
    </div>
    </form>
    </div>
    </div>
</div>
    @endsection
