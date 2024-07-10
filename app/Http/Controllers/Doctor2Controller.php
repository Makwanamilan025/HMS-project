<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class Doctor2Controller extends Controller
{
  public function doctor(){
    
 $data = Doctor::all();
dd($data);
 return view('welcomecomponents.doctor', ['data' => $data]);
  }

}
