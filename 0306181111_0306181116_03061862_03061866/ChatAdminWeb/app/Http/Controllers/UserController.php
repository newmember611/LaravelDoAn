<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Database\Eloquent\Model;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$data=[
            'users'=>[
                ["id"=>1, "mininame" => "1", "username"=> "User 1", "password" => "qwerty", "status" => 1],
                ["id"=>2, "mininame" => "2", "username"=>"User 2", "password" => "qwerty", "status" => 1],
                ["id"=>3, "mininame" => "3", "username"=>"User 3", "password" => "qwerty", "status" => 1],
                ["id"=>4, "mininame" => "4", "username"=>"User 4", "password" => "qwerty", "status" => 1]
            ]
            ];*/
            $data=["user_models"=>UserModel::all()];    
        

            return view('UserIndex', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('UserCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sp = new UserModel;
        $sp->Name = $request->name;
        $sp->Password = $request->password;
        $sp->Status = $request->status;
       

        $sp->save(); //Lưu csdl
        $sp=["sp"=>UserModel::all()->last()]; //Lấy dòng cuối cùng trong bảng để hiện lên view
        return view('UserInfo', $sp);  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user=["id" => $id, "mininame" => $id, "username" => "asd", "password" => "qwerty", "status" => 1];
        return view("UserInfo", $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $sp=["sp"=>UserModel::find($id)];
        return view("UserEdit", $sp);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sp = UserModel::find($id);
        $sp->Name = $request->name;
        $sp->Password = $request->password;
        $sp->Status = $request->status;
        $sp->save(); //update csdl
        $sp=["sp"=>UserModel::all()->find($id)];
        return view("UserInfo", $sp);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
