<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
=======
//controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PaperController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e

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
<<<<<<< HEAD
=======

Route::get('/home', [HomeController::class, 'index'])->name('home');
Auth::routes();
Route::group(['middlewar' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('papers', PaperController::class);
});
>>>>>>> a04c7a109e7ec05a862865ae8ea1074626bbbf0e
