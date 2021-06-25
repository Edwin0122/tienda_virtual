<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table='persona';
    protected $primaryKey='idpersona';
    protected $fillable=[
        'tipopersona','nombre','tipodocumento','numerodocumento',
        'direccion','telefono','email'
    ];

    use HasFactory;

}
