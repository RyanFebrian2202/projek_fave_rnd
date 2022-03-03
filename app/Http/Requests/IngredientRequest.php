<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IngredientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_barang' => ['required','max:255'],
            'lokasi_barang' => ['required','max:255'],
            'stock' => ['required','max:10000','numeric','min:0'],
            'merk' => ['required','max:255'],
            'buy_date' => ['required'],
            'expired_date' => ['required'],
        ];
    }
}
