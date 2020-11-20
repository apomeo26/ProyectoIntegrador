<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    public $timestamps = false;
    protected $fillable = ['tipo', 'raza', 'nombre', 'color'];
}
