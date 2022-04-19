<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Withdraw extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
        'amount'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
