<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PasienController;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\DataController;




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

Route::get('/', function () {
    //return view('welcome');
    //return view('obat');
    return view('dashboard.dashboard');
});

// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->name('dashboard');

//Obat
Route::get('/obat', [ObatController::class, 'getallobat'])->name('tampilobat'); // Read
Route::get('/obat/tambah', function () {return view('obat.tambah');})->name('tambahobat'); // Create-Form
Route::post('/obat', [ObatController::class, 'saveobat'])->name('saveobat'); // Save
Route::get('/obat/{id}', [ObatController::class, 'editobat'])->name('editobat'); // Edit-Form
Route::put('/obat/{id}', [ObatController::class, 'updateobat'])->name('updateobat'); // Update
Route::delete('/obat/{id}', [ObatController::class, 'deleteobat'])->name('deleteobat'); // Delete

Route::get('/pasien', [PasienController::class, 'getallpasien'])->name('tampilpasien'); // Read
Route::get('/pasien/tambah', function () {return view('pasien.tambah');})->name('tambahpasien'); // Create-Form
Route::post('/pasien', [PasienController::class, 'savepasien'])->name('savepasien'); // Save
Route::get('/pasien/{id}', [PasienController::class, 'editpasien'])->name('editpasien'); // Edit-Form
Route::put('/pasien/{id}', [PasienController::class, 'updatepasien'])->name('updatepasien'); // Update
Route::delete('/pasien/{id}', [PasienController::class, 'deletepasien'])->name('deletepasien'); // Delete


