<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PermissionController;

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
    return view('welcome');
});

Route::get('/login/{id}', [AuthController::class, 'loginWithId']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/profile', [UserController::class, 'profile']);

Route::get('login' , function() {
    return 'login đi m';
})->name('login');

Route::get('/roles', [PermissionController::class, 'Permission']);
