<?php

namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\Doctor;
use App\Models\User;
use App\Models\Appointment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserappointmentController extends Controller
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
        
        $departments = Department::all();
        $doctors = Doctor::all();

        $input['parson'] = 'user';

        return view('welcomecomponents.appointment',compact('departments','doctors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'department_id' => 'required|exists:departments,id',
            'doctor_id' => 'required|exists:doctors,id',
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'mobile' => 'required|string|regex:/^\+?[0-9]{10,20}$/',
            'gender' => 'required|in:male,female',
            'address' => 'required|string|max:255',
            'blad_grup' => 'required|in:A+,A-,B+,B-,AB+,AB-,O+,O-',
            'bod' => 'required|date',
            'date_time' => 'required|date_format:Y-m-d H:i:s',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'department_id.required' => 'The department field is required.',
            'email.unique' => 'The email has already been taken.',
            'mobile.regex' => 'The mobile number format is invalid.',
            'doctor_id.required' => 'The doctor field is required.',
            'name.required' => 'The name field is required.',
            'gender.required' => 'The gender field is required.',
            'address.required' => 'The address field is required.',
            'blad_grup.required' => 'The blood group field is required.',
            'bod.required' => 'The birth date field is required.',
            'date_time.required' => 'The date and time field is required.',
            'password.required' => 'The password field is required.',
            
        ]);

        $input = $request->all();
        $input['is_conform'] = false;


        $appointment = Appointment::create($input);

        $user = user::create([
            'email' => $input['email'],
            'name' => $input['name'],
            'parson' => 'appoiment',
            'password' => Hash::make($input['password']),

        ]);

        return redirect()->route('status.index');
    }

}
