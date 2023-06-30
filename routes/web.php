<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\RiwayatPekerjaanController;
use App\Http\Controllers\RiwayatPelatihanController;

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



//biodata
Route::get('/form-biodata', [FormController::class, 'Form'])->name('user.form');
Route::post('/biodata-store', [FormController::class, 'BiodataStore'])->name('biodata.store');

//education
Route::get('/form-education', [EducationController::class, 'FormEducation'])->name('user.education');
Route::post('/education-store', [EducationController::class, 'EducationStore'])->name('education.store');

//riwayat pelatihan
Route::get('/form-riwayat-pelatihan', [RiwayatPelatihanController::class, 'FormRiwayatPelatihan'])->name('user.riwayat_pelatihan');
Route::post('/riwayatpelatihan-store', [RiwayatPelatihanController::class, 'RiwayatPelatihanStore'])->name('riwayat_pelatihan.store');

//riwayat pekerjaan
Route::get('/form-riwayat-pekerjaan', [RiwayatPekerjaanController::class, 'FormRiwayatPekerjaan'])->name('user.riwayat_pekerjaan');
Route::post('/riwayatpekerjaan-store', [RiwayatPekerjaanController::class, 'RiwayatPekerjaanStore'])->name('riwayat_pekerjaan.store');