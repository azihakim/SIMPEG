<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PenugasanController;
use App\Http\Controllers\PhkController;
use App\Http\Controllers\PromosiController;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\RewardandPunishmentController;
use App\Models\Absensi;
use App\Models\RewardandPunishment;
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
    return view('master');
});

Route::get('/dashboard-karyawan', function () {
    return view('karyawan.dashboard');
});


Route::resource('karyawan', KaryawanController::class);
Route::get('/tambah-karyawan', function () {
    return view('karyawan.tambah');
});
Route::resource('absensi', AbsensiController::class);

Route::resource('phk', PhkController::class);
Route::get('/tambah-phk', function () {
    return view('phk.tambah');
});

Route::resource('pengajuan', PengajuanController::class);
Route::get('/tambah-pengajuan', function () {
    return view('pengajuan.tambah');
});

Route::resource('reward-punishment', RewardandPunishmentController::class);
Route::get('/tambah-RewardandPunishment', function () {
    return view('RewardandPunishment.tambah');
});

Route::resource('penugasan', PenugasanController::class);
Route::get('/tambah-penugasan', function () {
    return view('penugasan.tambah');
});

Route::resource('promosi', PromosiController::class);
Route::get('/tambah-promosi', function () {
    return view('promosi.tambah');
});

Route::resource('data-gaji', GajiController::class);
Route::get('/edit-gaji', function () {
    return view('dataGaji.tambah');
});

Route::resource('recruitment', RecruitmentController::class);
Route::get('/regist-calonkaryawan', function () {
    return view('recruitment.regist');
});
Route::get('/pengajuan-calonkaryawan', function () {
    return view('dataGaji.tambah');
});
Route::get('/login', function () {
    return view('login');
});


