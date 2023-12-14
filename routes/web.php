<?php

use App\Http\Controllers\RiwayatController;
use App\Models\riwayat;
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
// routes/web.php

Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat.index');
Route::get('/riwayat/data', [RiwayatController::class, 'getData'])->name('riwayat.data');
Route::get('/riwayat/{id}/edit', [RiwayatController::class, 'edit'])->name('riwayat.edit');
Route::put('/riwayat/update', [RiwayatController::class, 'update'])->name('riwayat.update');
Route::post('/riwayat', [RiwayatController::class, 'store'])->name('riwayat.store');
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
