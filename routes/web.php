<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Contectcontroller;
use App\Http\Controllers\contectcontroller as ControllersContectcontroller;
use App\Http\Controllers\registercontroller;
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
    return view('welcome');
})->name('welcome');



Route::get('register', [registercontroller::class, 'show'])->name('register.show');
Route::post('register', [registercontroller::class, 'register'])->name('register.perform');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


Route::get('/contect', [ContectController::class, 'show'])->name('contect.show');
Route::post('/contect', [ContectController::class, 'contect'])->name('contect.submit');


// Route::group(["middleware" => "auth", "prefix" => "admin"], function () {


// });
