<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use estoque\Produto;
use estoque\Categoria;
use Validator;
use estoque\Http\Requests\ProdutoRequest;

class ProdutoController extends Controller{

	public function __construct(){
		$this->middleware('autorizacaoLogin',['only'=>['cadastrar','gravar','alterar','gravarAlteracoes','remove']]);
	}

	private function buscarProdutos(){
		$produtos = Produto::all();
		return $produtos;
	}

	public function listar(){
		$produtos = Produto::all();
		return view("produto.listagem")->with("produtos",$produtos);
	}

	public function listarJSON(){
		$produtos = Produto::all();
		return response()->json($produtos);
	}

	public function baixarWallpaper(){
		return response()->download('D:/xampp/htdocs/estoque/donwloads/wallpaper.jpg');
	}

	public function detalhe($id = 1){

		$produto = Produto::find($id);

		return view("produto.detalhes")->with("p",$produto);
	}

	public function cadastrar(){
		return view('produto.adicionar.formulario')->with('categorias',Categoria::all());
	}

	public function gravar(ProdutoRequest $produto){

		//$params = Request::all();
		//$produto = new Produto($params);
		//$produto->save();

		//$validacao = Validator::make(
		//	["nome"=>Request::input("nome")],
		//	["nome"=>"required|min:3"]
		//);

		//if( $validacao->fails() ){
		//	dd($validacao->messages());
		//	return view('produto.adicionar.formulario');
		//}

		//return redirect("/produtos")->withInput();
		//return view('produto.adicionar.salvar')->with('nome',$nome);

		Produto::create(Request::all());

		return redirect()->action('ProdutoController@listar')->withInput();
	}

	public function alterar($id){
		$produto = Produto::find($id);
		return view('produto.adicionar.alterar')->with("p",$produto)->with('categorias',Categoria::all());
	}

	public function gravarAlteracoes(ProdutoRequest $produto){
		$params = Request::all();
		$produto = Produto::find($params['id']);
		$produto->update($params);

		return redirect()->action('ProdutoController@listar');
	}

	public function remove($id){

		$produto = Produto::find($id);
		$produto->delete();

		return redirect()->action('ProdutoController@listar');

	}

}