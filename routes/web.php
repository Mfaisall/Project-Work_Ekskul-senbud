<?php

use App\Models\Absen;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AbsenController; 
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\RombelController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Models\room;
// use App\Models\Ekskul;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'index'])->name('login');
Route::post('/auth', [UserController::class, 'auth'])->name('auth');

Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal');
Route::post('/storeJadwal', [JadwalController::class, 'store'])->name('store.jadwal');

Route::get('/createRuangan', [RoomController::class, 'create'])->name('create.room');
Route::post('/storeRuangan', [RoomController::class, 'store'])->name('store.room');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/allData', [StudentController::class, 'index'])->name('data.all');
Route::get('/Create', [StudentController::class, 'create'])->name('data.create');
Route::post('/Store/TambahData', [StudentController::class, 'store'])->name('data.store');

Route::get('/edit/AllData', [AbsenController::class, 'edit'])->name('data.edit');
Route::put('/Update/AllData', [AbsenController::class, 'update'])->name('data.update');

Route::get('/admin/Gallery/AllData', [GalleryController::class, 'index'])->name('data.gallery');
Route::post('/Admin/Gallery/Store', [GalleryController::class, 'store'])->name('data.gallery.store');

Route::get('/rayon/Create', [RayonController::class, 'create'])->name('data.rayon.create');
Route::post('/Rayon/Store', [RayonController::class, 'store'])->name('data.rayon.store');

Route::get('/rombel/Create', [RombelController::class, 'create'])->name('data.rombel.create');
Route::post('/Rombel/Store', [RombelController::class, 'store'])->name('data.rombel.store');

Route::get('/ekskul/Create', [EkskulController::class, 'create'])->name('data.ekskul.create');
Route::post('/Ekskul/Store', [EkskulController::class, 'store'])->name('data.ekskul.store');

Route::get('/User/Create', [UserController::class, 'create'])->name('create-user');
Route::post('/User/store', [UserController::class, 'store'])->name('store-user');
