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
        $departments = Department::paginate(8);

        return view('Department.index',compact('departments'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Department.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

      $departments =  Department::create($input);

      return redirect()->route('departments.index', compact('departments'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Department $department ,$id)
    {
        $departments = Department::find($id);

        return view('Department.edit',compact('departments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department ,$id)
    {
        $departments = Department::find($id);

        $input = $request->all();

        $departments->update($input);

        return redirect()->route('departments.index')->with('departments','department Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Department $department ,$id)
    {
        Department::findOrFail($id)->delete();
        return redirect()->route('departments.index');
    }
}
