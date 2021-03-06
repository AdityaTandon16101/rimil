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

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->format('d-M-Y');
    }

    public function scopeCustomer($query)
    {
        return $query->where('role_id', Role::CUSTOMER);
    }

    public function scopeReferralCode($query, $referralCode)
    {
        return $query->whereRelation('memberDetail', 'referral_Code', $referralCode);
    }

    public function scopeActive($query)
    {
        return $query->where('status', true);
    }

    public function scopeInMyTeam($query)
    {
        return $query->whereRelation('teamMembers', 'user_id', '=', auth()->id());
    }

    public function scopeMyTeamMembers($query)
    {
        return $query->whereIn('id', self::find(auth()->id())->teamMembers()->pluck('team_member_id'));
    }

    public function scopeDepositedUpTo500($query)
    {
        return $query->whereRelation('memberDetail', 'total_deposit', '>', 500);
    }

    public function scopeNotInAnyPhase($query)
    {
        return $query->whereHas('memberDetail', fn ($member) => $member->whereNull('phase_id'));
    }

    public function scopeWinners($query)
    {
        return $query->whereRelation('memberDetail', 'phase_id', 1);
    }

    public function scopePhase01($query)
    {
        return $query->whereRelation('memberDetail', 'phase_id', 2);
    }

    public function scopePhase02($query)
    {
        return $query->whereRelation('memberDetail', 'phase_id', 3);
    }

    public function scopePhase03($query)
    {
        return $query->whereRelation('memberDetail', 'phase_id', 4);
    }

    public function scopePhase04($query)
    {
        return $query->whereRelation('memberDetail', 'phase_id', 5);
    }

    public function scopePhase05($query)
    {
        return $query->whereRelation('memberDetail', 'phase_id', 6);
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
