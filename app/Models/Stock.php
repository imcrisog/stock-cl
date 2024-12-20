<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $primaryKey = 'CODIGO';
    public $incrementing = false;
    public $timestamps = false;
    protected $dates = ['DOT'];

    protected $fillable = [
        'CODIGO',
        'MARCA',
        'MODELO',
        'DOT',
        'OE',
        'ANCHO',
        'PERFIL',
        'E',
        'ARO',
        'TIPO',
        'TELAS',
        'I_C',        // Matching 'I_C' with the migration
        'I_V',        // Matching 'I_V' with the migration
        'FAB',
        'C_C_IVA',    // Matching 'C_C_IVA' with the migration
        'C_NETO',     // Matching 'C_NETO' with the migration
        'PCP',        // Matching 'PCP' with the migration
        'PPP',        // Matching 'PPP' with the migration
        'PPS',        // Matching 'PPS' with the migration
        'PL',         // Matching 'PL' with the migration
        'FLETE',
        'C_P',        // Matching 'C_P' with the migration
        'P_DIST',     // Matching 'P_DIST' with the migration
        'MBV',        // Matching 'MBV' with the migration
        'PRECIO_LISTA',
        'PROVEEDOR',
        'STOCK_R',    // Matching 'STOCK_R' with the migration
        'STOCK_O',    // Matching 'STOCK_O' with the migration
        'V_TR',       // Matching 'V_TR' with the migration
        'V_TO',       // Matching 'V_TO' with the migration
        'TOTALES',
        'BODEGA',
        'T',
    ];
    

    public function getRouteKeyName()
    {
        return 'CODIGO';
    }
}
