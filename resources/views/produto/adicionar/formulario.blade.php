@extends('layout.principal')

@section('conteudo')
	
	
	@foreach($errors->all() as $error)
	<div class="alert alert-danger">
		{{$error}}
	</div>	
	@endforeach
	

	<form action="/produtos/gravar" method="post">
		<div class="form-group">		
			<label>Nome</label>
			<input type="text" class="form-control input-lg" name="nome" value="{{old('nome')}}">
		</div>
		<div class="form-group">
			<label>Descrição</label>
			<textarea rows="5" class="form-control input-sm" name="descricao">{{old('descricao')}}</textarea>
		</div>
		<div class="form-group row">
			<div class="form-group col-lg-2">
				<label>Valor</label>
				<input type="text" class="form-control" name="valor" value="{{old('valor')}}">
			</div>		
			<div class="form-group col-lg-2">
				<label>Quantidade</label>
				<input type="number" class="form-control" name="quantidade" value="{{old('quantidade')}}">
			</div>
			<div class="form-group col-lg-2">
				<label>Tamanho</label>
				<input type="text" class="form-control" name="tamanho" value="{{old('tamanho')}}">
			</div>
		</div>
		<div class="form-group">
			<label>Categoria</label>
			<select name="categoria_id" class="form-control">
				@foreach($categorias as $c)
				<option value="{{$c->id}}">{{$c->nome}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary col-lg-12">Gravar</button>	
		</div>
		
		<input type="hidden" name="_token" value="{{ @csrf_token() }}">
	</form>
@stop