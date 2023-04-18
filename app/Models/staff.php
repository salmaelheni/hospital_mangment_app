<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    use HasFactory;
    protected $table = 'staff';
    protected $guarded = ['id'];
    protected $fillable = [
        'name',
        'phone',
        'email',
        'role',
        'department_id',
    ];

    public function departement()
    {
        return $this->belongsTo(department::class);
    }

    public function wards()
    {
        return $this->belongsToMany(ward::class);
    }
}
