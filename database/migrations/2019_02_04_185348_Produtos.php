<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Produtos extends Migration
{
    public function up(){
        if(!Schema::hasTable('produtos')){
            //  `id`, `nome`, `valor`, `descricao`, `quantidade`
            Schema::create("produtos", function(Blueprint $table){
                $table->increments("id");
                $table->string('nome',255);
                $table->string('valor',255);
                $table->longText('descricao');
                $table->integer('quantidade',11);
            });
        }
    }

    public function down(){
        //
    }
}
