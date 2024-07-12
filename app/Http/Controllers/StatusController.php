<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Appointment;
use App\Http\Controllers\Controller;
use function Laravel\Prompts\select;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('parson', 'appoiment')->latest()->first();

        $appointments = Appointment::latest()->first();

        return view('welcomecomponents.states', compact('users', 'appointments'));
    }

    public function dcount()
    {
        $appointments = Appointment::all();

        return view('dashboard', compact('appointments'));
    }
}
