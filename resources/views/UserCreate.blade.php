@extends('master')
@section('content')
<div class="content-body">
<div class="container-fluid">

<!-- </div>
<div class="form-row"> -->
<form action="{{route('user.store')}}" method="POST">
{{csrf_field()}}
<div class="col-md-8 mb-3">
        <label for="validationCustom07">Username</label>
        <input type="text" name="name" min="20" class="form-control" id="validationCustom07" placeholder="Password" required>
        <div class="invalid-tooltip">
            Please provide a Password.
        </div>
    </div>
    <div class="col-md-8 mb-3">
        <label for="validationCustom06">Email</label>
        <input name="email" type="email" class="form-control" id="validationCustom06" placeholder="Email" required>
        <div class="invalid-tooltip">
            Please provide a E-mail address.
        </div>
    </div>
    <div class="col-md-8 mb-3">
        <label for="validationCustom06">Phone number</label>
        <input name="phonenumber" type="number" min="10" class="form-control" id="validationCustom06" placeholder="Phone number" required>
        <div class="invalid-tooltip">
            Please provide a E-mail address.
        </div>
    </div>
    <div class="col-md-8 mb-3">
        <label for="validationCustom07">Password</label>
        <input type="password" min="20" class="form-control" id="validationCustom07" placeholder="Password" required>
        <div class="invalid-tooltip">
            Please provide a Password.
        </div>
    </div>
    <div class="col-md-8 mb-3">
        <label for="validationCustom06">Confirm Password</label>
        <input name="password" type="password" min="20" class="form-control" id="validationCustom06" placeholder="Confirm Password" required>
        <div class="invalid-tooltip">
            Please provide a E-mail address.
        </div>
    </div>
    
    <div class="col-md-8 mb-3">
        <button type="submit" class="btn btn-outline-primary">Create</button></a>
        <div class="invalid-tooltip">
            Please provide a E-mail address.
        </div>
    </div>
    </form>
    </div>
    </div>
</div>
    @endsection