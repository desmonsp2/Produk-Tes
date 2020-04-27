<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Produk extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_additional' => 'required',
            'nama_produk' => 'required',
            'harga_pokok' => 'required',
            'harga_jual' => 'required'
        ];
    }
}
