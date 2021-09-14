<?php

use App\Http\Controllers\ApiResortController;
use App\Http\Controllers\TokenAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/resorts', [ApiResortController::class, 'index']);
Route::get('/resorts/{id}', [ApiResortController::class, 'show']);

//Register
Route::post('/register', [TokenAuthController::class, 'register']);

//Login
Route::post('/login', [TokenAuthController::class,'login']);

//Logout
Route::post('/logout', [TokenAuthController::class, 'logout']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
