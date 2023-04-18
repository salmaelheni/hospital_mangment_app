<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ward extends Model
{
    use HasFactory;
    protected $table = 'ward';
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'type',
        'description',
        'beds',
        'patient_id',
        'department_id',
        'staff_id',
    ];

    public function departement()
    {
        return $this->hasOne(department::class);
    }

    public function patients()
    {
        return $this->hasMany(patient::class);
    }

    public function stafs()
    {
        return $this->hasMany(staff::class);
    }
}
