@extends('main')

@section('content')

<h1>Lista de Notícias</h1>
@if(count($aNoticias) < 1)
	<div class="alert alert-danger">Você não tem nenhuma notícia cadastrada.</div>
@else
	<table class="table">
		@foreach ($aNoticias as $oItem) 
			<tr>
				<td id="categoria_{{ $oItem->id }}">{{ $oItem->categoria->nome }}</td>
				<td id="titulo_{{ $oItem->id }}">{{ $oItem->titulo }}</td>
				<td id="texto_{{ $oItem->id }}">{{ $oItem->texto }}</td>
				<td>
					<img src="{{ url("storage/{$oItem->foto}")}}" style="width: 10%">
					<span id="foto_{{ $oItem->id }}" style="display: none;">{{ $oItem->foto }}</span>
				</td>
				<td>
					<button type="button" data-toggle="modal" data-id="{{ $oItem->id }}" data-target="#noticiaModal">Ver</button>
				</td>
				<td>
					<a href="/noticias/edit/{{ $oItem->id }} "><i class="material-icons">create</i></a>
				</td>
				<td>
					<a href="/noticias/delete/{{ $oItem->id }}"><i class="material-icons">delete</i></a>
				</td>
			</tr>
		@endforeach
	</table>
@endif

<div>
	<a href="/noticias/new"><button type="button" class="btn btn-primary">Adicionar Notícia</button></a>
</div>

<!-- CRIACAO DO MODAL PARA EXIBICAO - INI -->
<div class="modal fade" id="noticiaModal" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel"></h4>
            <button type="button" class="close" data-dismiss="modal"><i class="material-icons">close</i></button>
        </div>            
        <div class="modal-body">
        </div>
    </div>
</div>

<script type="text/javascript">
		
	$('#noticiaModal').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget)
		var recipient = button.data('id')
		var modal = $(this)

		var sHtml  = '';
		sHtml += '<p>' + $('#categoria_' + recipient)[0].innerHTML + '</p>';
		sHtml += '<img src="storage/' + $('#foto_' + recipient)[0].innerHTML + '" style="width: 40%;">';
		sHtml += '<br><br>';
		sHtml += '<p>' + $('#texto_' + recipient)[0].innerHTML + '</p>';

		modal.find('.modal-title').text($('#titulo_' + recipient)[0].innerHTML)
		modal.find('.modal-body').html(sHtml)
	})

</script>

<!-- CRIACAO DO MODAL PARA EXIBICAO - FIM -->

@stop