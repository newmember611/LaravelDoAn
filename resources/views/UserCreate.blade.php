@extends('master')
@section('content')
<div class="content-body">
<<<<<<< HEAD
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col p-md-0">
                        <h4>Hello, <span>Welcome here</span></h4>
                    </div>
                    <div class="col p-md-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Layout</a>
                            </li>
                            <li class="breadcrumb-item active">Blank</li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-5 card-title">Bootstrap Validator</h4>
                                <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom01">First name</label>
                                            <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom02">Last name</label>
                                            <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustomUsername">Username</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                </div>
                                                <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                                <div class="invalid-feedback">Please choose a username.</div>
                                            </div>
                                        </div>
                                    <!-- </div>
                                    <div class="form-row"> -->
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03">City</label>
                                            <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom06">Email</label>
                                            <input type="email" class="form-control" id="validationCustom06" placeholder="Email" required>
                                            <div class="invalid-feedback">
                                                Please provide a E-mail address.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom07">Password</label>
                                            <input type="password" class="form-control" id="validationCustom07" placeholder="Password" required>
                                            <div class="invalid-feedback">
                                                Please provide a Password.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom04">State</label>
                                            <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid state.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom05">Zip</label>
                                            <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid zip.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Where do you live in?</label>
                                            <select name="" id="" required class="form-control">
                                                <option value=""></option>
                                                <option value="USA">USA</option>
                                                <option value="UK">UK</option>
                                                <option value="UAE">UAE</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select your place
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Your currency?</label>
                                            <input type="text" name="" placeholder="Your currency" required class="form-control" id="">
                                            <div class="invalid-feedback">
                                                Please write your currency
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Your current salary?</label>
                                            <input type="text"  pattern="[0-9]" name="" required placeholder="Your current salary" class="form-control" id="">
                                            <div class="invalid-feedback">
                                                Please write your current salary
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Your Compy URL</label>
                                            <input type="url" name="" required placeholder="Your Compy URL" class="form-control" id="">
                                            <div class="invalid-feedback">
                                                Please provide an URL
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Number</label>
                                            <input type="text" name="" required placeholder="Only number input here" class="form-control shouldNumber" id="">
                                            <div class="invalid-feedback">
                                                Please write a number here!
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Range</label>
                                            <input type="text" name="" min="10" max="99" required placeholder="Write a number from 0 to 9" class="form-control shouldNumber" id="">
                                            <div class="invalid-feedback">
                                                Please write a number here!
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">File</label>
                                            <div class="custom-file mb-4">
                                                <input type="file" class="form-control " id="validatedCustomFile" required>
                                                <label class="custom-file-label d-none" for="validatedCustomFile">Choose file...</label>
                                                <div class="invalid-feedback">Please select a file</div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="">Textarea</label>
                                            <textarea required placeholder="Only number input here" class="form-control"></textarea>
                                            <div class="invalid-feedback">
                                                Please write something here
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="">Sex</label>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                                <label class="custom-control-label" for="customControlValidation2">Male</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                                                <label class="custom-control-label" for="customControlValidation3">Female</label>
                                                <div class="invalid-feedback">Select one from here</div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group pl-4">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                                <label class="form-check-label ml-3" for="invalidCheck">
                                                    Agree to terms and conditions
                                                </label>
                                                <div class="invalid-feedback">
                                                    You must agree before submitting.
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary bs-submit" type="submit">Submit form</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mb-5 card-title">Bootstrap Validator with tooltip</h4>
                                <form class="needs-validation" novalidate>
                                    <div class="form-row">
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom01">First name</label>
                                            <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom02">Last name</label>
                                            <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                                            <div class="valid-tooltip">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustomUsername">Username</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                                </div>
                                                <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required>
                                                <div class="invalid-tooltip">Please choose a username.</div>
                                            </div>
                                        </div>
                                    <!-- </div>
                                    <div class="form-row"> -->
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom03">City</label>
                                            <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                                            <div class="invalid-tooltip">
                                                Please provide a valid city.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom06">Email</label>
                                            <input type="email" class="form-control" id="validationCustom06" placeholder="Email" required>
                                            <div class="invalid-tooltip">
                                                Please provide a E-mail address.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom07">Password</label>
                                            <input type="password" min="8" class="form-control" id="validationCustom07" placeholder="Password" required>
                                            <div class="invalid-tooltip">
                                                Please provide a Password.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom04">State</label>
                                            <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                                            <div class="invalid-tooltip">
                                                Please provide a valid state.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="validationCustom05">Zip</label>
                                            <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                                            <div class="invalid-tooltip">
                                                Please provide a valid zip.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Where do you live in?</label>
                                            <select name="" id="" required class="form-control">
                                                <option value=""></option>
                                                <option value="USA">USA</option>
                                                <option value="UK">UK</option>
                                                <option value="UAE">UAE</option>
                                            </select>
                                            <div class="invalid-tooltip">
                                                Please select your place
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Your currency?</label>
                                            <input type="text" name="" placeholder="Your currency" required class="form-control" id="">
                                            <div class="invalid-tooltip">
                                                Please write your currency
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Your current salary?</label>
                                            <input type="text"  pattern="[0-9]" name="" required placeholder="Your current salary" class="form-control" id="">
                                            <div class="invalid-tooltip">
                                                Please write your current salary
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Your Compy URL</label>
                                            <input type="url" name="" required placeholder="Your Compy URL" class="form-control" id="">
                                            <div class="invalid-tooltip">
                                                Please provide an URL
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Number</label>
                                            <input type="text" name="" required placeholder="Only number input here" class="form-control shouldNumber" id="">
                                            <div class="invalid-tooltip">
                                                Please write a number here!
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Range</label>
                                            <input type="text" name="" min="10" max="99" required placeholder="Write a number from 0 to 9" class="form-control shouldNumber" id="">
                                            <div class="invalid-tooltip">
                                                Please write a number here!
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">File</label>
                                            <div class="custom-file mb-4">
                                                <input type="file" class="form-control " id="validatedCustomFile" required>
                                                <label class="custom-file-label d-none" for="validatedCustomFile">Choose file...</label>
                                                <div class="invalid-tooltip">Please select a file</div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="">Textarea</label>
                                            <textarea required placeholder="Only number input here" class="form-control"></textarea>
                                            <div class="invalid-tooltip">
                                                Please write something here
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <label for="">Sex</label>
                                            <div class="custom-control custom-radio">
                                                <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                                                <label class="custom-control-label" for="customControlValidation2">Male</label>
                                            </div>
                                            <div class="custom-control custom-radio mb-3">
                                                <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                                                <label class="custom-control-label" for="customControlValidation3">Female</label>
                                                <div class="invalid-tooltip">Select one from here</div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-3">
                                            <div class="form-group pl-4">
                                                <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                                <label class="form-check-label ml-3" for="invalidCheck">
                                                    Agree to terms and conditions
                                                </label>
                                                <div class="invalid-tooltip">
                                                    You must agree before submitting.
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary bs-submit" type="submit">Submit form</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>
@endsection
=======
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
>>>>>>> 975d722258dc146115f05b5db774cf87083a7d76
