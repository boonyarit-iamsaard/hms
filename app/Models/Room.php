<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @mixin IdeHelperRoom
 */
final class Room extends Model
{
    protected $fillable = [
        'name',
        'room_type_id',
        'room_type_name',
        'room_type_code',
    ];

    /**
     * @return BelongsTo<RoomType, covariant Room>
     */
    public function roomType(): BelongsTo
    {
        return $this->belongsTo(RoomType::class);
    }
}
