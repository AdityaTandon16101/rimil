<?php

namespace App\Http\Requests\Auth;

use App\Models\Role;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;

class LoginRequest extends FormRequest
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
    public function getLoginValidation()
    {
        return Str::of($this->request->get('login'))->contains('@')
            ? ['login' => ['required', 'email', 'max:255']]
            : ['login' => ['required', 'numeric', 'digits:10']];
    }

    public function rules()
    {
        return $this->getLoginValidation() + ['password' => ['required', 'min:8']];
    }

    public function attributes()
    {
        return [
            'login' => 'Email Or Phone',
            'password' => 'Password'
        ];
    }

    public function authenticate($credentials)
    {
        if (!Auth::attempt($credentials + [
            'role_id' => Role::CUSTOMER,
            'password' => $this->get('password'),
            'banned' => false
        ], $this->has('remember') ? true : false)) {
            throw ValidationException::withMessages([
                'login' => __('auth.failed'),
            ]);
        }
    }
}
