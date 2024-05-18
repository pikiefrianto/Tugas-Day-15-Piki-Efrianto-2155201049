<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\CreateController;


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

Route::get('/master', function () {
    return view('/layouts.master');
});

Route::get('/', function () {
    return view('/home');
});
Route::post('/welcome_', [AuthController::class, 'welcome_'])->name('welcome_');

Route::get('/register', function () {
    return view('register');
});

Route::get('/getdata-users',[UsersController::class, 'Users']);
Route::get('/cast',[CastController::class, 'index']);
Route::get('/cast/create',[CastController::class, 'create']);
Route::post('/cast/',[CastController::class, 'store']);
Route::get('/cast/{id}', [CastController::class, 'show']);
Route::get('/cast', [CastController::class, 'index'])->name('cast.index');
Route::get('/cast/{id}/edit', [CastController::class, 'edit']);
Route::put('/cast/{id}', [CastController::class, 'update']);
Route::delete('/cast/{id}', [CastController::class, 'destroy']);
