<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backsite\DashboardController;
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
