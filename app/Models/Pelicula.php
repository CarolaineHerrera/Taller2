<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{

    protected $table='peliculas';

    protected $fillable = ['nombre','genero_id','alquilado'];

    protected $hidden = ['created_at','updated_at'];

    public function genero(){
    	return $this->belongsTo('App\Models\Genero');
    }

}
