<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessengesModel extends Model
{
    //
    protected $table = 'messenges';
    public function TinNhan()
    {
        return $this->belongsTo('App\Model\User_has_ConversationsModel','User_id','User_id');
    }
    public function CuocTroChuyen()
    {
        return $this->belongsTo('App\Model\User_has_ConversationsModel','Conversations_id','Conversations_id');
    }
}
