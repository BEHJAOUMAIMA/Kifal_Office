<?php

namespace App\Http\Requests;

use Doctrine\Inflector\Rules\English\Rules;
use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'firstname'=>['string', 'max:255'],
            'lastname'=>['string', 'max:255'],
            'email'=>['required', 'string', 'max:255'],
            'mobile'=>['string', 'max:10','min:10'],
            'password'=>['required']
        ];
    }
}
