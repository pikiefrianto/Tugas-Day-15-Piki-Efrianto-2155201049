<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastController;

Route::get('/', function () {
    return view('layouts.master');
});


Route::get('/cast', [CastController::class, 'tampil']);