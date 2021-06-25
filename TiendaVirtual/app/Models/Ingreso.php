<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $table='ingreso';
    protected $primaryKey='idingreso';
    protected $fillable=[
    'tipocomprobante','seriecomprobante','numerocomprobante','fechahora',
    'impuesto','estado'
    ];
    use HasFactory;

    public function Persona(){
        return $this->belongsTo(Persona::class,'fkidpersona','idpersona');
    }
}
