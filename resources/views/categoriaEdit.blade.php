@extends('main')

@section('content')

<h1>Editar Categoria - {{ $oCategoria->nome }}</h1>

<form action="../update" method="post" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />
	<input type="hidden" name="id" value="{{ $oCategoria->id }}" />
	<div class="form-group">
		<label>Nome:</label>
		<input type="text" class="form-control" name="nome" value="{{ $oCategoria->nome }}">
		</div>
	<button type="submit" class="btn btn-primary">Salvar</button>
</form>

@stop