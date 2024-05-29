<?php

namespace App\Models;

use App\Enums\RoomStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;


class Room extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'type',
        'status',
        'description',
        'price',
    ];

    /**
     * Scope a query to only include available rooms.
     */
    public function scopeAvailable(Builder $query): void
    {
        $query->where('status', RoomStatus::Available);
    }
}
