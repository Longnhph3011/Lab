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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [Tincontroller::class, 'index']);
Route::get('/lien-he', [Tincontroller::class, 'lienHe']);
Route::get('/ct/{id}/{name}', [Tincontroller::class, 'lay1Tin']);
Route::get('/thong-tin-sinh-vien', [TTSVController::class, 'ttsv']);
Route::get('update-user', [Tincontroller::class, 'updateUser']);
Route::get('list-user', [Tincontroller::class, 'listUser']);
