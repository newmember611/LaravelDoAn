<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Conversations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('conversation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('User_one');
            $table->Integer('User_two');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::table('conversation', function (Blueprint $table) {
            
            $table->foreign('id')->references('Conversations_id')->on('user_has_conversations');   
            $table->foreign('id')->references('Conversations_id')->on('message_models');                 
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
