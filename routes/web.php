<?php

use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BloodbankController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doctor2Controller;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\UserappointmentController;

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

//Route fore welcome page

  Route::view('/', 'welcome')->name('/welcome');
  Route::view('/doctors', 'welcomecomponents.doctor')->name('doctor');
  Route::view('/servies', 'welcomecomponents.servies')->name('servies');
  Route::view('/contect', 'welcomecomponents.contect')->name('contect');


//create pdf route
    Route::get('/GeneratePdf', [PdfController::class, 'generateAndStorePDF'])->name('pdfcreate');

//route fore states
    Route::group(['prefix' => 'status', 'as' => 'status.'], function () {
       Route::get('/', [StatusController::class, 'index'])->name('index');
       Route::get('/create', [StatusController::class, 'create'])->name('create');
    });

//Appointments Controller
    Route::group(['prefix' => 'user/appointments', 'as' => 'appointment.'], function () {
       Route::get('/', [UserappointmentController::class, 'index'])->name('index');
       Route::get('/create', [UserappointmentController::class, 'create'])->name('create');
       Route::post('/store', [UserappointmentController::class, 'store'])->name('store');
    });


Route::middleware('auth')->group(function () {

  //Route for user
    Route::get('/users', [UserController::class, 'index'])->name('user');

  //Route for deshbord
    Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
        Route::get('/', [DashbordController::class, 'index'])->name('index');
        Route::get('/bloodbank', [DashbordController::class, 'bloodbank'])->name('bloodbank');
    });

  //Route for doctor
    Route::group(['prefix' => 'doctors', 'as' => 'doctors.'], function () {
        Route::get('/', [DoctorController::class, 'index'])->name('index');
        Route::get('/create', [DoctorController::class, 'create'])->name('create');
        Route::post('/', [DoctorController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [DoctorController::class, 'edit'])->name('edit');
        Route::put('/{id}', [DoctorController::class, 'update'])->name('update');
        Route::get('/{id}', [DoctorController::class, 'destroy'])->name('destroy');
        Route::get('/send', [Doctor2Controller::class, 'send'])->name('send');
    });

  //Route for Department
    Route::group(['prefix' => 'departments', 'as' => 'departments.'], function () {
        Route::get('/', [DepartmentController::class, 'index'])->name('index');
        Route::get('/create', [DepartmentController::class, 'create'])->name('create');
        Route::post('/', [DepartmentController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [DepartmentController::class, 'edit'])->name('edit');
        Route::put('/{id}', [DepartmentController::class, 'update'])->name('update');
        Route::get('/{id}', [DepartmentController::class, 'destroy'])->name('destroy');
    });

  //Route for Appointment
    Route::group(['prefix' => 'appointments', 'as' => 'appointments.'], function () {
        Route::get('/', [AppointmentController::class, 'index'])->name('index');
        Route::get('/create', [AppointmentController::class, 'create'])->name('create');
        Route::post('/', [AppointmentController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [AppointmentController::class, 'edit'])->name('edit');
        Route::put('/{id}', [AppointmentController::class, 'update'])->name('update');
        Route::get('/{id}', [AppointmentController::class, 'destroy'])->name('destroy');
        Route::get('/{appointment}/confirm', [AppointmentController::class, 'confirm'])->name('confirm');
    });

  //Route for patients
    Route::group(['prefix' => 'patients', 'as' => 'patients.'], function () {
        Route::get('/', [PatientController::class, 'index'])->name('index');
        Route::get('/{patient}/confirm', [PatientController::class, 'confirm'])->name('confirm');
        Route::get('/{id}', [PatientController::class, 'destroy'])->name('destroy');
    });

  //Route for profile
    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
        Route::get('/edit', [ProfileController::class, 'edit'])->name('edit');
        Route::patch('/update', [ProfileController::class, 'update'])->name('update');
        Route::delete('/delete', [ProfileController::class, 'destroy'])->name('destroy');
    });

  //Route for blood bank
    Route::group(['prefix' => 'bloodbank', 'as' => 'bloodbank.'], function () {
        Route::get('/', [BloodbankController::class, 'index'])->name('index');
        Route::get('/create', [BloodbankController::class, 'create'])->name('create');
        Route::post('/', [BloodbankController::class, 'store'])->name('store');
        Route::get('/{id}', [BloodbankController::class, 'destroy'])->name('destroy');
    });
});

require __DIR__ . '/auth.php';
