@extends('main')

@section('content')

@if (!empty($n))
	<h1>Editar Notícia</h1>
@else
	<h1>Nova Notícia</h1>
@endif

@if (count($errors) > 0)
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif

<form action="/save" method="post" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />
	<input type="hidden" name="id" value="{{ $n->id }}" />
	<div class="form-group">
		<label>Categoria:</label>
		<select name="categoria_id" class="form-control">
			@foreach ($categorias as $cat)
				<option value="{{ $cat->id }}" {{ $n->categoria_id == $cat->id ? 'selected' : ''}}>{{ $cat->nome }}</option>
			@endforeach
		</select>
		</div>
	<div class="form-group">
		<label>Título:</label>
		<input type="text" class="form-control" name="titulo" value="{{ $n->titulo }}">
		</div>
	<div class="form-group">
		<label>Texto:</label>
		<input type="textarea" class="form-control" name="texto" value="{{ $n->texto }}">
		</div>
	<div class="form-group">
		<label>Foto:</label>
		<input type="file" class="form-control" name="foto">
		</div>
	<button type="submit" class="btn btn-primary">Salvar</button>
</form>

@stop