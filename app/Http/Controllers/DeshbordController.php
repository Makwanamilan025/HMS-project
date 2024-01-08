<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\bloodbank;

class DeshbordController extends Controller
{
    public function deshbord()
    {

        $doctors = Doctor::all();

        $doctors = Doctor::paginate(6);

        return view('dashboard', compact('doctors'));
    }

    public function bloodbank()
    {
        $bloodbank = bloodbank::all();

        return view('dashboard', compact('bloodbank'));
    }

    public function index()
    {

        $bloodbanks = bloodbank::paginate(7);

        return view('dashboard', ['bloodbanks' => $bloodbanks]);
    }
}
