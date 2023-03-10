<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthC;
use App\Http\Controllers\BukuC;
use App\Http\Controllers\UsersC;
use App\Http\Controllers\PeminjamanC;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/about', function(){
    return 'Indra Lesmana & Davanza Naufal Andika';
});

Route::apiResource('/buku', BukuC::class)->middleware(['auth:sanctum']);
Route::apiResource('/peminjaman', PeminjamanC::class)->middleware(['auth:sanctum']);
Route::apiResource('/users', UsersC::class);
Route::post('/login', [AuthC::class, 'login']);