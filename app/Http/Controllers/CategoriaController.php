<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use App\Noticia;
use App\Categoria;

class CategoriaController extends Controller {

	public function list() {
		$aCategorias = Categoria::all();
		return view('categoriaList')->with('aCategorias', $aCategorias);
	}

	public function edit($iId) {
		$oCategoria  = Categoria::find($iId);
		return view('categoriaEdit')->with('oCategoria', $oCategoria);
	}

	public function new() {
		return view('categoriaNew');
	}

	public function save() {
		Categoria::Create(Request::all());
		return redirect('categorias')->withInput();
	}

	public function update() {
		$aData = request()->except(['_token']);
		Categoria::find($aData['id'])->update($aData);
		return redirect('categorias')->withInput();
	}

	public function delete($iId) {
		$oCategoria = Categoria::find($iId);
		$sCategoriaName = $oCategoria->name;
		$oCategoria->delete();
		return redirect('categorias')->with('msg', 'Categoria ' . $sCategoriaName . ' deletada com sucesso');
	}

}

?>