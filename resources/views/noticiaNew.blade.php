@extends('main')

@section('content')

<h1>Nova Notícia</h1>

<form action="save" method="post" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />
	<div class="form-group">
		<label>Categoria:</label>
		<select name="categoria_id" class="form-control">
			@foreach ($aCategorias as $oItem)
				<option value="{{ $oItem->id }}">{{ $oItem->nome }}</option>
			@endforeach
		</select>
		</div>
	<div class="form-group">
		<label>Título:</label>
		<input type="text" class="form-control" name="titulo">
		</div>
	<div class="form-group">
		<label>Texto:</label>
		<input type="text" class="form-control" name="texto">
		</div>
	<div class="form-group">
		<label>Foto:</label>
		<input type="file" class="form-control" name="foto">
		</div>
	<button type="submit" class="btn btn-primary">Salvar</button>
</form>

@stop