<?php

use App\Http\Controllers\ExploreController;
use App\Http\Controllers\GardenController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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
Route::get('/explore', [ExploreController::class, 'index'])->name('explore__search');
Route::get('/plant/{id}', [ExploreController::class, 'plant__detail'])->name('plant__detail');
Route::get('/article/{id}', [ExploreController::class, 'article__detail'])->name('article__detail');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/mygarden', [GardenController::class, 'index'])->name('index');
    Route::post('/mygarden', [GardenController::class, 'store'])->name('garden__store');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
