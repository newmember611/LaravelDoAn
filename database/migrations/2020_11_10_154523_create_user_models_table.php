<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_model', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Email', 100);
            $table->string('Name',100);
            $table->string('Password',100);
            $table->Integer('PhoneNumber');
            $table->boolean('Status');
            $table->string('Img',100);
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
        Schema::dropIfExists('user_models');
    }
}
