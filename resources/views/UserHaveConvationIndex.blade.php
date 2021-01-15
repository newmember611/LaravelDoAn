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
                    <?php
                            $date = getdate();
                            echo "<hr>";
                            echo "Thứ    ".$date['weekday'];
                            echo "  ".$date['mday'];
                            echo "/".$date['mon'];
                            echo "/".$date['year'];
                            
                        ?>
                    <div class="col p-md-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a href="">UserHasConvation</a>
                            </li>
                        </ol>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card transparent-card">
                            <div class="card-header pb-0">
                                <h4 class="card-title mt-2">UserHasConvation</h4>
                                
                                <a href="{{route('userhaveconvation.create')}}"><button type="submit" class="btn btn-outline-primary">Create</button></a>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-padded recent-order-list-table table-responsive-fix-big">
                                        <thead>
                                            <tr>
                                            <th>#ID</th>
                                                <th>User Id</th>
                                                <th>Conversations Id</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                        @foreach($user_has_conversations as $user)
                                            <tr>
                                                <td>{{$user["id"]}}</td>
                                                <td>{{$user["User_id"]}}</td>                                                                                   
                                                <td>{{$user["Conversations_id"]}}</td>
                                                <td><span class="label label-xl label-rounded label-danger"></span>
                                                </td>
                                                <td>
                                                <a href="{{route('userhaveconvation.edit', $user['id'])}}"><button type="submit" class="btn btn-outline-primary">Edit</button></a>
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