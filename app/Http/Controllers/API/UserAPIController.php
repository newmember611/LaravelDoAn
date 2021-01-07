<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserModel;
class UserAPIController extends Controller
{
    //
    public function index(){
        $listUser = UserModel::orderBy('id', 'desc')->get();

        return response()->json([
            'data'  => $listUser
        ]);
    }
    
}
