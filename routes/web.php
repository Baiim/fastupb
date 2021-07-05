<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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
Route::get('/form', [HomeController::class, 'form'])
->name('form');



// Route for Auth
Route::get('/login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Route for Admin
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Route for Kegiatan
Route::get('/film', [HomeController::class, 'film'])
->name('film');
Route::get('/cerdas-cermat', [HomeController::class, 'cerdas'])
->name('cerdas');
Route::get('/lomba-iot', [HomeController::class, 'iot'])
->name('iot');
Route::get('/lomba-ui&ux', [HomeController::class, 'ui'])
->name('ui');
Route::get('/esport-competition', [HomeController::class, 'moba'])
->name('moba');

