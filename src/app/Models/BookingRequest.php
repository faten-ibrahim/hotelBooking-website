<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class BookingRequest extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'status',
        'user_id',
        'room_id',
    ];

    /**
     * User
     *
     * @return BelongsTo
     */
    public function user():BelongsTo
    {
       return $this->belongsTo(User::class);
    }

    /**
     * room
     *
     * @return HasOne
     */
    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }
}
