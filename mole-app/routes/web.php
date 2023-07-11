<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DifficultController;
use App\Http\Controllers\FavoritController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SpecialController;
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

// Home(landingpage)
Route::get('/', [HomeController::class, 'index']);
Route::get('/page', [HomeController::class, 'page']);



// For Dasboard
Route::get('/dasboard', function () {
    return view('dasboard/index');
});

// For User



// For Authentication
Route::get('/register', [AuthController::class, 'registerForm']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);



Route::group(['middleware' => ['auth', 'peran:admin']], function () {
    Route::resource('/users', AuthController::class);
    Route::resource('/heroes', HeroController::class);
    Route::resource('/difficulties', DifficultController::class);
    Route::resource('/roles', RoleController::class);
    Route::resource('/specialties', SpecialController::class);
    Route::resource('/favorits', FavoritController::class);
});