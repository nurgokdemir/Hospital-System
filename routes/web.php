<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});


Route::get("doctors", function () {
    return view('doctors');
})->name('doctors');

Route::get('/contact', function () {
    return view('contact');
});

Route::prefix("admin")->name("admin.")->middleware(["auth"])->group(function () {

    Route::get("/dashboard",[DashboardController::class,"index"])->name("dashboard.index");
    Route::get("/doctor",[DoctorController::class,"index"])->name("doctor.index");
    Route::get("/doctor/create",[DoctorController::class,"create"])->name("doctor.create");
    Route::get("/doctor/profile/{id}",[DoctorController::class,"show"])->name("doctor.profile");
    Route::post("/doctor/store",[DoctorController::class,"store"])->name("doctor.store");
    Route::get("/doctor/edit/{id}",[DoctorController::class,"edit"])->name("doctor.edit");
    Route::post("/doctor/update/{id}",[DoctorController::class,"update"])->name("doctor.update");
    Route::get("/doctor/delete/{id}",[DoctorController::class,"destroy"])->name("doctor.destroy");
    Route::get("/patient",[ PatientController::class,"index"])->name("patient.index");

});

require __DIR__ . '/auth.php';
