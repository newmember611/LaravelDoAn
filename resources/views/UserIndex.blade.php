@extends('master')
@section('content')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col p-md-0">
                        <h4>UserBoard</h4>
                    </div>
                    <div class="col p-md-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a href="">UserBoard</a>
                            </li>
                        </ol>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card transparent-card">
                            <div class="card-header pb-0">
                                <h4 class="card-title mt-2">UserBoard</h4>
                                <a href="{{route('user.create')}}"><button type="submit" class="btn btn-outline-primary">Create</button></a>
                                <div class="table-action float-sm-right mt-4 mt-sm-0">
                                    <form action="#">
                                        <div class="form-row">
                                            <div class="form-group mr-3">
                                                <select class="selectpicker show-tick" data-width="auto">
                                                    <option selected="selected">Russia</option>
                                                    <option>USA</option>
                                                    <option>Canada</option>
                                                    <option>Australia</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select class="selectpicker show-tick" data-width="auto">
                                                    <option selected="selected">Last 30 Days</option>
                                                    <option>Last 1 MOnth</option>
                                                    <option>Last 6 MOnth</option>
                                                    <option>Last Year</option>
                                                </select>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-padded recent-order-list-table table-responsive-fix-big">
                                        <thead>
                                            <tr>
                                                <th>#ID</th>
                                                <th>Customer Name</th>
                                                <th>PassWord</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($user_models as $user)
                                        <tr>
                                                
                                                <td>{{$user["Id"]}}</td>
                                                <td><a target="_blank" href="{{route('user.show', $user['Id'])}}" class="mr-2 bg-primary rounded-circle text-center text-uppercase d-inline-block">{{$user["mininame"]}}</a> <span class="text-pale-sky">{{$user["Name"]}}</span>
                                                </td>
                                                
                                                <td>{{$user["Password"]}}</td>
                                                <td><span class="label label-xl label-rounded label-danger"></span>
                                                </td>
                                                <td>
                                                <a href="{{route('user.edit', $user['Id'])}}"><button type="submit" class="btn btn-outline-primary">Edit</button></a>
                                                <button type="submit" class="btn btn-outline-primary">Deactive</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                                <button type="submit" class="btn btn-outline-primary">Create</button>
                                                
                                </div>
                                <nav>
                                    <ul class="pagination pagination-rounded pagination-md justify-content-end">
                                        <li class="page-item"><a class="page-link" href="javascript:void()">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void()">2</a></li>
                                        <li class="page-item active"><a class="page-link" href="javascript:void()">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void()">4</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void()">5</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
@endsection