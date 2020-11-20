<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    public $timestamps=false;
    protected $fillable=['tipo','descripcion','estado','fecha_registro'];
}
