<?php

namespace App\Http\Requests;

use App\Models\Deposit;
use Illuminate\Foundation\Http\FormRequest;

class DepositStoreRequest extends FormRequest
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
            'amount' => ['required', 'numeric']
        ];
    }

    public function storeDeposit()
    {
        $deposit = new Deposit();
        $deposit->user_id = auth()->id();
        $deposit->date = date('Y-m-d');
        $deposit->amount = $this->get('amount');
        $deposit->save();
        return back();
    }

    public function addToMyMemberDeposits()
    {
        auth()->user()->memberDetail()->increment('total_deposits', $this->get('amount'));
    }
}
