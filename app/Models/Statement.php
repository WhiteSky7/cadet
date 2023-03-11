<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Statement extends Model
{
    protected $table = 'statements';

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
