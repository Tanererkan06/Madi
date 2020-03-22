<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateplaylistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlist', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('display_id');
            $table->string('group_id');
            $table->string('user_id'); 
            $table->string("name");
            $table->string("email")->uniqe();
            $table->string("password");
            $table->timestamp("beginDate")->nullable();
            $table->timestamp("time")->nullable();
            $table->timestamp("endDate")->nullable();
            $table->string('count');
            $table->string('user_role');
            $table->string("screen_seed");
            $table->string("screen_vertify");
            $table->string("subtitle_id");
            $table->string("subtitle_name");
            $table->string("file_id");
            $table->string("File_name");
            $table->string("File_path");
            $table->rememberToken();
            $table->timestamps(); 
            $table->timestamp("File_create")->nullable();
            $table->timestamp("File_update")->nullable();
            $table->string('hide');
   
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('playlist');
    }
}
