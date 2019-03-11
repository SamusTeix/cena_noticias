@extends('main')

@section('content')

<h1>Lista de Categorias</h1>
@if(count($aCategorias) < 1)
	<div class="alert alert-danger">Você não tem nenhuma categoria cadastrada.</div>
@else
	<table class="table">
		@foreach ($aCategorias as $c) 
			<tr>
				<td>{{ $c->nome }}</td>
				<!-- <td>
					<a href="/categorias/edit/{{ $c->id }} ">Editar</a>
				</td>
				<td>
					<a href="/categorias/delete/{{ $c->id }} ">Excluir</a>
				</td> -->
			</tr>
		@endforeach
	</table>
@endif

<div>
	<a href="/categorias/new"><button type="button" class="btn btn-primary">Adicionar Categoria</button></a>
</div>

@stop