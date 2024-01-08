<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class Doctor2Controller extends Controller
{
  public function doctor(){
    // $data = Doctor::paginate(4);
 $data = Doctor::all();

 return view('welcomecomponents.doctor', ['data' => $data]);
  }

}
