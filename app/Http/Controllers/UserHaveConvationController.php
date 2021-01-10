<?php

namespace App\Http\Controllers;
use App\Models\User_has_ConversationsModel;

use Illuminate\Http\Request;

class UserHaveConvationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=["user_has_conversations"=>User_has_ConversationsModel::all()];    
        return view('UserHaveConvationIndex', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('UserHaveConvationCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sp = new User_has_ConversationsModel;
        $sp->User_id = $request->User_id;
        $sp->Conversations_id = $request->Conversations_id;
        $sp->save(); //Lưu csdl
        return redirect('userhaveconvation');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=["user_has_conversations"=>User_has_ConversationsModel::find($id)];
        return view("UserHaveConvationEdit", $user);
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
        $item = User_has_ConversationsModel::find($id);
        $item->User_id = $request->User_id;
        $item->Conversations_id = $request->Conversations_id;
        $item->update();
        return redirect('userhaveconvation');
        
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
