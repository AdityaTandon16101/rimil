<?php

namespace App\Http\Requests;

use App\Models\BankDetail;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class StoreBankRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'bank_name' => ['required', 'string'],
            'branch_name' => ['required', 'string'],
            'account_name' => ['required', 'string'],
            'account_number' => ['required', 'numeric'],
            'ifsc' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8']
        ];
    }

    public function isPasswordCorrect($user)
    {
        if (!Hash::check($this->get('password'), $user->password)) {
            throw ValidationException::withMessages([
                'password' => __('auth.password'),
            ]);
        }
    }

    public function storeBankDetails($user)
    {
        $bank = new BankDetail();
        $bank->user_id = $user->id;
        $bank->bank_name = $this->get('bank_name');
        $bank->branch_name = $this->get('branch_name');
        $bank->account_name = $this->get('account_name');
        $bank->account_number = $this->get('account_number');
        $bank->ifsc = $this->get('ifsc');
        $bank->save();
    }
}
