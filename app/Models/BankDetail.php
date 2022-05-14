<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BankDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'bank_name',
        'branch_name',
        'account_name',
        'account_number',
        'ifsc'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
