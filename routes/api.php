<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Perwalian;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/dosenpembimbing', function () {
    /*
    * return berupa list mahasiswa yang menjadi bimbingan dosen
    */
    // 1234 adalah nidn dosen
    return Perwalian::where('dosen_nidn', 1234)->with('Mahasiswa')->get();
});
