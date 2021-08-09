<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Toko\Order\OrderController;
use App\Http\Controllers\Toko\Profile\ProfileController;
use App\Http\Controllers\Toko\Dashboard\DashboardController;
use App\Http\Controllers\Toko\Store\StoreController;
use App\Http\Controllers\Toko\Story\StoryController;

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

Route::get('/@{toko}', function($toko){
    return "Hello ".$toko;
});

// authentication routes
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/orders',[OrderController::class,'render'])->name('orders');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/store',[StoreController::class,'index'])->name('store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/stories',[StoryController::class,'index'])->name('stories');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/store/profile',[ProfileController::class,'index_profil_toko'])->name('index_profil');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/store/profile/form',[ProfileController::class,'form_profil_toko'])->name('form_profil');

