<?php

use App\Http\Controllers\SiswaController;
use App\Models\Siswa;
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

Route::get('/', function () {
    return view('home',['siswa'=>Siswa::all(),'l'=>Siswa::where('jenis_kelamin','l')->count(),'p'=>Siswa::where('jenis_kelamin','p')->count(),]);
});
Route::resource('/siswa', SiswaController::class);
