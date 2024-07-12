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


class DashbordController extends Controller
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
        $doctors = Doctor::count();
        $bloodbank = Bloodbank::count();
        $patients = Patient::count();
        $departments = Department::count();
        $users = User::count();

        return view('dashboard', compact('bloodbanks','appointments','doctors','bloodbank','patients','departments','users'));
    }
}
