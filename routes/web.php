<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\ImageController;

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

Route::get('login', [App\Http\Controllers\Auth\AuthController::class, 'index'])->name('login');
Route::post('post-login', [App\Http\Controllers\Auth\AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [App\Http\Controllers\Auth\AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [App\Http\Controllers\Auth\AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [App\Http\Controllers\Auth\AuthController::class, 'dashboard']);
Route::get('logout', [App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');

// image section route


   Route::get('/', [App\Http\Controllers\Auth\AuthController::class, 'index']);
   Route::get('/image', [App\Http\Controllers\ImageController::class,'index'])->name('Image.index');
   Route::post('/image', [App\Http\Controllers\ImageController::class,'store'])->name('image.store');
   Route::get('/show', [App\Http\Controllers\ImageController::class,'imagelisting'])->name('image.imagelisting');
   Route::get('/show/{status}/{id}',[App\Http\Controllers\ImageController::class,'status']);
   Route::get('/delete/{id}', [App\Http\Controllers\ImageController::class,'destroy']);

   Route::get('/viewgallery/{id}', [App\Http\Controllers\ImageController::class,'Imagelistingone']);
