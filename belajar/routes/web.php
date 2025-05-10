<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\MerchandiseController;



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


Route::get('/signup', [AuthController::class, 'signup']);
Route::post('/signup', [AuthController::class, 'create']);

Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticating']);

Route::get('/logout', [AuthController::class, 'logout']);


Route::get('/home', [HomeController::class, 'index']);
Route::get('/film/{id}', [HomeController::class, 'show']);

Route::get('/film', [FilmController::class, 'index']);
Route::get('/film/{id}', [FilmController::class, 'show']);

Route::post('/films', [FilmController::class, 'store']);
Route::put('/film/{id}', [FilmController::class, 'update']);
Route::delete('/film/{id}', [FilmController::class, 'delete']);


Route::get('/merchandise', [MerchandiseController::class, 'index']);
Route::get('/merch/{id}', [MerchandiseController::class, 'show']);

Route::get('/cart', [MerchandiseController::class, 'shop']);
Route::post('/cart/{id}', [MerchandiseController::class, 'cart']);
Route::delete('/cart/{id}', [MerchandiseController::class, 'delete']);
Route::get('/cart/{id}/{jumlah}', [MerchandiseController::class, 'update']);

Route::get('/about', [aboutController::class, 'index']);

Route::get('/admin/admin', [AdminController::class, 'film'])->middleware('guest');


// Route::get('/basicroute', function () {
//     return 5*6;
// });

// //Route::get('/viewroute', function () {
//   //  return view('viewroute');
// //});

// Route::view('/viewroute', 'viewroute', ['name' => 'hani', 'phone' => '0857...']);

// Route::redirect('/viewroute', '/viewroute-redirect');


// //route dengan parameter
// Route::get('/product', function() {
//   return 'product';
// });

// Route::get('/product/{id}', function($id) {
//   return view('product.detail', ['id' => $id]);
// });

// //route dengan prefix


// Route::prefix('administrator')->group(function () {
//   Route::get('/profil', function() {
//     return 'profil';
//   });
  
//   Route::get('/about', function() {
//     return 'about';
//   });
  
//   Route::get('/contact', function() {
//     return 'contact';
//   });
// });





