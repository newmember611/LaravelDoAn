<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $table = 'user_model';
    public function lstConversations()
    {
        return $this->hasMany('App\Models\User_has_ConversationsModel','User_id');
    }
}
