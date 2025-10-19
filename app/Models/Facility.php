<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Facility extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'contact_number',
        'email',
        'open_hours',
    ];

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function dentists()
    {
        return $this->hasMany(Dentist::class);
    }
}
