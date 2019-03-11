@extends('main')

@section('content')

<h1>Nova Categoria</h1>

<form action="save" method="post" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />
	<div class="form-group">
		<label>Nome:</label>
		<input type="text" class="form-control" name="nome">
		</div>
	<button type="submit" class="btn btn-primary">Salvar</button>
</form>

@stop