@extends('main')

@section('content')

<h1>Lista de Notícias</h1>
@if(count($aNoticias) < 1)
	<div class="alert alert-danger">Você não tem nenhuma notícia cadastrada.</div>
@else
	<table class="table">
		@foreach ($aNoticias as $n) 
			<tr>
				<td>{{ $n->titulo          }}</td>
				<td>{{ $n->categoria->nome }}</td>
				<td>{{ $n->texto           }}</td>
				<td>{{ $n->foto            }}</td>
				<td>
					<a href="/noticias/edit/{{ $n->id }} ">Editar</a>
				</td>
				<td>
					<a href="/noticias/delete/{{ $n->id }} ">Excluir</a>
				</td>
			</tr>
		@endforeach
	</table>
@endif

<div>
	<a href="/noticias/new"><button type="button" class="btn btn-primary">Adicionar Notícia</button></a>
</div>

@stop