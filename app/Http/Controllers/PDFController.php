<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Mpdf\Mpdf;


class PDFController extends Controller
{
    public function generatePDF()
    {
        $users = User::where('parson','appoiment')->latest()->first();
        
        $appointments = appointment::latest()->first();
        // dd($appointments);
        return view('welcomecomponents.pdf',['users' => $users , 'appointments' => $appointments ]);
    }
}
