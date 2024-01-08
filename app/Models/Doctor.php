<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'department_id',
        'image',
    ];

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }
}
