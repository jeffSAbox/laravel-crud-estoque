@extends("layout.principal")
@section("conteudo")

<h1>Alterar dados</h1>

@foreach($errors->all() as $error)
<div class="alert alert-danger">
	{{$error}}
</div>	
@endforeach

<form action="/produto/gravarAlteracoes" method="post">
	<div class="form-group">		
		<label>Nome</label>
		<input type="text" class="form-control input-lg" name="nome" value="{{$p->nome}}">
	</div>
	<div class="form-group">
		<label>Descrição</label>
		<textarea rows="5" class="form-control input-sm" name="descricao">{{$p->descricao}}</textarea>
	</div>
	<div class="form-group row">
		<div class="form-group col-lg-2">
			<label>Valor</label>
			<input type="text" class="form-control" name="valor" value="{{$p->valor}}">
		</div>		
		<div class="form-group col-lg-2">
			<label>Quantidade</label>
			<input type="number" class="form-control" name="quantidade" value="{{$p->quantidade}}">
		</div>
		<div class="form-group col-lg-2">
			<label>Tamanho</label>
			<input type="text" class="form-control" name="tamanho" value="{{$p->tamanho}}">
		</div>
	</div>
	<div class="form-group">
		<label>Categoria</label>
		<select name="categoria_id" class="form-control">
			@foreach($categorias as $c)
			<option {{$p->categoria_id == $c->id?'selected':''}} value="{{$c->id}}">{{$c->nome}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary col-lg-12">Salvar Alterações</button>	
	</div>
	
	<input type="hidden" name="_token" value="{{ @csrf_token() }}">
	<input type="hidden" name="id" value="{{$p->id}}">
</form>
@stop