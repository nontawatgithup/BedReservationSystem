<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWardTable extends Migration
{
    public function up()
    {
        Schema::create('ward', function (Blueprint $table) {
            $table->increments('id_Ward');
            $table->timestamps();
            $table->string('name_Ward')->nullable();
            });
    }
    public function down()
    {
        Schema::drop('ward');
    }
}
