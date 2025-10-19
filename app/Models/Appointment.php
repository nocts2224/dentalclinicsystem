<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'dentist_id',
        'facility_id',
        'appointment_date',
        'status',
        'notes',
    ];

    protected $casts = [
        'appointment_date' => 'datetime',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function dentist()
    {
        return $this->belongsTo(Dentist::class);
    }

    public function facility()
    {
        return $this->belongsTo(Facility::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'appointment_service')->withTimestamps();
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }
}
