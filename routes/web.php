<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Mahasiswa
Route::get('/mahasiswa', [App\Http\Controllers\MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/mahasiswa/{nim}', [App\Http\Controllers\MahasiswaController::class, 'detail']);
Route::get('/mahasiswa/{nim}/edit', [App\Http\Controllers\MahasiswaController::class, 'edit']);
Route::get('/mahasiswa/{nim}/hapus', [App\Http\Controllers\MahasiswaController::class, 'hapus']);
Route::post('/mahasiswa/simpan', [App\Http\Controllers\MahasiswaController::class, 'update']);
Route::post('/mahasiswa/insert', [App\Http\Controllers\MahasiswaController::class, 'insert']);

//Dosen
Route::get('/dosen', [App\Http\Controllers\DosenController::class, 'index'])->name('dosen');
Route::get('/dosen/{nidn}', [App\Http\Controllers\DosenController::class, 'detail']);
Route::get('/dosen/{nidn}/edit', [App\Http\Controllers\DosenController::class, 'edit']);
Route::get('/dosen/{nidn}/hapus', [App\Http\Controllers\DosenController::class, 'hapus']);
Route::post('/dosen/simpan', [App\Http\Controllers\DosenController::class, 'update']);
Route::post('/dosen/insert', [App\Http\Controllers\DosenController::class, 'insert']);

//Dosbing
Route::get('/dosenpembimbing', [App\Http\Controllers\DosenpembimbingController::class, 'index'])->name('dosenpembimbing');
Route::get('/dosenpembimbing/{nidn}', [App\Http\Controllers\DosenpembimbingController::class, 'detail']);
Route::get('/dosenpembimbing/{nidn}/edit', [App\Http\Controllers\DosenpembimbingController::class, 'edit']);
Route::get('/dosenpembimbing/{nidn}/hapus', [App\Http\Controllers\DosenpembimbingController::class, 'hapus']);
Route::post('/dosenpembimbing/simpan', [App\Http\Controllers\DosenpembimbingController::class, 'update']);
Route::post('/dosenpembimbing/insert', [App\Http\Controllers\DosenpembimbingController::class, 'insert']);

//Pengajuanproposal
Route::get('/pengajuanproposal', [App\Http\Controllers\PengajuanproposalController::class, 'index'])->name('pengajuanproposal');
Route::get('/pengajuanproposal/{id}', [App\Http\Controllers\PengajuanproposalController::class, 'detail']);
Route::get('/pengajuanproposal/{id}/edit', [App\Http\Controllers\PengajuanproposalController::class, 'edit']);
Route::get('/pengajuanproposal/{id}/hapus', [App\Http\Controllers\PengajuanproposalController::class, 'hapus']);
Route::post('/pengajuanproposal/simpan', [App\Http\Controllers\PengajuanproposalController::class, 'update']);
Route::post('/pengajuanproposal/insert', [App\Http\Controllers\PengajuanproposalController::class, 'insert']);

//Upload Project KP
Route::get('/uploadkp', [App\Http\Controllers\UploadkpController::class, 'index'])->name('uploadkp');
Route::get('/uploadkp/{id}', [App\Http\Controllers\UploadkpController::class, 'detail']);
Route::get('/uploadkp/{id}/edit', [App\Http\Controllers\UploadkpController::class, 'edit']);
Route::get('/uploadkp/{id}/hapus', [App\Http\Controllers\UploadkpController::class, 'hapus']);
Route::post('/uploadkp/simpan', [App\Http\Controllers\UploadkpController::class, 'update']);
Route::post('/uploadkp/insert', [App\Http\Controllers\UploadkpController::class, 'insert']);

//Bimbingan
Route::get('/bimbingan', [App\Http\Controllers\BimbinganController::class, 'index'])->name('bimbingan');
Route::get('/bimbingan/{id}', [App\Http\Controllers\BimbinganController::class, 'detail']);
Route::get('/bimbingan/{id}/edit', [App\Http\Controllers\BimbinganController::class, 'edit']);
Route::get('/bimbingan/{id}/hapus', [App\Http\Controllers\BimbinganController::class, 'hapus']);
Route::post('/bimbingan/simpan', [App\Http\Controllers\BimbinganController::class, 'update']);
Route::post('/bimbingan/insert', [App\Http\Controllers\BimbinganController::class, 'insert']);

//Mahasiswa Bimbingan
Route::get('/mahasiswabimbingan', [App\Http\Controllers\MahasiswabimbinganController::class, 'index'])->name('mahasiswabimbingan');
Route::get('/mahasiswabimbingan/{id}', [App\Http\Controllers\MahasiswabimbinganController::class, 'detail']);
Route::get('/mahasiswabimbingan/{id}/edit', [App\Http\Controllers\MahasiswabimbinganController::class, 'edit']);
Route::get('/mahasiswabimbingan/{id}/hapus', [App\Http\Controllers\MahasiswabimbinganController::class, 'hapus']);
Route::post('/mahasiswabimbingan/simpan', [App\Http\Controllers\MahasiswabimbinganController::class, 'update']);
Route::post('/mahasiswabimbingan/insert', [App\Http\Controllers\MahasiswabimbinganController::class, 'insert']);

//Form Bimbingan
Route::get('/formbimbingan', [App\Http\Controllers\FormbimbinganController::class, 'index'])->name('formbimbingan');
Route::get('/formbimbingan/{id}', [App\Http\Controllers\FormbimbinganController::class, 'detail']);
Route::get('/formbimbingan/{id}/edit', [App\Http\Controllers\FormbimbinganController::class, 'edit']);
Route::get('/formbimbingan/{id}/hapus', [App\Http\Controllers\FormbimbinganController::class, 'hapus']);
Route::post('/formbimbingan/simpan', [App\Http\Controllers\FormbimbinganController::class, 'update']);
Route::post('/formbimbingan/insert', [App\Http\Controllers\FormbimbinganController::class, 'insert']);


//Project KP Dosen
Route::get('/projectkpdosen', [App\Http\Controllers\ProjectkpdosenController::class, 'index'])->name('projectkpdosen');
Route::get('/projectkpdosen/{id}', [App\Http\Controllers\ProjectkpdosenController::class, 'detail']);
Route::get('/projectkpdosen/{id}/edit', [App\Http\Controllers\ProjectkpdosenController::class, 'edit']);
Route::get('/projectkpdosen/{id}/hapus', [App\Http\Controllers\ProjectkpdosenController::class, 'hapus']);
Route::post('/projectkpdosen/simpan', [App\Http\Controllers\ProjectkpdosenController::class, 'update']);
Route::post('/projectkpdosen/insert', [App\Http\Controllers\ProjectkpdosenController::class, 'insert']);

//Proposal
Route::get('/proposal',[App\Http\Controllers\ProposalController::class, 'index'])->name('proposal');
Route::get('/proposal/{id}', [App\Http\Controllers\ProposalController::class, 'detail']);
Route::post('/proposal/insert', [App\Http\Controllers\ProposalController::class, 'insert']);
Route::get('/proposal/{id}/edit', [App\Http\Controllers\ProposalController::class, 'edit']);
Route::get('/proposal/{id}/hapus', [App\Http\Controllers\ProposalController::class, 'hapus']);
Route::post('/proposal/simpan', [App\Http\Controllers\ProposalController::class, 'update']);

//Projectkp
Route::get('/projectkp', [App\Http\Controllers\ProjectkpController::class, 'index'])->name('projectkp');
Route::get('/projectkp/{id}', [App\Http\Controllers\ProjectkpController::class, 'detail']);
Route::get('/projectkp/{id}/edit', [App\Http\Controllers\ProjectkpController::class, 'edit']);
Route::get('/projectkp/{id}/hapus', [App\Http\Controllers\ProjectkpController::class, 'hapus']);
Route::post('/projectkp/insert', [App\Http\Controllers\ProjectkpController::class, 'insert']);
Route::post('/projectkp/simpan', [App\Http\Controllers\ProjectkpController::class, 'update']);

//Pengumumanppkp
Route::get('/pengumumanppkp', [App\Http\Controllers\PengumumanppkpController::class, 'index'])->name('pengumumanppkp');
Route::get('/pengumumanppkp/{nim}', [App\Http\Controllers\PengumumanppkpController::class, 'detail']);
Route::get('/pengumumanppkp/{nim}/edit', [App\Http\Controllers\PengumumanppkpController::class, 'edit']);
Route::get('/pengumumanppkp/{nim}/hapus', [App\Http\Controllers\PengumumanppkpController::class, 'hapus']);
Route::post('/pengumumanppkp/simpan', [App\Http\Controllers\PengumumanppkpController::class, 'update']);
Route::post('/pengumumanppkp/insert', [App\Http\Controllers\PengumumanppkpController::class, 'insert']);



Route::post('/postAspirasi', [App\Http\Controllers\DataAspirasiController::class, 'postAspirasi']);

Route::post('postMahasiswa', [App\Http\Controllers\MahasiswaController::class, 'postMahasiswa']);

Route::get('/hapusMahasiswa/{nim}', [App\Http\Controllers\MahasiswaController::class, 'hapus']);