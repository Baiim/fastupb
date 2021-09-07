<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IotController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LombaIotController;
use App\Http\Controllers\LombaFilmController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\LombaDesignController;
use App\Http\Controllers\Admin\DashboardController;

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

Route::get('/', [HomeController::class, 'index'])
->name('home');
Route::get('/form-film', [HomeController::class, 'form'])
->name('form-film');
Route::resource('mahasiswa', MahasiswaController::class);





// Route for Auth
Route::get('/login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::resource('/', HomeController::class);
Route::resource('form-film', FilmController::class);
Route::resource('form-ui', DesignController::class);
Route::resource('form-iot', IotController::class);
Route::resource('film', LombaFilmController::class);
Route::resource('design', LombaDesignController::class);
Route::resource('iot', LombaIotController::class);


// Route for Admin
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::resource('kegiatan', KegiatanController::class);





});

// Route for Kegiatan
Route::get('/lomba-film', [HomeController::class, 'film'])
->name('lomba-film');
Route::get('/lomba-iot', [HomeController::class, 'iot'])
->name('iot');
Route::get('/lomba-ui&ux', [HomeController::class, 'ui'])
->name('ui');
Route::get('/mobile-legend', [HomeController::class, 'moba'])
->name('ml');
Route::get('/pubg-mobile', [HomeController::class, 'pubg'])
->name('pubg');
Route::get('/bulutangkis', [HomeController::class, 'bultang'])
->name('bultang');
Route::get('/futsal', [HomeController::class, 'futsal'])
->name('futsal');
Route::get('/seminar-nasional', [HomeController::class, 'semnas'])
->name('semnas');
Route::get('/workshop', [HomeController::class, 'workshop'])
->name('workshop');
Route::get('/form', [HomeController::class, 'form'])
->name('form');
Route::get('/success', [HomeController::class, 'success'])
->name('success');

// Route Lomba
// Route::resource('lomba-film', LombaFilmController::class);

