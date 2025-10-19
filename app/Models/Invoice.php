<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointment_id',
        'total_amount',
        'payment_status',
        'issued_date',
        'payment_date',
    ];

    protected $casts = [
        'issued_date' => 'date',
        'payment_date' => 'date',
    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }

    public function patient()
    {
        // Convenient shortcut: go through the appointment
        return $this->hasOneThrough(Patient::class, Appointment::class);
    }
}
