<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'studio_room_id', 'booking_date', 'start_time', 'end_time', 'status', 'total_price'];

    protected $casts = [
        'booking_date' => 'date',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function studioRoom()
    {
        return $this->belongsTo(StudioRoom::class);
    }
}
