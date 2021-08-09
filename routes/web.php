<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Toko\Order\OrderController;
use App\Http\Controllers\Toko\Profile\ProfileController;
use App\Http\Controllers\Toko\Dashboard\DashboardController;
use App\Http\Controllers\Toko\Store\StoreController;
use App\Http\Controllers\Toko\Story\StoryController;
use App\Http\Controllers\Toko\Products\ProductController;
use App\Http\Controllers\General\PageController;

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

// public routes
Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/@{toko}', [PageController::class,'profil_toko']);
// Route::get('/leaderboard', [PageController::class,'leaderboard']);
// Route::get('/referral', [PageController::class,'referral']);
// Route::get('/explore', [PageController::class,'explore']);

// authentication routes
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/products',[ProductController::class,'index'])->name('products');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/store',[StoreController::class,'index'])->name('store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/stories',[StoryController::class,'index'])->name('stories');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/store/profile',[ProfileController::class,'index_profil_toko'])->name('index_profil');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/store/profile/form',[ProfileController::class,'form_profil_toko'])->name('form_profil');

