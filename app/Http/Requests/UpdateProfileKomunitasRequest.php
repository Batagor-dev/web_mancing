<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileKomunitasRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'      => 'required|string|max:255',
            'deskripsi'  => 'required|string',
            'photo'      => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ];
    }
}
