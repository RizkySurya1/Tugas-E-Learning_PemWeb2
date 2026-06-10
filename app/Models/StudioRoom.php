<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudioRoom extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'capacity', 'equipment', 'rate_per_hour', 'description'];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
