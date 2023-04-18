<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    use HasFactory;

    protected $table = 'department';
    protected $guarded = ['id'];
    protected $fillable = [
       'name',
       'description',
        'head_id',
    ];


    public function doctors()
    {
        return $this->hasMany(doctor::class);
    }

    public function wards()
    {
        return $this->hasMany(ward::class);
    }

    public function staffs()
    {
        return $this->hasMany(staff::class);
    }


}
