<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Categorias extends Migration
{
    public function up()
    {
        if( !Schema::hasTable('categorias') ){
            Schema::create("categorias", function(Blueprint $table){
                $table->increments('id');
                $table->string('nome',100);
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        Schema::drop('categorias');
    }
}
