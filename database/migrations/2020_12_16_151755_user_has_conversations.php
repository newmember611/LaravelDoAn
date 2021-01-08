<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserHasConversations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //bảng này thể hiện danh sách chat  của 1 user
        Schema::create('user_has_conversations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('User_id'); //Id của user 
            $table->Integer('Id_user_has_conversations_with'); //Id của user có cuộc trò chuyện với User_id ở trên
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
