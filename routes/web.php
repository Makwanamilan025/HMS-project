<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DeshbordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\appointmentsController;
use App\Http\Controllers\BloodbankController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doctor2Controller;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\statesController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

//Route fore welcome page

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/doctor', function () {
    return view('welcomecomponents.doctor');
})->name('doctor');

Route::get('/doctor', [Doctor2Controller::class, 'doctor'])->name('doctor');

Route::get('/servies', function () {
    return view('welcomecomponents.servies');
})->name('servies');


Route::get('/contect', function () {
    return view('welcomecomponents.contect');
})->name('contect');

//create pdf route

Route::get('/generate-mpdf',[PDFController::class,'generatePDF'])->name('mpdf');

//route fore states

Route::get('/states', [statesController::class, 'index'])->name('states');
// Route::get('/states/pdf', [statesController::class, 'generatePDF'])->name('states');
Route::get('/create', [statesController::class, 'create'])->name('/states');


//Appointments Controller

Route::group(['prefix' => 'user/appointment', 'as' => 'user.appointment.'], function () {
    Route::get('/', [appointmentsController::class, 'index'])->name('index');
    Route::get('/create', [appointmentsController::class, 'create'])->name('create');
    Route::post('/store', [appointmentsController::class, 'store'])->name('store');
});

Route::get('/login', function () {
    return view('welcomecomponents.login');
})->name('login');


Route::middleware('auth')->group(function () {

    // route for deshbord
    Route::get('/deshbord', [DeshbordController::class, 'bloodbank'])->name('bloodbank');
    Route::get('/deshbord', [DeshbordController::class, 'index'])->name('deshbord');


    //Route for user
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/admin', [UserController::class, 'adminprofile'])->name('admin.index');

    //Route for doctor
    Route::group(['prefix' => 'doctors', 'as' => 'doctor.'], function () {
        Route::get('/', [DoctorController::class, 'index'])->name('index');
        Route::get('/create', [DoctorController::class, 'create'])->name('create');
        Route::post('/store', [DoctorController::class, 'store'])->name('store');
        Route::get('edit/{id}', [DoctorController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [DoctorController::class, 'update'])->name('update');
        Route::get('delete/{id}', [DoctorController::class, 'destroy'])->name('destroy');
        Route::get('/send', [Doctor2Controller::class, 'send'])->name('send');
    });

    //Route for Department
    Route::group(['prefix' => 'departments', 'as' => 'department.'], function () {
        Route::get('/', [DepartmentController::class, 'index'])->name('index');
        Route::get('/create', [DepartmentController::class, 'create'])->name('create');
        Route::post('/store', [DepartmentController::class, 'store'])->name('store');
        Route::get('edit/{id}', [DepartmentController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [DepartmentController::class, 'update'])->name('update');
        Route::get('delete/{id}', [DepartmentController::class, 'destroy'])->name('destroy');
    });

    //Route for Appointment
    Route::group(['prefix' => 'appointments', 'as' => 'appointment.'], function () {
        Route::get('/', [AppointmentController::class, 'index'])->name('index');
        Route::get('/create', [AppointmentController::class, 'create'])->name('create');
        Route::get('/{appointment}/confirm', [AppointmentController::class, 'confirm'])->name('confirm');
        Route::post('/store', [AppointmentController::class, 'store'])->name('store');
        Route::get('edit/{id}', [AppointmentController::class, 'edit'])->name('edit');
        Route::put('update/{id}', [AppointmentController::class, 'update'])->name('update');
        Route::get('delete/{id}', [AppointmentController::class, 'destroy'])->name('destroy');
    });

    // Route for patients
    Route::group(['prifix' => 'patients', 'as' => 'patient.'], function () {
        Route::get('/', [PatientController::class, 'index'])->name('index');
        Route::get('/{patient}/confirm', [PatientController::class, 'confirm'])->name('confirm');
        Route::get('patient/{id}', [PatientController::class, 'destroy'])->name('destroy');
        // Route::get('delete/{id}', [PatientController::class, 'destroy'])->name('destroy');
    });

    //Route for profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


//Route for blood bank

Route::get('/boold/donor', [BloodbankController::class, 'index'])->name('bloodbank.index');
Route::get('/create', [BloodbankController::class, 'create'])->name('bloodbank.create');
Route::post('/donors', [BloodbankController::class, 'store'])->name('bloodbank.store');
Route::get('delete/{id}', [BloodbankController::class, 'destroy'])->name('bloodbank.destroy');
