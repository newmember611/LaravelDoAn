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
                                                <td><a target="_blank" href="{{route('user.show', $user['id'])}}" style="color: #333">{{$user["Name"]}}</a> 
                                                </td>
                                                
                                                <td>{{$user["Password"]}}</td>
                                                <td><span class="label label-xl label-rounded label-danger"></span>
                                                </td>
                                                <td>
                                                <a href="{{route('user.edit', $user['id'])}}"><button type="submit" class="btn btn-outline-primary">Edit</button></a>
                                                <a href="{{route('user.deactive', $user['id'])}}"><button type="submit" class="btn btn-outline-primary">Deactive</button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>                       
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