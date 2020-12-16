<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\User;
use App\Models;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
        $sp->Password = brcypt($request->password);
        $sp->Status = $request->status;
        $sp->save(); //Lưu csdl
        $sp=["user"=>UserModel::all()->last()]; //Lấy dòng cuối cùng trong bảng để hiện lên view
        return view('UserInfo', $user);  
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
        $user=["user"=>UserModel::find($id)];
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
        $user=["user"=>UserModel::find($id)];
        return view("UserEdit", $user);
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
        $temp = UserModel::find($id);
        //dd($temp);
        $temp->Name = $request->username;
        $temp->Password = bcrypt($request->password);
        $temp->Status = $request->status;
        $temp->save(); //update csdl
        $info=["user"=>UserModel::find($id)];
        return view("UserInfo", $info);
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
