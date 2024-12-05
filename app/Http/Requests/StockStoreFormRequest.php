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
        'CODIGO' => ['string', 'max:16'],
        'MARCA' => ['string', 'max:16'],
        'MODELO' => ['string', 'max:16'],
        'ANCHO' => ['string', 'max:16'],
        'PERFIL' => ['string', 'max:16'],
        'E' => ['string', 'max:16'],
        'ARO' => ['string', 'max:16'],
        'TIPO' => ['string', 'max:16'],
        'TELAS' => ['string', 'max:16'],
        'I.C' => ['string', 'max:16'],
        'I.V.' => ['string', 'max:16'],
        'FAB.' => ['string', 'max:16'],
        'C. C/IVA' => ['string', 'max:16'],
        'C. NETO' => ['string', 'max:16'],
        '%C.P.' => ['string', 'max:16'],
        '%P.P' => ['string', 'max:16'],
        '%P+S' => ['string', 'max:16'],
        'PL' => ['string', 'max:16'],
        'FLETE' => ['string', 'max:16'],
        'C.P.' => ['string', 'max:16'],
        'P.DIST' => ['string', 'max:16'],
        'M+B+V' => ['string', 'max:16'],
        'PRECIO LISTA' => ['string', 'max:16'],
        'PROVEEDOR' => ['string', 'max:16'],
        'STOCK R.' => ['string', 'max:16'],
        'STOCK O.' => ['string', 'max:16'],
        'V.T.R' => ['string', 'max:16'],
        'V.T.O' => ['string', 'max:16'],
        'TOTALES' => ['string', 'max:16'],
        ];
    }
}
