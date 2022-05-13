<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Phase extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'package_amount'
    ];

    public function phaseMembers(): HasMany
    {
        return $this->hasMany(PhaseMember::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
