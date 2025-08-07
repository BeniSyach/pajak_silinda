<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardPajakController;
use App\Http\Controllers\RealisasiPajakController;
use App\Http\Controllers\SloganController;
use App\Http\Controllers\TargetKecamatanController;
use App\Http\Controllers\TargetPerDesaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WpBaruController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    return redirect()->route('dashboard');
});


Route::get('/login', [AuthController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');


Route::get('/oracle-test', function () {
    $data = DB::connection('oracle')->select('SELECT * FROM DUAL');
    return response()->json($data);
});

Route::get('/dashboard', [DashboardPajakController::class, 'index'])->name('dashboard');
Route::get('/detail-pajak/{kelurahan}/{status}', [DashboardPajakController::class, 'detail'])->name('pajak.detail');


Route::get('/realisasi-pajak', [RealisasiPajakController::class, 'index'])->name('pbb.index');
Route::get('/pbb/history/{nop}', [RealisasiPajakController::class, 'history'])->name('pbb.history');
Route::get('/pbb/{nama_desa}', [RealisasiPajakController::class, 'perDesa'])->name('pbb.perdesa');

Route::get('/sop-bayar-pbb', function () {
    return view('sop-bayar-pajak');
})->name('sop.bayar.pbb');

Route::resource('target-kecamatan', TargetKecamatanController::class);
Route::resource('target-desa', TargetPerDesaController::class);
Route::resource('slogan', SloganController::class);

Route::resource('users', \App\Http\Controllers\UserController::class);

// Rute publik
Route::get('/wp/create', [WpBaruController::class, 'create'])->name('wp.create');
Route::post('/wp', [WpBaruController::class, 'store'])->name('wp.store');

// Rute admin
Route::middleware('auth')->group(function () {
    Route::get('/wp', [WpBaruController::class, 'index'])->name('wp.index');
    Route::get('/wp/{id}', [WpBaruController::class, 'show'])->name('wp.show');
    Route::get('/wp/{id}/edit', [WpBaruController::class, 'edit'])->name('wp.edit');
    Route::put('/wp/{id}', [WpBaruController::class, 'update'])->name('wp.update');
    Route::delete('/wp/{id}', [WpBaruController::class, 'destroy'])->name('wp.destroy');
});