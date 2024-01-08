<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\Appointment;
use App\Models\Patient;
use Carbon\Carbon;
use Illuminate\Http\Request;


class AppointmentController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $appointments = Appointment::all();

        $appointments = Appointment::paginate(8);

        return view('Appointment.index',['appointments' => $appointments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $department = Department::all();

        $doctor = Doctor::all();

        return view('Appointment.creat',compact('department','doctor'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request )
    {
        $input = $request->all();
        $input['is_conform'] = false;

       $appointment = Appointment::create($input);

        return redirect()->route('appointment.index');
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
        $departments = Department::all();

        $doctors = Doctor::all();

        $appointments = appointment::find($id);

        return view('Appointment.edit',compact('appointments','departments','doctors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Appointment $appointment, $id)
    {

        $doctor = doctor::find($id);

        $departments = Department::find($id);

      $appointment = Appointment::find($id);

        $input = $request->all();

          $appointment->update($input);

        return redirect()->route('appointment.index')->with('appointment','appointment Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        appointment::findOrFail($id)->delete();
        return redirect()->route('appointment.index');
    }

    public function confirm(Request $request, Appointment $appointment)
    {
        $appointment->is_conform = true;
        $appointment->save();

        patient::create([
            'name' => $appointment->name,
            'mobile' => $appointment->mobile,
            'gender' => $appointment->gender,
            'blad_grup' => $appointment->blad_grup,
            'address' => $appointment->address,
            'bod' => $appointment->bod,
            'confirmed_at' => Carbon::now(),
        ]);

        return redirect()->back();
    }

}
