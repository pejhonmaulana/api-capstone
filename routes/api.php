<?php

use App\Models\Pupuk;
use App\Models\Kategori;
use App\Models\Padi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PupukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PadiController;
use App\Http\Controllers\AuthController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     Route::get('padi',[PadiController::class,'index']);
// });
// Route::group(['middleware'=>['auth:sanctum']],function () {
//     Route::get('padi',[PadiController::class,'index']);
// });

Route::get('pupuk',[PupukController::class,'index']);
Route::get('id-pupuk',[PupukController::class,'show']);
Route::post('pupuk',[PupukController::class,'create']);

Route::get('kategori',[KategoriController::class,'index']);
Route::get('kategori/{id}',[KategoriController::class,'show']);
Route::post('kategori',[KategoriController::class,'create']);

Route::get('padi',[PadiController::class,'index']);
Route::get('id-padi/{id}',[PadiController::class,'show']);
Route::post('padi',[PadiController::class,'create']);

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);