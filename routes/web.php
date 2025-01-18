<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminTransactionController;

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

// ============================================================================
// =============================== P U B L I C ================================
// ============================================================================

Route::get('/', 'PageController@welcome')->name('welcome');
Route::get('/katalog', 'PageController@katalog')->name('katalog');
Route::get('/detail-produk/{id_product}', 'PageController@detailProduk')->name('detailProduk');


// ============================================================================
// ================================ L O G I N =================================
// ============================================================================

Auth::routes([
    'register' => true, // Register Routes...
    'reset' => false, // Reset Password Routes...
    'verify' => false, // Email Verification Routes...
]);


Route::get('/orders', [OrderController::class, 'index'])->name('orders.index')->middleware('auth');
Route::get('/order/{product}', [OrderController::class, 'create'])->name('order.create')->middleware('auth');
Route::post('/order', [OrderController::class, 'store'])->name('order.store')->middleware('auth');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/transactions', [AdminTransactionController::class, 'index'])->name('admin.transactions.index');
    Route::patch('/transactions/{transaction}', [AdminTransactionController::class, 'update'])->name('admin.transactions.update');
});


Route::middleware(['auth', 'role:admin'])->group(function () {

    // Admin Home
    Route::get('/home', 'HomeController@index')->name('home');

    // Product
    Route::prefix('product')->name('product')->group(function () {
        Route::get('/', 'ProductsController@index')->name('');
        Route::get('/create', 'ProductsController@create_view')->name('.create');
        Route::post('/create', 'ProductsController@create_process')->name('.create.process');
        Route::get('/update/{id}', 'ProductsController@update_view')->name('.update');
        Route::post('/update/{id}', 'ProductsController@update_process')->name('.update.process');
        Route::get('/delete/{id}', 'ProductsController@delete')->name('.delete');
    });

    // Categories
    Route::prefix('category')->name('category')->group(function () {
        Route::get('/', 'CategoryController@index')->name('');
        Route::get('/create', 'CategoryController@create_view')->name('.create');
        Route::post('/create', 'CategoryController@create_process')->name('.create.process');
        Route::get('/update/{id}', 'CategoryController@update_view')->name('.update');
        Route::post('/update/{id}', 'CategoryController@update_process')->name('.update.process');
        Route::get('/delete/{id}', 'CategoryController@delete')->name('.delete');
    });

    // Store
    Route::prefix('profile')->name('profile')->group(function () {
        Route::get('/', 'ProfileController@index')->name('');
        Route::put('/', 'ProfileController@update')->name('.update');
    });
});
