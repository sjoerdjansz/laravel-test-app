<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int|null $user_id
 * @property string $type
 * @property \Illuminate\Support\Carbon $date
 * @property string $start_time
 * @property string|null $end_time
 * @property int|null $duration_minutes
 * @property string|null $notes
 * @property array|null $metadata
 * @property-read \App\Models\User|null $user
 */
class Event extends Model
{
    protected $fillable = [
        'user_id',
        'type',
        'date',
        'start_time',
        'end_time',
        'duration_minutes',
        'notes',
        'metadata',
    ];

    protected $casts = [
        'date' => 'date',
        'metadata' => 'array',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
