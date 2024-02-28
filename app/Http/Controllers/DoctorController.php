<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Http\Requests\DoctorRequest;
use App\Models\Department;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $doctors = Doctor::paginate(8);


        return view('doctor.index', ['doctors' => $doctors]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();

        return view('doctor.create', ['departments' => $departments]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DoctorRequest $request)
    {

        $input = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('Doctor_images', $fileName);
            $input['image'] = $fileName;
        }

        $doctors =  Doctor::create($input);

        return redirect()->route('doctor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(DoctorRequest $doctar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $departments = Department::all();
        $doctor = doctor::find($id);
        return view('doctor.edit', compact('doctor', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $doctor = doctor::find($id);

        $input = $request->all();


        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('Doctor_images', $fileName);
            $input['image'] = $fileName;
        }


        $doctor->update($input);

        return redirect()->route('doctor.index')->with('doctor', 'doctor Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    
        Doctor::findOrFail($id)->delete();
        return redirect()->route('doctor.index');
    }
}
