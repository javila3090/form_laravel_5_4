<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = 'personas';
    protected $fillable = ['nombres', 'apellidos', 'fecha_nac','edad','genero','email', 'telefono', 'created_at', 'updated_at'];
    protected $guarded = ['id'];
}