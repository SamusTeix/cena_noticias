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
		$oRequest = request();

		if ($oRequest->hasFile('foto') && $oRequest->file('foto')->isValid()) {
			$sNameFile = uniqid(date('HisYmd')) . '.' . $oRequest->file('foto')->extension();
			$bUpload   = $oRequest->file('foto')->storeAs('public', $sNameFile);
			if (!$bUpload) {
				return view('noticiaNew')->with('sMsg', "Erro ao fazer upload do arquivo! Por Favor, tente novamente.");
			}
		} else {
			return view('noticiaNew')->with('sMsg', "A foto não foi enviada ou é invélida. Por favor, tente novamente.");
		}

		$aNoticia = $oRequest->except(['_token']);
		$aNoticia['foto'] = $sNameFile;
		Noticia::Create($aNoticia);
		return redirect('noticias')->withInput();
	}

	public function update() {
		$oRequest = request();

		$bUpdateFoto = false;
		if ($oRequest->hasFile('foto') && $oRequest->file('foto')->isValid()) {
			$sNameFile = uniqid(date('HisYmd')) . '.' . $oRequest->file('foto')->extension();
			$bUpload   = $oRequest->file('foto')->storeAs('public', $sNameFile);
			if (!$bUpload) {
				return view('noticiaNew')->with('sMsg', "Erro ao fazer upload do arquivo! Por Favor, tente novamente.");
			} else {
				$bUpdateFoto = true;
			}
		} else {
			// return view('noticiaNew')->with('sMsg', "A foto não foi enviada ou é invélida. Por favor, tente novamente.");
		}

		$aNoticia = $oRequest->except(['_token']);
		if ($bUpdateFoto) {
			$aNoticia['foto'] = $sNameFile;
		}
		Noticia::find($aNoticia['id'])->update($aNoticia);
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