<?php

namespace App\Http\Requests;

use App\Models\Deposit;
use App\Models\MemberDetail;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

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
        $memberDetail = User::find(auth()->id())->memberDetail;
        $totalDeposits = $memberDetail->total_deposit + $this->get('amount');
        $memberDetail->total_deposit = $totalDeposits;
        $memberDetail->save();
        return $totalDeposits;
    }

    public function makeUserActiveAndAssignReferralCode()
    {
        $user = User::find(auth()->id());
        $user->referral_code = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890"), 0, 8);
        $user->status = true;
        $user->save();

        $maxAllotedId = MemberDetail::query()->max('alloted_id');
        $memberDetail = $user->memberDetail;
        $memberDetail->alloted_id = is_null($maxAllotedId)
            ? 1
            : $memberDetail->alloted_id = ++$maxAllotedId;
        $memberDetail->save();
        return;
    }
}
