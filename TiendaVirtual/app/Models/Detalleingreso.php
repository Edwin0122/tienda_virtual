<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalleingreso extends Model
{
    protected $table='detalleingreso';
    protected $primaryKey='iddetalleingreso';
    protected $fillable=[
        'cantidad','preciocompra','precioventa','fkidarticulo','fkidingreso'
    ];
    use HasFactory;

    public function Articulo(){
        return $this->belongsTo(Articulo::class,'fkidarticulo','idarticulo');
    }

    public function Ingreso(){
        return $this->belongsTo(Ingreso::class,'fkidingreso','idingreso');
    }
}
