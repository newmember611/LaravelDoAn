<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_has_ConversationsModel extends Model
{
    //
    protected $table = 'user_has_conversations';
    public function User()
    {
        return $this->belongsTo('App\Models\UserModel','id');
    }
    public function Conversation()
    {
        return $this->belongsTo('App\Models\UserModel','id');
    }
}
