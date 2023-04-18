<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lab_result extends Model
{
    use HasFactory;
    protected $table = 'lab_result';
    protected $guarded = ['id'];
    protected $fillable = [
        'patient_id',
        'test_date',
        'test_type',
        'test_result',
    ];

    public function patient()
    {
        return $this->belongsTo(patient::class);
    }
}
