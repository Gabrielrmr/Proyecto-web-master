<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'fullname' => 'required',
            'password' => 'required',
            'email' => 'required|unique:users,email',
            'rol_id' => 'required'
        ];
    }

    public function messages(){
        return
        [
            'required' => 'Este campo es requerido',
            'unique' => 'Este email ya existe.'
        ];
    }
}
