<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\Bloodbank;
use App\Models\Department;
use App\Models\Patient;
use App\Models\User;


class DeshbordController extends Controller
{


    public function bloodbank()
    {
        $bloodbank = Bloodbank::all();

        return view('dashboard', compact('bloodbank'));
    }

    public function index()
    {

        $bloodbanks = Bloodbank::count();
        $appointments = Appointment::count();
        $Doctor = Doctor::count();
        $bloodbank = Bloodbank::count();
        $Patient = Patient::count();
        $department = Department::count();
        $user = User::count();

        return view('dashboard', [
            'appointments' => $appointments, 'bloodbank' => $bloodbank,'bloodbank' => $bloodbanks, 'Doctor' => $Doctor,
            'Patient' => $Patient, 'Department' => $department, 'User' => $user
        ]);
    }
}
