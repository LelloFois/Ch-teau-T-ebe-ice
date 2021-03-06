<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    protected $fillable = [
        'name',
        'lastname', 
        'email',
        'password', 
        'phone_number', 
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function bookings()
    {
        return $this->belongsToMany(Booking::class);
    }

    public function message()
    {
        return $this->hasOne(Message::class);
    }

    public function event()
    {
        return $this->hasOne(Event::class);
    }
}
