<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Toko\Order\OrderController;
use App\Http\Controllers\Toko\Profile\ProfileController;
use App\Http\Controllers\Toko\Dashboard\DashboardController;
use App\Http\Controllers\Toko\Store\StoreController;
use App\Http\Controllers\Toko\Story\StoryController;
use App\Http\Controllers\Toko\Products\ProductController;
use App\Http\Controllers\General\PageController;
use App\Http\Controllers\User\ReferralController;

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

Route::get('/about', function () {
    return view('about');
});

Route::get('/@{toko}', [PageController::class,'profil_toko']);
Route::get('/@{toko}/order', function(){
    return view('order_podruk');
});
Route::get('/leaderboard', [PageController::class,'leaderboard']);
// Route::get('/referral', [PageController::class,'referral']);
// Route::get('/referral/daftar', [PageController::class,'referral']);
// Route::get('/cari_umkm', [PageController::class,'explore']);
// Route::get('/referral/dashboard', [PageController::class,'referral']);

// test page
Route::get('/referral/daftar', function(){
    return view('form_referral');
})->name('referral');

Route::get('/belajar', function(){
    return view('belajar');
});

Route::get('/daftar_umkm', [PageController::class,'daftar_umkm']);
Route::get('/cari_umkm', [PageController::class,'cari_umkm']);
Route::get('/cari_umkm2', [PageController::class,'cari_umkm2']);
// authentication routes
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class,'index'])->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/products',[ProductController::class,'index'])->name('products');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/store',[StoreController::class,'index'])->name('store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/stories',[StoryController::class,'index'])->name('stories');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/store/form',[ProfileController::class,'form_profil_toko'])->name('form_profil');
Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/store/form',[ProfileController::class,'upload_profil_toko'])->name('form_profil');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/referral', [ReferralController::class,'index'])->name('referral');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard/referral/daftar', function(){
    return view('form_referral');
});

Route::middleware(['auth:sanctum', 'verified'])->post('/dashboard/referral/daftar', [ReferralController::class,'daftar_referral']);
