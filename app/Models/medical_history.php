<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medical_history extends Model
{
    use HasFactory;
    protected $table = 'medical_history';
    protected $guarded = ['id'];
    protected $fillable = [
        'patient_id',
        'diagnosis_date',
       'medical_condition',
       'treatment',
    ];

    public function patient()
    {
        return $this->belongsTo(patient::class);
    }
}
