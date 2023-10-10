<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GamesRequest extends FormRequest
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
            'plataforms_id' => 'required',
            'categories_id' => 'required',
            'cover' => 'required|unique:games,cover',
            'year' => 'required',
        ];
    }

    public function messages(){
        return
        [
            'required' => 'Este campo es requerido',
            'unique' => 'Esta Imagen ya existe en el juego'
        ];
    }
}
