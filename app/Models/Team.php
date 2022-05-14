<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'team_member_id'
    ];

    public function scopeMyTeam($query)
    {
        return $query->where('user_id', auth()->id());
    }

    public function scopeActive($query)
    {
        return $query->whereHas('teamMember', fn ($user) => $user->active());
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function teamMember(): BelongsTo
    {
        return $this->belongsTo(User::class, 'team_member_id', 'id');
    }
}
