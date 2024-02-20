<?php

use App\Models\Absen;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AbsenController; 
use App\Http\Controllers\GalleryController; 
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/Dashboard/Admin/allData', [StudentController::class, 'index'])->name('data.all');
Route::get('/Dashboard/Admin/Create/FormData', [StudentController::class, 'create'])->name('data.create');
Route::post('/Dashboard/Admin/Store/TambahData', [StudentController::class, 'store'])->name('data.store');

Route::get('/Dashboard/Admin/Edit/AllData', [AbsenController::class, 'edit'])->name('data.edit');
Route::put('/Dashboard/Admin/Update/AllData', [AbsenController::class, 'update'])->name('data.update');

Route::get('/Dashboard/Admin/Gallery/AllData', [GalleryController::class, 'index'])->name('data.gallery');