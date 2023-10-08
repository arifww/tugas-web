<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateNasabahRequest extends FormRequest
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
            //
            'email' => ['required', 'max:100'],
            'password' => ['required', 'max:100'],
            'nama' => ['required', 'max:100'],
            'namabelakang' => ['required', 'max:100'],
            'alamat' => ['required', 'max:256'],
            'telepon' => ['required', 'numeric', 'min:1'], 
            'avatar' => ['required', 'max:100'], 
        ];
    }
}
