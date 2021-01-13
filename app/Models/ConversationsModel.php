<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConversationsModel extends Model
{
    //
    protected $table = 'conversation';
    public function lstConversations()
    {
        return $this->hasMany('App\Models\User_has_ConversationsModel','Conversations_id');
    }

    public function lstMessage()
    {
        return $this->hasMany('App\Models\MessageModel','Conversations_id');
    }
}
