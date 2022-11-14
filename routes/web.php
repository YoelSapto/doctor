<?php

use App\Http\Controllers\Backsite\ConfigPaymentController;
use App\Http\Controllers\Backsite\ConsultationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backsite\DashboardController;
use App\Http\Controllers\Backsite\DoctorController;
use App\Http\Controllers\Backsite\HospitalPatientController;
use App\Http\Controllers\Backsite\PermissionController;
use App\Http\Controllers\Backsite\RoleController;
use App\Http\Controllers\Backsite\SpecialistController;
use App\Http\Controllers\Backsite\TypeUserController;
use App\Http\Controllers\Fronsite\LandingController;
use App\Http\Controllers\Fronsite\PaymentController;
use App\Http\Controllers\Fronsite\AppointmentController;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/', LandingController::class);
// prefix('admin/dashboard')->namespace('Admin')
Route::group(['prefix' => 'backsite', 'as' => 'backsite.', 'middleware' => ['auth:sanctum', 'verified']], function () {
    Route::resource('dashboard', DashboardController::class);
    Route::resource('typeuser', TypeUserController::class);
    // permission
    Route::resource('permission', PermissionController::class);
    // role
    Route::resource('role', RoleController::class);
    Route::resource('specialist', SpecialistController::class);
    Route::resource('config_payment', ConfigPaymentController::class);
    Route::resource('consultation', ConsultationController::class);
    Route::resource('doctor', DoctorController::class);
    Route::resource('hospital_patient', HospitalPatientController::class);
    // Route::resource('hospital_patient', HospitalPatientController::class);
});


Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::resource('appointment', AppointmentController::class);
    Route::resource('payment', PaymentController::class);
});



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
