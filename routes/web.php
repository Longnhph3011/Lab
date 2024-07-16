<?php

use App\Http\Controllers\sanPhamController;
use App\Http\Controllers\Tincontroller;
use App\Http\Controllers\TTSVController;
use App\Http\Controllers\UserController;
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
// Route::get('/', [Tincontroller::class, 'index']);
// Route::get('/lien-he', [Tincontroller::class, 'lienHe']);
// Route::get('/ct/{id}/{name}', [Tincontroller::class, 'lay1Tin']);
// Route::get('/thong-tin-sinh-vien', [TTSVController::class, 'ttsv']);
// Route::get('update-user', [Tincontroller::class, 'updateUser']);

// ///////////////////////////////////////////////////////////////////////
// Route::get('list-user', [UserController::class, 'showUser']);


// Nhóm Route
Route::group(['prefix' => 'user', 'as' => 'users.'], function () {
    Route::get('list-users', [UserController::class, 'listUsers'])->name('listUsers');
    Route::get('add-users', [UserController::class, 'addUsers'])->name('addUsers');
    Route::post('add-users', [UserController::class, 'addPostUser'])->name('addPostUser');
    Route::get('delete-users/{idUser}', [UserController::class, 'deleteUser'])->name('deleteUser');
    Route::get('update-users/{idUser}', [UserController::class, 'updateUser'])->name('updateUser');
    Route::post('update-users', [UserController::class, 'updatePostUsers'])->name('updatePostUsers');
});
Route::group(['prefix' => 'sanpham', 'as' => 'sanpham.'], function () {
    Route::get('list-sanpham', [sanPhamController::class, 'listSanPham'])->name('listSanPham');
    Route::get('add-sanpham', [sanPhamController::class, 'addSanPham'])->name('addSanPham');
    Route::post('add-sanpham', [sanPhamController::class, 'addPostSanPham'])->name('addPostSanPham');
    Route::get('delete-sanpham/{idSanPham}', [sanPhamController::class, 'deleteSanPham'])->name('deleteSanPham');
    Route::get('update-sanpham/{idSanPham}', [sanPhamController::class, 'updateSanPham'])->name('updateSanPham');
    Route::post('update-sanpham', [sanPhamController::class, 'updatePostSanPham'])->name('updatePostSanPham');
    Route::get('search', [sanPhamController::class, 'search'])->name('search');
});


Route::get('test', [sanPhamController::class, 'test']);
