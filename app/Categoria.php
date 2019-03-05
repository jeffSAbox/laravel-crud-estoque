<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function Produto(){
    	return $this->hasMany('estoque\Produto');
    }
}
