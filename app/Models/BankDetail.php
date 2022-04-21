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
        'name',
        'account_number',
        'ifsc',
        'cif',
        'primary'
    ];

    protected $casts = [
        'primary' => 'boolean'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
