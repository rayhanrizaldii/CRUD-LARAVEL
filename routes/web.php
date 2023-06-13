<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\PembelianController;

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


// Route Home
Route::get('/', [IndexController::class, 'Index'])->name('index');
Route::get('/index', [IndexController::class, 'Index'])->name('index');
Route::get('/addMed', [IndexController::class, 'addMed'])->name('addMed');
Route::get('/listMed', [IndexController::class, 'listMed'])->name('listMed');
Route::get('/addBuy', [IndexController::class, 'addBuy'])->name('addBuy');
Route::get('/listBuy', [IndexController::class, 'listBuy'])->name('listBuy');

// Route Obat
Route::get('/adminListObat', [ObatController::class, 'adminListObat']);
Route::get('/adminEditObat/{id}', [ObatController::class, 'adminEditObat']);
Route::get('/adminAddObat', [ObatController::class, 'adminAddObat']);

// Function Obat
Route::POST('/AddObat', [ObatController::class, 'AddAdminObat']);
Route::post('/EditObat/{id}', [ObatController::class, 'EditAdminObat']);
Route::get('/DeleteObat/{id}', [ObatController::class, 'DeleteAdminObat']);

// Route Pembelian
Route::get('/adminListBuy', [PembelianController::class, 'adminListBuy']);
Route::get('/adminEditBuy/{id}', [PembelianController::class, 'adminEditBuy']);
Route::get('/adminAddBuy', [PembelianController::class, 'adminAddBuy']);

// Function Pembelian
Route::POST('/AddBuy', [PembelianController::class, 'AddAdminBuy']);
Route::post('/EditBuy/{id}', [PembelianController::class, 'EditAdminBuy']);
Route::get('/DeleteBuy/{id}', [PembelianController::class, 'DeleteAdminBuy']);
