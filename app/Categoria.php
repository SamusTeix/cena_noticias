<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function noticia() {
    	return $this->hasMany('App\Noticia');
    }
}
