<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
        $validate = [
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'nama' => 'required|string',
            'berat' => 'required|integer',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
            'kondisi' => 'required|in:Bekas,Baru',
            'deskripsi' => 'required|string|max:2000',
        ];

        return $validate;
    }
}
