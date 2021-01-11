@extends('master')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}"/>
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body" style="padding: 0 2vw;">
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
                            <div id="editcontent" class="card-body p-0">
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
                                            <td>{{$user["id"]}}</td>
                                            <td><a target="_blank" href="{{route('user.show', $user['id'])}}" style="color: #333">{{$user["Name"]}}</a> 
                                            </td>                                       
                                            <td>{{$user["Password"]}}</td>
                                            <td>
                                                <div id="statusdeactive_{{$user['id']}}"> 
                                                @if($user['Status'] == 1)      
                                                    <span class="label label-xl label-rounded label-success"></span>
                                                @else                                      
                                                    <span class="label label-xl label-rounded label-danger"></span>
                                                @endif
                                                </div>   
                                            </td>
                                            <td>
                                            <!-- <a href="{{route('user.edit', $user['id'])}}"><button type="submit" class="btn btn-outline-primary">Edit</button></a> -->
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal_{{$user['id']}}">
                                            Edit
                                            </button>

                                            <!-- Modal edit -->
                                            <form action="{{route('user.update', $user['id'])}}" method="POST">
                                            {{csrf_field()}}
                                            {{ method_field('PATCH') }}
                                            <div class="modal fade" id="exampleModal_{{$user['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                <div class="form-control w3layouts"> 
                                                    <input disabled value="{{$user['id']}}" type="text" id="id" name="id" placeholder="id" title="Please enter your First Name" required="">
                                                </div>
                                                <div class="form-control w3layouts"> 
                                                    <input value="{{$user['Name']}}" type="text" id="username_{{$user['id']}}" name="Username" placeholder="Username" title="Please enter your First Name" required="">
                                                </div>
                                                <div class="form-control w3layouts"> 
                                                    <input value="{{$user['Email']}}" type="text" id="email_{{$user['id']}}" name="Email" placeholder="Username" title="Please enter your First Name" required="">
                                                </div>
                                                <div class="form-control w3layouts"> 
                                                    <input value="{{$user['PhoneNumber']}}" type="text" id="phone_{{$user['id']}}" name="PhoneNumber" placeholder="Username" title="Please enter your First Name" required="">
                                                </div>
                                                <div class="form-control w3layouts"> 
                                                    <input value="{{$user['Img']}}" type="text" id="img_{{$user['id']}}" name="Img" placeholder="Img" title="Please enter your First Name" required="">
                                                </div>
                                                <div class="form-control agileinfo">	
                                                    <input value="{{$user['Password']}}" type="password" class="lock" name="Password" placeholder="Password" id="pass_{{$user['id']}}" required="">
                                                </div>
                                                <div class="form-control agileinfo">	
                                                    <input value="{{$user['Status']}}" type="number" class="lock" name="Status" placeholder="status" id="status_{{$user['id']}}" required="">
                                                </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button name="editbutton" data-id="{{$user['id']}}" id="editbuttonid" type="button" class="btn btn-secondary" data-dismiss="modal">Save changes</button>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                            </form>
                                            <!--End modal-->
                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#deactive_{{$user['id']}}">Deactive</button>

                                            <!-- Modal deactive -->
                                            <form>
                                            <div class="modal fade" id="deactive_{{$user['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Deactive</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div id="contentdeactive_{{$user['id']}}" class="modal-body">
                                                    <p>Bạn muốn thay đổi trạng thái của tài khoản này?</p>
                                                    <p>Trạng thái hiện tại: </p>
                                                    @if($user['Status'] == 1)
                                                    {
                                                        <span>Đang hoạt động</span>
                                                    }
                                                    @else
                                                    {
                                                        <span>Đã khóa</span>
                                                    }
                                                    @endif
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button name="deactivebutton" data-id="{{$user['id']}}" type="button" class="btn btn-secondary" data-dismiss="modal">Save changes</button>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                            </form>
                                            <!--End modal-->
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>                       
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        <script>

        </script>
@endsection