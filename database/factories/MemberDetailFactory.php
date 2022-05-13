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
            'total_deposit' => 0,
            // 'phase_id' => null,
            'referral_income' => 0,
            'total_withdraw' => 0,
            'reward_income' => 0,
            'total_earning' => 0,
            'is_permanent' => false,
        ];
    }
}
