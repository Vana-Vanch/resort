<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ResortController;
use App\Http\Controllers\ResortDetailController;
use App\Http\Controllers\ResortImagesController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

//Registration
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


//Logout
Route::get('/logout', [LogoutController::class, 'index'])->name('logout');
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout.confirm');


//Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.create');

//Resort
Route::get('/addresort', [ResortController::class, 'index'])->name('addresort');
Route::post('/addresort', [ResortController::class, 'store'])->name('addresort.store');

//ResortImages
Route::get('/addimages/{id}', [ ResortImagesController::class, 'index' ])->name('images');
Route::post('/addimages', [ ResortImagesController::class, 'store' ])->name('images.store');

//SetLocation
Route::get('/setlocation/{id}', [LocationController::class,'index'])->name('location');
Route::post('/setlocation', [LocationController::class, 'store'])->name('location.store');

//ResortDetail
Route::get('/resort/{id}/detail', [ResortDetailController::class, 'show'])->name('detail');

//Bookings
Route::get('/bookings/{resort}', [BookingsController::class, 'index'])->name('bookings');
Route::post('/bookings', [BookingsController::class, 'store'])->name('bookings.store');


//admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin');