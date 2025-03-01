<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @mixin IdeHelperRoomType
 */
final class RoomType extends Model
{
    protected $fillable = [
        'code',
        'name',
        'description',
    ];

    /**
     * @return HasMany<Room, covariant RoomType>
     */
    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class);
    }
}
