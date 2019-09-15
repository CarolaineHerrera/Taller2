<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{

    protected $table='generos';

    protected $fillable = ['nombre','descripcion'];

    protected $appends = ['nombre_id','listado_peliculas'];

    protected $casts = ['descripcion'=> 'array'];

    protected $hidden = ['created_at','updated_at'];

    public function peliculas(){
    	return $this->hasMany('App\Models\Pelicula');
    }

    public function getNombreIdAttribute()
    {
        return "{$this->nombre} {$this->id}";
    }

    public function getListadoPeliculasAttribute()
    {
        return $this->peliculas;
    }

    public function setNombreAttribute($value){
    	$this->attributes['nombre'] = ucfirst($value);
        }

}
