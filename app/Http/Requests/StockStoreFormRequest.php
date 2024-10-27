<?php

namespace App\Http\Requests;

use App\SiteStorage;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'name' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'price' => 'required|integer',
            'from' => [Rule::enum(SiteStorage::class)]
        ];
    }
}
