<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionarTamanhoProduto extends Migration
{
    
    public function up()
    {
        Schema::table("produtos", function($table){
            $table->string("tamanho", 100)->nullable()->after("quantidade");
        });
    }

    
    public function down()
    {
        Schema::table("produtos", function($table){
            $table->renameColumn("tamanho","xOLD_".date("Ymdhis")."_tamanho");
            //$table->dropColumn("tamanho");
        });
    }
}
