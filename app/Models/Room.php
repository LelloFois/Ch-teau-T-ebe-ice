<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->belongsToMany(Image::class);
    }

    public function booking()
    {
        return $this->belongsToMany(Booking::class, 'booking_id');
    }


}
