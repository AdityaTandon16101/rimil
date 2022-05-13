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
            'total_deposits' => 0,
            'referral_income' => 0,
            'total_earnings' => 0,
            'withdraws' => 0,
            'reward_income' => 0,
            'is_permanent' => false,
            'phase_number' => MemberDetail::PHASE_ZERO
        ];
    }
}
