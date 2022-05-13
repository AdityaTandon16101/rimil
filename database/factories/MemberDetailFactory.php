<?php

namespace Database\Factories;

use App\Models\MemberDetail;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MemberDetail>
 */
class MemberDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'referral_code' => null,
            // 'alloted_id' => null,
            // 'phase_id' => null,
            'total_deposit' => 500,
            'referral_income' => 0,
            'total_withdraw' => 0,
            'reward_income' => 0,
            'total_earning' => 0,
        ];
    }
}
