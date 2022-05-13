<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MemberDetail extends Model
{
    use HasFactory;

    const PHASE_ZERO = 0;
    const PHASE_ONE = 1;
    const PHASE_TWO = 2;
    const PHASE_THREE = 3;
    const PHASE_FOUR = 4;
    const PHASE_FIVE = 5;

    protected $fillable = [
        'user_id',
        'total_deposits',
        'referral_income',
        'total_earnings',
        'withdraws',
        'reward_income',
        'is_permanent',
        'phase_number'
    ];

    protected $casts = [
        'is_permanent' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
