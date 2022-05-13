<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\{HasMany, HasOne};
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const NON_BANNED = false;
    const BANNED = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'status',
        'banned'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'status' => 'boolean',
        'banned' => 'boolean',
    ];

    public function scopeReferralCode($query, $referralCode)
    {
        return $query->where('referral_id', $referralCode);
    }

    public function scopeMyTeamMembers($query)
    {
        return $query->whereIn('id', auth()->user()->teamMembers()->pluck('team_member_id'));
    }

    public function scopeDepositedUpTo500($query)
    {
        return $query->whereHas('memberDetail', fn ($member) => $member->where('total_deposits', '>', 500));
    }

    public function scopePermanent($query)
    {
        return $query->whereHas('memberDetail', fn ($member) => $member->where('is_permanent', true));
    }

    public function scopeNonPermanent($query)
    {
        return $query->whereHas('memberDetail', fn ($member) => $member->where('is_permanent', false));
    }

    public function scopePhase($query, $phaseNumber)
    {
        return $query->whereHas('memberDetail', fn ($member) => $member->where('phase_number', $phaseNumber));
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('d-M-Y');
    }

    public function memberDetail(): HasOne
    {
        return $this->hasOne(MemberDetail::class);
    }

    public function teamMembers(): HasMany
    {
        return $this->hasMany(Team::class);
    }

    public function bank(): HasOne
    {
        return $this->hasOne(BankDetail::class);
    }

    public function withdraws(): HasMany
    {
        return $this->hasMany(Withdraw::class);
    }
}
