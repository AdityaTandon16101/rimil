<?php

namespace App\Http\Requests\Auth;

use App\Models\MemberDetail;
use App\Models\ReferralIncome;
use App\Models\Role;
use App\Models\Team;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class RegistrationRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'numeric', 'digits:10', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'referral_code' => ['nullable']
        ];
    }

    public function storeUser()
    {
        $user = new User();
        $user->role_id = Role::CUSTOMER;
        // photo
        $user->name = $this->get('name');
        $user->email = $this->get('email');
        $user->phone = $this->get('phone');
        $user->password = Hash::make($this->get('password'));
        $user->status = false;
        $user->banned = User::NON_BANNED;
        $user->save();
        return $user;
    }

    public function storeMemberDetails($user)
    {
        $memberDetail = new MemberDetail();
        $memberDetail->user_id = $user->id;
        $memberDetail->referral_code = null;
        $memberDetail->alloted_id = null;
        $memberDetail->total_deposit = 0;
        $memberDetail->referral_income = 0;
        $memberDetail->total_withdraw = 0;
        $memberDetail->reward_income = 0;
        $memberDetail->total_earning = 0;
        $memberDetail->withdrawable_amount = 0;
        $memberDetail->save();
    }

    public function makePermanentMemberIf500th($user)
    {
        if ($user->id % 500 != 0) return;
        $toBecomePermanentMember = User::query()->customer()
            ->depositedUpTo500()->first();

        if (!$toBecomePermanentMember) return;
        $memberDetail = $toBecomePermanentMember->memberDetail;
        $memberDetail->phase_id = $this->getPhaseId($memberDetail);
        $memberDetail->is_permanent = true;
        $memberDetail->save();
    }

    public function attachToMyTeam($user)
    {
        $referredUser = User::referralCode($this->get('referral_code'))->first();
        if (!$referredUser) return;
        $team = new Team();
        $team->user_id = $referredUser->id;
        $team->team_member_id = $user->id;
        $team->save();
        return $referredUser;
    }

    public function giveReferralReward($referredUser, $amount)
    {
        $referralIncome = new ReferralIncome();
        $referralIncome->user_id = $referredUser->id;
        $referralIncome->date = date('Y-m-d');
        $referralIncome->amount = 50;
        $referralIncome->save();

        $memberDetail = $referredUser->memberDetail;
        $memberDetail->referral_income = $memberDetail->referral_income + $amount;
        $memberDetail->save();
    }

    public function getPhaseId($memberDetail)
    {
        $currentPhase = $memberDetail->phase_id;
        if (is_null($currentPhase)) return 1;
        return ++$currentPhase;
    }
}
