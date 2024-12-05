<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $primaryKey = 'CODIGO';
    public $incrementing = false;

    protected $fillable = [
        'CODIGO',
        'MARCA',
        'MODELO',
        'ANCHO',
        'PERFIL',
        'E',
        'ARO',
        'TIPO',
        'TELAS',
        'I.C',
        'I.V.',
        'FAB.',
        'C. C/IVA',
        'C. NETO',
        '%C.P.',
        '%P.P',
        '%P+S',
        'PL',
        'FLETE',
        'C.P.',
        'P.DIST',
        'M+B+V',
        'PRECIO LISTA',
        'PROVEEDOR',
        'STOCK R.',
        'STOCK O.',
        'V.T.R',
        'V.T.O',
        'TOTALES',
    ];

    public function getRouteKeyName()
    {
        return 'CODIGO';
    }
}
