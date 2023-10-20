<?php

use App\Http\Controllers\Animal;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OwnerCRUDController;
use App\Http\Controllers\AnimalCRUDController;

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
Route::get('/owners', [OwnerController::class, 'index']);


Route::get('/home', [IndexController::class, 'index']);



Route::get('/ownerform/create', [OwnerCRUDController::class, 'create'])->name('owners.create');
Route::post('/ownerform', [OwnerCRUDController::class, 'store'])->name('owners.store');

Route::get('/ownerform/{id}/edit', [OwnerCRUDController::class, 'edit'])->name('owners.edit');
Route::put('/ownerform/{id}', [OwnerCRUDController::class, 'update'])->name('owners.update');
Route::get('/search', [SearchController::class, 'search']);

Route::get('/animals', [AnimalController::class, 'index']);

///animal form
Route::get('/animalform/create', [AnimalCRUDController::class, 'create'])->name('animals.create');
Route::post('/animalform', [AnimalCRUDController::class, 'store'])->name('animals.store');

Route::get('/animalform/{id}/edit', [AnimalCRUDController::class, 'edit'])->name('animals.edit');
Route::put('/animalform/{id}', [AnimalCRUDController::class, 'update'])->name('animals.update');

// animal route
// Route::get('animals')