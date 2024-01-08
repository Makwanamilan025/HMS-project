<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = department::paginate(8);

        // $departments = department::all();
        return view('department.index',['departments' => $departments]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

      $department =  department::create($input);

      return redirect()->route('department.index', compact('department'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department ,$id)
    {
        $departments = department::find($id);

        return view('department.edit',compact('departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department ,$id)
    {
        $department = department::find($id);

        $input = $request->all();

        $department->update($input);

        return redirect()->route('department.index')->with('department','department Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department ,$id)
    {
        department::findOrFail($id)->delete();
        return redirect()->route('department.index');
    }
}
