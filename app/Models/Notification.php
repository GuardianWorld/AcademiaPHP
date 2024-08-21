<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_email',
        'description',
        'user_id',
        'read',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
