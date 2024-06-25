<?php

use App\Http\Controllers\Tincontroller;
use App\Http\Controllers\TTSVController;
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
});
Route::get('/', [Tincontroller::class, 'index']);
Route::get('/lien-he', [Tincontroller::class, 'lienhe']);
Route::get('/ct/{id}', [Tincontroller::class, 'lay1tin']);
Route::get('/tt', [TTSVController::class, 'ttsv']);
