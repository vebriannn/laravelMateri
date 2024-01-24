<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\daftarController;

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

Route::get('/stematel', function () {
    return 'selamat datang di web stematel';
});

Route::get('/stematel/user/{nama}', function ($nama) {
    return view('index', ['namaSiswa' => $nama]);
});

Route::get('/stematel/form', function () {
    return view('kirimData');
});


Route::post('/stematel/hasil', [daftarController::class, 'index'])->name('hasil.data');
