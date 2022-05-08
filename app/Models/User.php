<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
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

    public function memberDetail(): HasOne
    {
        return $this->hasOne(MemberDetail::class);
    }

    public function teamMembers(): HasMany
    {
        return $this->hasMany(Team::class);
    }

    public function banks(): HasMany
    {
        return $this->hasMany(BankDetail::class);
    }

    public function withdraws(): HasMany
    {
        return $this->hasMany(Withdraw::class);
    }
}
