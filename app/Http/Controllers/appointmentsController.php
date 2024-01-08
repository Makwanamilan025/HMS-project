<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\user;
use App\Models\Appointment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class appointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('welcomecomponents.appointment');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $department = Department::all();

        $doctor = Doctor::all();

        $input['parson'] = 'user';

        return view('welcomecomponents.appointment',compact('department','doctor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $input['is_conform'] = false;


        $appointment = Appointment::create($input);

        $user = user::create([
            'email' => $input['email'],
            'name' => $input['name'],
            'parson' => 'appoiment',
            'password' => Hash::make($input['password']),

        ]);

        return redirect()->route('user.appointment.create');
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
