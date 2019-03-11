@extends('main')

@section('content')

<h1>Editar Notícia - {{ $oNoticia->titulo }}</h1>

<form action="../update" method="post" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />
	<input type="hidden" name="id" value="{{ $oNoticia->id }}" />
	<div class="form-group">
		<label>Categoria:</label>
		<select name="categoria_id" class="form-control">
			@foreach ($aCategorias as $oItem)
				<option value="{{ $oItem->id }}" {{ $oNoticia->categoria_id == $oItem->id ? 'selected' : '' }}>{{ $oItem->nome }}</option>
			@endforeach
		</select>
		</div>
	<div class="form-group">
		<label>Título:</label>
		<input type="text" class="form-control" name="titulo" value="{{ $oNoticia->titulo }}">
		</div>
	<div class="form-group">
		<label>Texto:</label>
		<input type="text" class="form-control" name="texto" value="{{ $oNoticia->texto }}">
		</div>
	<div class="form-group">
		<label>Foto:</label>
		<input type="file" class="form-control" name="foto" value="{{ $oNoticia->foto }}">
		</div>
	<button type="submit" class="btn btn-primary">Salvar</button>
</form>

@stop