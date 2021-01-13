<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessageModel extends Model
{
    protected $table = 'message_models';
    public function Conversations()
    {
        return $this->belongsTo('App\Models\ConversationsModel','id');
    }
}
