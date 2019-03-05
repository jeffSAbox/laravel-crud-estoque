<?php

namespace estoque\Http\Controllers;

use Request;
use Auth;

class LoginController extends Controller
{

	public function home(){
		if( !Auth::check() )
			return redirect("/login");
		return view("home");
	}

	public function login(){
		if( Auth::check() )
			return redirect("/home");
		return view("auth.login");
	}

    public function logar(){

    	$credenciais = Request::only('email','senha');

    	if( Auth::attempt($credenciais) ){
    		return Auth::user()->name.":logado com sucesso!";
    	}

    	return "Não foi possivel logar";

    }

    public function logout(){
    	Auth::logout();
    	return redirect()->back()->with('msg', ['msg'=>'Logout feito com sucesso!','class'=>'alert-danger']);
    }
}
