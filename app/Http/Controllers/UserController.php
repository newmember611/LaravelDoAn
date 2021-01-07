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

    public function deactive($id)
    {
        $user=["user"=>UserModel::find($id)];
        return view("UserDeactive", $user);
    }

    public function updateDeactive(Request $request)
    {
        $temp = UserModel::find($id);
      
        $temp->Status = 0;
        $temp->update();
        $info=["user"=>UserModel::find($id)];
        return view("UserInfo", $info);

        
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
        $sp->Email = $request->email;
        $sp->PhoneNumber = $request->phonenumber;
        $sp->Img = "profile.png";
        $sp->Password = bcrypt($request->password);
        $sp->Status = 1;
        $sp->save(); //Lưu csdl
        $sp=["user"=>UserModel::all()->last()]; //Lấy dòng cuối cùng trong bảng để hiện lên view
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
        $item = UserModel::find($id);
        $item->Name = $request->Username;
        $item->Email = $request->Email;
        $item->Password = bcrypt($request->Password);
        $item->PhoneNumber = $request->PhoneNumber;
        $item->Img = $request->Img;
        $item->Status = $request->Status;
        $item->update();
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
