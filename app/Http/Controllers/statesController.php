<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Appointment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointments;

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
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = user::all();

    }

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
}
