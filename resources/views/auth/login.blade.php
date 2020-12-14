@extends('layouts.app')

@section('content')

<div class="col-xl-6">
    <div class="card forms-card">
        <div class="card-body">
            <h4 class="card-title mb-4">Horizontal Forms</h4>
            <div class="basic-form">
                @if (count($errors) >0)
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="text-danger"> {{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                @if (session('status'))
                    <ul>
                        <li class="text-danger"> {{ session('status') }}</li>
                    </ul>
                @endif
                
                <form action="{{ route('login.get') }}" method="post">
                {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-label">Email Address</label>
                        <div class="col-sm-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend5"> <i class="fa fa-user" aria-hidden="true"></i> </span>
                                </div>
                                <input type="text" name="txtEmail" class="form-control" placeholder="Username" aria-describedby="inputGroupPrepend5" required="" >
                            </div>
                            
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-label">Password</label>
                        
                    <div class="col-sm-9">
                            <div class="input-group transparent-append">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend6"> <i class="fa fa-lock" aria-hidden="true"></i> </span>
                                </div>
                                <input type="password" name="txtPassword" class="form-control" id="validationDefaultUsername13" placeholder="Password" aria-describedby="inputGroupPrepend6" required="">
                                <div class="input-group-append c-pointer">
                                    <span class="input-group-text" id="inputGroupPrepend7"> <i class="fa fa-eye-slash" aria-hidden="true"></i> </span>
                                </div>
                            </div>
                        </div></div>
                    <div class="form-group row">
                        <div class="col-sm-10 offset-sm-3">
                            <div class="form-check">
                                <input class="form-check-input styled-checkbox" type="checkbox" id="inlineFormCheck0">
                                <label class="form-check-label mr-sm-5" for="inlineFormCheck0">Remember Me</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 text-right">
                            <button type="submit" class="btn btn-primary btn-form">Sign in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
