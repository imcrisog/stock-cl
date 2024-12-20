<?php

namespace App\Http\Requests;

use App\SiteStorage;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Stock;

class StockStoreFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'CODIGO' => ['string', 'unique:stocks,CODIGO'],
            'MARCA' => ['string'],
            'MODELO' => ['string'],
            'DOT' => ['date'],
            'OE' => ['string'],
            'ANCHO' => ['numeric', 'min:0.1'],
            'PERFIL' => ['string'],
            'E' => ['string'],
            'ARO' => ['string'],
            'TIPO' => ['string'],
            'TELAS' => ['string'],
            'I_C' => ['string'],
            'I_V' => ['string'],
            'FAB' => ['string'],
            'C_C_IVA' => ['numeric', 'min:0'],
            'C_NETO' => ['string'],
            'PCP' => ['numeric', 'min:0'],
            'PPP' => ['numeric', 'min:0'],
            'PPS' => ['numeric', 'min:0'],
            'PL' => ['numeric', 'min:0'],
            'FLETE' => ['numeric', 'min:0'],
            'C_P' => ['numeric', 'min:0'],
            'P_DIST' => ['numeric', 'min:0'],
            'MBV' => ['numeric', 'min:0'],
            'PRECIO_LISTA' => ['numeric', 'min:0'],
            'PROVEEDOR' => ['string'],
            'STOCK_R' => ['string'],
            'STOCK_O' => ['string'],
            'V_TR' => ['string'],
            'V_TO' => ['string'],
            'TOTALES' => ['string'],
            'BODEGA' => ['string'],
            'T' => ['numeric'],
        ];
    }
}
