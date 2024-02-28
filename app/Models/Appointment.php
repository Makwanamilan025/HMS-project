<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';

    protected $fillable = [
        'name',
        'mobile',
        'address',
        'gender',
        'blad_grup',
        'bod',
        'department_id',
        'doctor_id',
        'date_time',
        'is_conform',
    ];

    protected $castes = [

        'is_conform' => 'boolean',
    ];


    public function department()
    {
        return $this->belongsTo(Department::class);
    }


    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
