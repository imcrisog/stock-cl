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
            'CODIGO' => ['required', 'string', 'max:20'],
            'MARCA' => ['required', 'string', 'max:20'],
            'MODELO' => ['required', 'string', 'max:20'],
            'ANCHO' => ['required', 'numeric', 'max:20'],
            'PERFIL' => ['required', 'string', 'max:20'],
            'E' => ['required', 'string', 'max:20'],
            'ARO' => ['required', 'string', 'max:20'],
            'TIPO' => ['required', 'string', 'max:20'],
            'TELAS' => ['required', 'string', 'max:20'],
            'I.C' => ['required', 'string', 'max:20'],
            'I.V.' => ['required', 'string', 'max:20'],
            'FAB.' => ['required', 'string', 'max:20'],
            'C. C/IVA' => ['required', 'string', 'max:20'],
            'C. NETO' => ['required', 'string', 'max:20'],
            '%C.P' => ['required', 'string', 'max:20'],
            '%P.P' => ['required', 'string', 'max:20'],
            '%P.S' => ['required', 'string', 'max:20'],
            '%P+S' => ['required', 'string', 'max:20'],
            'PL' => ['required', 'string', 'max:20'],
            'FLETE' => ['required', 'integer', 'max:20'],
            'C.P.' => ['required', 'integer', 'max:20'],
            'P.DIST' => ['required', 'integer', 'max:20'],
            'M+B+V' => ['required', 'integer', 'max:20'],
            'PRECIO LISTA' => ['required', 'integer', 'max:20'],
            'PROVEEDOR' => ['required', 'string', 'max:20'],
            'STOCK R.' => ['required', 'string', 'max:20'],
            'STOCK O.' => ['required', 'string', 'max:20'],
            'V.T.R' => ['required', 'string', 'max:20'],
            'V.T.O' => ['required', 'string', 'max:20'],
            'TOTALES' => ['required', 'string', 'max:20'],
        ];
    }
}
