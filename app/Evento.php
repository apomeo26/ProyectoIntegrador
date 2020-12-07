<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    public $timestamps=false;
    protected $fillable=['tipo','descripcion','estado','fecha_registro','tipo_responsable'];

    public function habitantes(){
        return $this->belongsTo('App\Habitante');
    }
}
