<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models;
use App\Models\MessageModel;
use Illuminate\Database\Eloquent\Model;

class MesssageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ["dataMessage"=>MessageModel::all()];
        if(!session()->has('data'))
        {
            return redirect('logintest');
        }
        return view('MessageIndex', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!session()->has('data'))
        {
            return redirect('logintest');
        }
        return view('MessageCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newRow = new MessageModel;
        $newRow->Sender_id = $request->senderID;
        $newRow->Receiver_id = $request->receiverID;
        $newRow->Messenges = $request->message;
        $newRow->Conversations_id = $request->conversationID;
        $newRow->Status = $request->status;
        $newRow->save();


        $data = ["dataMessage"=>MessageModel::all()];
        if(!session()->has('data'))
        {
            return redirect('logintest');
        }
        return view("MessageIndex", $data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $row = ["infoItem" => MessageModel::find($id)];
        if(!session()->has('data'))
        {
            return redirect('logintest');
        }
        return view("MessageDetails", $row);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row=["infoItem"=>MessageModel::find($id)];
        if(!session()->has('data'))
        {
            return redirect('logintest');
        }
        return view("MessageEdit", $row);
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
        $newRow = MessageModel::find($id);
        $newRow->Sender_id = $request->senderID;
        $newRow->Receiver_id = $request->receiverID;
        $newRow->Messenges = $request->message;
        $newRow->Conversations_id = $request->conversationID;
        $newRow->Status = $request->status;
        $newRow->save();
        if(!session()->has('data'))
        {
            return redirect('logintest');
        }
        return redirect()->route('msg.index');
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
