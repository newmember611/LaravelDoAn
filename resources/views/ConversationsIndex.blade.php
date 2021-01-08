@extends('master')
@section('content')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col p-md-0">
                        <h4>ConversationsBoard</h4>
                    </div>
                    <div class="col p-md-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a href="">ConversationsBoard</a>
                            </li>
                        </ol>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card transparent-card">
                            <div class="card-header pb-0">
                                <h4 class="card-title mt-2">ConversationsBoard</h4>
                                <a href="{{route('conversations.create')}}"><button type="submit" class="btn btn-outline-primary">Create</button></a>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-padded recent-order-list-table table-responsive-fix-big">
                                        <thead>
                                            <tr>
                                                <th>#ID</th>
                                                <th>User_one</th>
                                                <th>User_two</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($conversation as $conver)
                                        <tr>
                                                
                                                <td><a target="_blank" href="{{route('conversations.show', $conver['id'])}}" style="color: #333">{{$conver["id"]}}</td>
                                                <td>{{$conver["User_one"]}}</a> 
                                                </td>
                                                <td>{{$conver["User_two"]}}</a> 
                                                </td>
                                                <td><span class="label label-xl label-rounded label-danger"></span>
                                                </td>
                                                <td>
                                                <a href="{{route('conversations.edit', $conver['id'])}}"><button type="submit" class="btn btn-outline-primary">Edit</button></a>
                                                
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