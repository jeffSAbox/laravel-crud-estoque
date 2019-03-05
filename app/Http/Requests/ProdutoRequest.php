<?php

namespace estoque\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            "nome" => "required|min:3|max:255",
            "descricao" => "required|max:255",
            "valor" => "required|numeric",
            "quantidade" => "required|numeric|max:11|min:1",
            "tamanho" => "max:100",
        ];
    }

    public function messages(){
        return [
            "nome.required"=>"Nome obrigatório",
            "descricao.required"=>"Descrição obrigatório",
            "required"=>":attribute obrigatório",
            "min"=>"Campo :attribute muito curta",
            "max"=>"Campo :attribute muito longa",
            "numeric"=>"Campo :attribute deve ser numérico",
        ];
    }
}
