<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/redirect', [HomeController::class, 'redirect']);

Route::get('/', [HomeController::class, 'index']);

Route::get('/product', [AdminController::class, 'product']);

Route::post('/uploadproduct', [AdminController::class, 'uploadproduct']);

Route::get('/showproduct', [AdminController::class, 'showproduct']);

Route::get('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);

Route::get('/updateview/{id}', [AdminController::class, 'updateview']);

Route::post('/updateproduct/{id}', [AdminController::class, 'updateproduct']);

Route::get('/search', [HomeController::class, 'search']);

// add cart
Route::post('/addcart/{id}', [HomeController::class, 'addcart']);

// show cart
Route::get('/showcart', [HomeController::class, 'showcart']);

// delete cart
Route::get('/deletecart/{id}', [HomeController::class, 'deletecart']);

// order
Route::post('/order', [HomeController::class, 'confirmorder']);

// show order
Route::get('/showorders', [AdminController::class, 'showorders']);

// order delete
Route::get('/deleteorder/{id}', [AdminController::class, 'deleteorder']);

// update status
Route::get('/updatestatus/{id}', [AdminController::class, 'updatestatus']);

// page add
Route::get('/about', [HomeController::class, 'about']);

Route::get('/contactus', [HomeController::class, 'contactus']);


