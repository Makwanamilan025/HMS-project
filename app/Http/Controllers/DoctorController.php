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

        return view('doctor.index',compact('doctors'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departments = Department::all();

        return view('doctor.create', compact('departments'));
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

        $doctors = Doctor::create($input);

        return redirect()->route('doctors.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $departments = Department::all();
        $doctors = Doctor::findOrFail($id);
        return view('doctor.edit', compact('doctors', 'departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $doctors = Doctor::findOrFail($id);

        $input = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('Doctor_images', $fileName);
            $input['image'] = $fileName;
        }

        $doctors->update($input);

        return redirect()->route('doctors.index')->with('doctors', 'doctor Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
    
        Doctor::findOrFail($id)->delete();
        return redirect()->route('doctors.index');
    }
}
