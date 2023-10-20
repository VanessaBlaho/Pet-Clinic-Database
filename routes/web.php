<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OwnerController;

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
Route::get('/owners',[OwnerController::class,'index']);



Route::get('/home', [IndexController::class, 'index']);
Route::get('/', function () {
    return view('welcome');
});


Route::get('/animals', [AnimalController::class, 'detail']);
