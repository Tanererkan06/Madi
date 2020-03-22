<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatehaberlerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('haberler', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string("name"); 
            $table->string("news_path");
            $table->timestamp("beginDate")->nullable();
            $table->timestamp("endDate")->nullable();
            $table->string("count");
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
        Schema::dropIfExists('haberler');
    }
}
