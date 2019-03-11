<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	public $timestamps = false;	
    protected $table = 'categorias';
    protected $fillable = array('nome');

    public function noticia() {
    	return $this->hasMany('App\Noticia');
    }
}
