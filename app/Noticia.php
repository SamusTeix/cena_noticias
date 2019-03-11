<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    public $timestamps = false;	
    protected $table = 'noticias';
    protected $fillable = array('categoria_id', 'titulo', 'texto', 'foto');

    public function categoria() {
    	return $this->belongsTo('App\Categoria');
    }
}
