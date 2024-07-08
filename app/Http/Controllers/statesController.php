<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Appointment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use function Laravel\Prompts\select;

class statesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('parson','appoiment')->latest()->first();

       $appointments = appointment::latest()->first();

         return view('welcomecomponents.states',['users' => $users , 'appointments' => $appointments ]);
    }

    /**
     * Show the form for generatePDF a new PDF.
     */
    // public function generatePDF()
    // {
    //     $users = User::where('parson','appoiment')->latest()->first();
    //     $appointments = appointment::latest()->first();
    //     dd(  $appointments);

    //     return view('welcomecomponents.stutes',['users' => $users , 'appointments' => $appointments ]);
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function dcount(){

       

      return view('dashboard', compact('appointments'));
    }
}
