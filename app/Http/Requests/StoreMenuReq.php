<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMenuReq extends FormRequest
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
            'foto' => ['required', 'mimes:jpg,jpeg,png'],
            'nama' => ['required', 'max:100'],
            'category' => ['required'],
            'harga' => ['required', 'numeric', 'min:1'],
            'desc' => ['required', 'max:400'],
            'status' => ['required'],
        ];
    }
}
