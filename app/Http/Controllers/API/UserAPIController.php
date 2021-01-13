<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserModel;
use App\Models\ConversationsModel;
use App\Models\MessageModel;
use App\Models\User_has_ConversationsModel;
class UserAPIController extends Controller
{
    //
    public function index($id){
        // $listUser = UserModel::orderBy('id', 'desc')->get();
        // $listMess = User_has_ConversationsModel::find($id)->User;
        $listMess = UserModel::find($id)->lstConversations;
        // $listMess = MessageModel::find($id)->Conversations;
        // $listMess = ConversationsModel::find($id)->lstMessage;
        // $listMess = ConversationsModel::find(1)->lstConversations;

        return response()->json([
            'data'  => $listMess,
        ]);
    }
    
}
