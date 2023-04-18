<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    use HasFactory;
    protected $table = 'doctor';
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'phone',
        'email',
        'specialty',
       'department_id',
    ];

    public function appointments()
    {
        return $this->hasMany(appointment::class);
    }

    public function billings()
    {
        return $this->hasMany(billing::class);
    }
}
