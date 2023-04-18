<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    use HasFactory;

    protected $table = 'appointment';
    protected $guarded = ['id'];
    protected $fillable = [
        'patient_id',
        'doctor_id',
        'appointment_date',
        'notes',
    ];


    public function doctor()
    {
        return $this->belongsTo(doctor::class, );
    }

    public function patient()
    {
        return $this->belongsTo(patient::class, );
    }
}
