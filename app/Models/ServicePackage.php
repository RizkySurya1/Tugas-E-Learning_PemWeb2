<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServicePackage extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price', 'duration_hours', 'includes'];

    public function bookings()
    {
        return $this->belongsToMany(Booking::class);
    }
}
