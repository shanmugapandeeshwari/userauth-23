<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\ProductController::class, 'index'])->name('profile');
Route::get('/add-product', [App\Http\Controllers\ProductController::class, 'create']);
Route::post('/add-product', [App\Http\Controllers\ProductController::class, 'store']);
Route::get('/edit-product/{product}', [App\Http\Controllers\ProductController::class, 'edit']);
Route::post('/edit-product/{product}', [App\Http\Controllers\ProductController::class, 'update']);
Route::delete('/delete-product/{product}', [App\Http\Controllers\ProductController::class, 'delete']);

