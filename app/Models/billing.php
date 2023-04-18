<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class billing extends Model
{
    use HasFactory;

    protected $table = 'billing';
    protected $guarded = ['id'];
    protected $fillable = [
        'patient_id',
        'doctor_id',
        'billing_date',
        'service_description',
        'amount',
    ];

    public function patient()
    {
        return $this->belongsTo(patient::class);
    }

    public function doctors()
    {
        return $this->belongsTo(doctor::class);
    }
}
