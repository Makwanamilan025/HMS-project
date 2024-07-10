<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Bloodbank;
use Illuminate\Http\Request;

class BloodbankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $bloodbanks = bloodbank::latest()->paginate(8);

        $bloodbanks = Bloodbank::latest()->paginate(7);
        // $bloodbanks = bloodbank::all();

      return view('bloodbank.inde',compact('bloodbanks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

      return view('bloodbank.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $input = $request->all();

        Bloodbank::create($input);

        return redirect()->route('bloodbank.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {


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
        Bloodbank::findOrFail($id)->delete();
        return redirect()->route('bloodbank.index');
        // return view('bloodbank.inde');
    }
}
