<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable =["Nombre","Apellido","Email","Edad","Telefono"];
}
