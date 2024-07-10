<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Department;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PDF; // Import DomPDF Facade

class PdfController extends Controller
{
    public function generateAndStorePDF()
    {

        $appointments = Appointment::all();

        $pdf = PDF::loadView('pdf.document',compact('appointments'));

        $filename = 'document_' . time() . '.pdf';

        $path = public_path("pdf/$filename");
        
        $pdf->save($path);
        
        return $pdf->download($filename);
    }
}
