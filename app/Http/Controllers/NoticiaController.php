<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use App\Noticia;
use App\Categoria;

class NoticiaController extends Controller {

	public function list() {
		$aNoticias = Noticia::all();
		return view('noticiaList')->with('aNoticias', $aNoticias);
	}

	public function edit($iId) {
		$oNoticia    = Noticia::find($iId);
		$aCategorias = Categoria::all();
		return view('noticiaEdit')->with('oNoticia', $oNoticia)->with('aCategorias', $aCategorias);
	}

	public function new() {
		$aCategorias = Categoria::all();
		return view('noticiaNew')->with('aCategorias', $aCategorias);
	}

	public function save() {
		Noticia::Create(Request::all());
		return redirect('noticias')->withInput();
	}

	public function update() {
		$aData = request()->except(['_token']);
		Noticia::find($aData['id'])->update($aData);
		return redirect('noticias')->withInput();
	}

	public function delete($iId) {
		$oNoticia = Noticia::find($iId);
		$sNoticiaName = $oNoticia->name;
		$oNoticia->delete();
		return redirect('noticias')->with('msg', 'Notícia ' . $sNoticiaName . ' deletada com sucesso');
	}

}

?>