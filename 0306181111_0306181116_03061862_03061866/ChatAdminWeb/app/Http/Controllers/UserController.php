<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[
            'users'=>[
                ["id"=>1, "mininame" => "1", "username"=> "User 1", "password" => "qwerty", "status" => 1],
                ["id"=>2, "mininame" => "2", "username"=>"User 2", "password" => "qwerty", "status" => 1],
                ["id"=>3, "mininame" => "3", "username"=>"User 3", "password" => "qwerty", "status" => 1],
                ["id"=>4, "mininame" => "4", "username"=>"User 4", "password" => "qwerty", "status" => 1]
            ]
            ];
            return view('UserIndex', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $user=["id" => $id, "username" => "test", "password" => "qwerty"];
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
        //
        $user=["id" => $id, "username" => $request->username, "password" => $request->password, "status"=>$request->status];
        return view("UserInfo", $user);
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
