<?php

namespace App\Http\Controllers;

use App\Models\ConversationsModel;
use Illuminate\Http\Request;

class ConversationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=["conversation"=>ConversationsModel::all()];  
        if(!session()->has('data'))
        {
            return redirect('logintest');
        }  
        return view('ConversationsIndex', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if(!session()->has('data'))
        {
            return redirect('logintest');
        }
        return view('ConversationsCreate');
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
        $sp = new ConversationsModel;
        $sp->User_one = $request->one;
        $sp->User_two = $request->two;
        $sp->save(); //Lưu csdl
        $sp=["conversation"=>ConversationsModel::all()->last()]; //Lấy dòng cuối cùng trong bảng để hiện lên view
        if(!session()->has('data'))
        {
            return redirect('logintest');
        }
        return redirect('conversations');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Hiển thị tin nhắn
        $conversation=["conversation"=>ConversationsModel::find($id)];
        if(!session()->has('data'))
        {
            return redirect('logintest');
        }
        return view("ConversationsInfo", $conversation);
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
        $user=["conversation"=>ConversationsModel::find($id)];
        if(!session()->has('data'))
        {
            return redirect('logintest');
        }
        return view("ConversationsEdit", $user);
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
        $item = ConversationsModel::find($id);
        $item->User_one = $request->one;
        $item->User_two = $request->two;
        $item->update();
       // $info=["conversation"=>ConversationsModel::find($id)];
       if(!session()->has('data'))
       {
           return redirect('logintest');
       }
        return redirect('conversations');
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
