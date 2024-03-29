<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomesController;
use App\Http\Controllers\RecipesController;
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

Route::get('/test', function () {
    return view('test');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');

Route::resource('home',HomesController::class);
Route::resource('recipe',RecipesController::class);