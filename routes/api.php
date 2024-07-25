<?php

use App\Http\Controllers\apicont;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/suma/{num1}/{num2}', [apicont::class, 'suma']);
Route::get('/multiplicar/{num1}/{num2}', [apicont::class, 'multiplicar']);