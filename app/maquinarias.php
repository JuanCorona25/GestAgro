<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maquinarias extends Model
{
    protected $fillable = [
        'idFiinc','idmarc','Marca','Combustible','Rendimiento','ModeloMaq','yearFabricacion','Adepreciacion',
        'ValorActMaq','Unidad','NoSerieMotor',
    ];
}
