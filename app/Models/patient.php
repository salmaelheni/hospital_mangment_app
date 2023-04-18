<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;
    protected $table = 'lab_result';
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'address',
        'phone',
        'gender',
       'birth_date',
        'email',
        'patient_insurance',
    ];

    public function ward()
    {
        return $this->belongsTo(ward::class);
    }

    public function appointments()
    {
        return $this->hasMany(appointment::class);
    }

    public function lab_results()
    {
        return $this->hasMany(lab_result::class);
    }

    public function billings()
    {
        return $this->hasMany(billing::class);
    }

    public function medical_historys()
    {
        return $this->hasMany(medical_history::class);
    }
}
