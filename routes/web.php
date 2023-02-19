<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontsite\LandingController;
use App\Http\Controllers\Frontsite\AppointmentController;
use App\Http\Controllers\Frontsite\PaymentController;
use App\Models\Operational\Appointment;


//backsite
use App\Http\Controllers\Backsite\DashboardController;
use App\Http\Controllers\Backsite\SpecialistController;
use App\Http\Controllers\Backsite\TypeUserController;

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


// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => ['auth:sanctum','verified']], function () {

    //  appointment page routes
    Route::get('branch/filter', [AppointmentController::class, 'filter'] )->name('branch.filter');
    Route::resource('appointment', AppointmentController::class);
    // payment page routes
    Route::resource('payment', PaymentController::class);

});


Route::group(['prefix' => 'backsite', 'as' => 'backsite.', 'middleware' => ['auth:sanctum',
'verified']], function () {

    //return view ('dashboard');
    Route::resource('dashboard', DashboardController::class);

        // type user
    Route::resource('type_user', TypeUserController::class);

    // specialits
    Route::resource('specialist', SpecialistController::class);
});

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
