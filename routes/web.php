<?php

use App\Http\Controllers\AccountmanagerController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IntermediairsController;

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
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {  return view('dashboard'); })->name('dashboard');

    Route::get('/intermediairs', [IntermediairsController::class, 'index'])->name('intermediairs');
    Route::get('/intermediairs/create', [IntermediairsController::class, 'create']);
    Route::get('/intermediairs/{intermediair}', [IntermediairsController::class, 'show']);

    Route::get('/accountmanagers', [AccountmanagerController::class, 'index']);

    Route::get('/clients', [ClientController::class, 'index']);
});


