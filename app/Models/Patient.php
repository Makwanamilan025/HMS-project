<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $table = 'patients';


    protected $fillable = [
        'name',
        'mobile',
        'gender',
        'blad_grup',
        'address',
        'bod',
        'states',
        'confirmed_at'
    ];
    protected $castes = [
        'states' => 'boolean',

    ];

}
