<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table='venta';
    protected $primaryKey='idventa';
    protected $fillable=[
    'tipo_comprobante','serie_comprobante','num_comprobante','fecha_hora',
    'impuesto','total_venta','estado'
    ];
    use HasFactory;

    public function User(){
        return $this->belongsTo(User::class,'fkidusuario','idusers');
    }

    public function Persona(){
        return $this->belongsTo(Persona::class,'fkidpersona','idpersona');
    }
}
