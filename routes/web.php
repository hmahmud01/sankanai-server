<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DealController;
// use App\Http\Controllers\siteController;

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

Route::get('/', function () {
    return view('site.index');
});

// Route::get('gallery', function () {
//     return view('site.products');
// });

Route::get('category-products', function () {
    return view('site.category-products');
});

Route::get('product', function () {
    return view('site.product');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Route::get('gallery', 'App\Http\Controllers\siteController@gallery')->name('gallery.index');
// Route::get('/gallery/{$id}', 'App\Http\Controllers\siteController@detail')->name('gallery.detail');
// Route::get('/gallery/{$id}', [siteController::class, 'detail'])->name('gallery.detail');

Route::resource('products', ProductController::class);
Route::post('searchproduct', [ProductController::class, 'searchproducts'])->name('searchproduct');
Route::post('storeproduct', [ProductController::class, 'storeproduct'])->name('storeproduct');
Route::get('home', [ProductController::class, 'index'])->name('home');
Route::get('gallerycat/{cat}', [ProductController::class, 'galleryCategory'])->name('gallery.category');
Route::get('gallery', [ProductController::class, 'gallery'])->name('gallery.index');
Route::get('gallerysorted', [ProductController::class, 'gallerySorted'])->name('gallery.sorted');
Route::get('gallerysortedreverse', [ProductController::class, 'gallerySortedreverse'])->name('gallery.gallerysortedreverse');
Route::get('gallerypricesorted', [ProductController::class, 'galleryPriceSorted'])->name('gallery.gallerypricesorted');
Route::get('gallerypricesortedreverse', [ProductController::class, 'galleryPriceSortedreverse'])->name('gallery.gallerypricesortedreverse');
Route::get('/products/{$id}', [ProductController::class, 'detail'])->name('gallery.detail');
Route::post('sendemail', [ProductController::class, 'sendEmail'])->name('sendemail');

Route::resource('deals', DealController::class);
Route::post('searchdeal', [DealController::class, 'searchdeals'])->name('searchdeal');
Route::post('storedeal', [DealController::class, 'storedeal'])->name('storedeal');
Route::get('categoryindex/{$cat}', [DealController::class, 'categoryindex'])->name('categoryindex');
Route::get('dealindex/', [DealController::class, 'dealindex'])->name('dealindex');
Route::get('saveindex/', [DealController::class, 'saveindex'])->name('saveindex');
Route::get('clearanceindex/', [DealController::class, 'clearanceindex'])->name('clearanceindex');
Route::get('childrenindex/', [DealController::class, 'chilrenindex'])->name('childrenindex');
Route::get('flyerindex/', [DealController::class, 'flyerindex'])->name('flyerindex');
Route::get('packageindex/', [DealController::class, 'packageindex'])->name('packageindex');
Route::get('dealclearance', 'App\Http\Controllers\DealController@index')->name('dealclearance');
