<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rules\Password;

class UserSignupRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */

    public function rules(): array
    {
        return [
            'first_name' => 'required|string|max:20',
            'last_name' => 'required|string|max:30',
            'email' => 'required|string|email|unique:users',
            'password' => [
                'required',
                'string',
                'confirmed',
                Password::min(6)->mixedCase()->numbers()->symbols(),
            ]
        ];
    }

    public function messages ()
    {
        return [
            'required' => 'Поле :attribute обязательно для заполнения',
            'email.required' => 'Поле email необходимо заполнить',
            'password.min' => 'Пароль должен иметь не менее 6 символов',
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response() -> json($validator -> errors()), 422);
    }
}
