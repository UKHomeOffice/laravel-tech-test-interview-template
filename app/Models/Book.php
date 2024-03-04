<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    // Book will always contain a 'user' object though it will
    // be null by default.
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class)->withDefault();
    }

}
