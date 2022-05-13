<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MemberDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        // 'phase_id',
        'total_deposit',
        'referral_income',
        'withdraws',
        'reward_income',
        'total_earning',
        'is_permanent',
    ];

    protected $casts = [
        'is_permanent' => 'boolean',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function phase(): BelongsTo
    {
        return $this->belongsTo(Phase::class);
    }
}
