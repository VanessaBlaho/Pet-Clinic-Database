<?php

use App\Http\Controllers\Animal;
use App\Http\Controllers\SearchController;
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


Route::get('/animals', [Animal::class, 'detail']);


Route::get('/search', [SearchController::class, 'search']);
Route::get('/animals/{animal_id}', [Animal::class, 'detail'])->whereNumber('id')->name('animal.index');
