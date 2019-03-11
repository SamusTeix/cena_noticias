<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use App\Noticia;
use App\Categoria;

class NoticiaController extends Controller {

	public function list() {
		$noticias = Noticia::all();
		return view('list')->with('noticias', $noticias);
	}

	public function edit($id) {
		$noticia = Noticia::find($id);
		$categorias = Categoria::all();
		return view('edit')->with('n', $noticia)->with('categorias', $categorias);
	}

	public function new() {
		$categorias = Categoria::all();
		return view('edit')->with('categorias', $categorias);
	}

	public function save() {
		Noticia::Create(Request::all());
		return redirect('/')->withInput();
	}

	public function delete($id) {
		$noticia = Noticia::find($id);
		$noticiaName = $noticia->name;
		$noticia->delete();
		return redirect('/')->with('msg', 'Noticia ' . $noticiaName . ' deletado com sucesso');
	}

}

?>