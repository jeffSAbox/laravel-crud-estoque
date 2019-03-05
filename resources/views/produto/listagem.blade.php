@extends('layout.principal')

@section('conteudo')
<h1>Listagem de Produtos</h1>
@if(empty($produtos))

<div class="alert alert-danger">
  Você não tem nenhum produto cadastrado.
</div>

@else
<table class="table">
    @foreach($produtos as $p)
    <tr class="{{$p->quantidade <= 4?'danger':''}}">
        <td>{{ $p->nome }}</td>
        <td>{{ $p->valor }}</td>
        <td>{{ $p->descricao }}</td>
        <td>{{ $p->quantidade }}</td>
        <td>{{ $p->tamanho }}</td>
        <td>{{ $p->categoria->nome }}</td>

        <td>
            <a href="{{@action('ProdutoController@detalhe',[$p->id])}}">
                <span>Visualizar</span>
            </a>            
        </td>
        <td>
            <a href="{{@action('ProdutoController@alterar',[$p->id])}}">
                <span>Alterar</span>
            </a>           
        </td>
        <td>
            <a href="{{@action('ProdutoController@remove',[$p->id])}}">
                <span>Remover</span>
            </a>           
        </td>
    </tr>
    @endforeach
</table>
@endif

<h4>
    <span class="label label-danger pull-right">
    Um ou menos itens no estoque
    </span>
</h4>

@if( old('nome') )
<div class="alert alert-success">
    Produto {{old('nome')}} adicionado com <strong>sucesso!</strong>
</div>
@endif

@stop