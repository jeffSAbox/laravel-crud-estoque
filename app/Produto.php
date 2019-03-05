<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model{
    
	//protected $table = "produtos";
	public $timestamps = false;

	protected $fillable = array('nome','valor','descricao','quantidade','tamanho','categoria_id');

	protected $guarded = array("id");

	public function categoria(){
		return $this->belongsTo('estoque\Categoria');
	}

}
