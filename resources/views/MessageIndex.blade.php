@extends('master')

@section('content')
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body" style="padding: 0 2vw;">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col p-md-0">
                        <h4>Message Board</h4>
                    </div>
                    <div class="col p-md-0">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                            </li>
                            <li class="breadcrumb-item active">
                                <a href="">Messages</a>
                            </li>
                        </ol>
                    </div>
                </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card transparent-card">
                            <div class="card-header pb-0">
                                
                                <button onclick="showModal('{{route('msg.create')}}','Create Message')" type="submit" class="btn btn-outline-primary">Create</button>
                            </div>
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-padded recent-order-list-table table-responsive-fix-big">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Sender_ID</th>
                                                <th>Receiver_ID</th>
                                                <th>Message</th>
                                                <th>Conversations ID</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($dataMessage as $lstMessage)
                                        <tr>
                                                
                                                <td>{{$lstMessage["id"]}}</td>
                                                <td>{{$lstMessage["Sender_id"]}}</td>
                                                <td>{{$lstMessage["Receiver_id"]}}</a></td>
                                                <td>{{$lstMessage["Messenges"]}}</td>
                                                <td>{{$lstMessage["Conversations_id"]}}</td>
                                                <td>{{$lstMessage["Status"]}}</a></td>
                                                
                                                <td>
                                                <button onclick="showModal('{{route('msg.edit', $lstMessage['id'])}}','Edit Message')" type="submit" class="btn btn-outline-primary">Edit</button>
                                                <button onclick="showModal('{{route('msg.show', $lstMessage['id'])}}','Detail Message')" type="submit" class="btn btn-outline-primary">Detail</button>
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
        
        
        
        
        <!-- MODAL -->
        <div class="modal" tabindex="-1" role="dialog" id="form-modal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>

            </div>
        </div>
    </div>
    <script>
        
        function showModal(url, title) {
            $.ajax({
                type: "GET",
                url: url,
                success: function (res) {
                    $('#form-modal .modal-body').html(res);
                    $('#form-modal .modal-title').html(title);
                    $('#form-modal').modal('show');

                }
            });
        }
    </script>
@endsection