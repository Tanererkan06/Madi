<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name");
            $table->string("email")->uniqe();
            $table->string("password");
            $table->timestamp("beginDate")->nullable();
            $table->timestamp("endDate")->nullable();
            $table->string("count");
            $table->string("user_role");
            $table->string("screen_seed");
            $table->string("screen_vertify");
            $table->rememberToken();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
