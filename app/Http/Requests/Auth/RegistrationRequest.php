<?php

namespace App\Http\Requests\Auth;

use App\Models\MemberDetail;
use App\Models\Role;
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
            'referral' => ['nullable']
        ];
    }

    public function storeUser()
    {
        $user = new User();
        // uuid
        $user->role_id = Role::CUSTOMER;
        // photo
        $user->referral_id = substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);
        $user->name = $this->get('name');
        $user->email = $this->get('email');
        $user->phone = $this->get('phone');
        $user->password = Hash::make($this->get('password'));
        $user->status = true;
        $user->banned = User::NON_BANNED;
        $user->save();
        return $user;
    }

    public function storeMemberDetails($user)
    {
        $memberDetail = new MemberDetail();
        $memberDetail->user_id = $user->id;
        $memberDetail->total_deposites = 0;
        $memberDetail->referral_income = 0;
        $memberDetail->total_earnings = 0;
        $memberDetail->withdraws = 0;
        $memberDetail->reward_income = 0;
        $memberDetail->save();
    }

    public function attachToMyTeamIfReferralCode($user)
    {
        if (is_null($this->get('referral_code'))) return;
    }
}
