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
        'total_deposites',
        'referral_income',
        'total_earnings',
        'withdraws',
        'reward_income'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
