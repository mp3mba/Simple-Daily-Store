<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::group(['middleware' => ['auth']], function(){
//     Route::get('/', [HomeController::class, 'index'])->name('home');
//     Route::get('/view-data', [HomeController::class, 'view'])->name('view_data');
//     Route::post('/new-data', [HomeController::class, 'add'])->name('new_data');
// });

Route::get('/', [HomeController::class, 'index'])->middleware(['auth']);
Route::get('/view-data', [HomeController::class, 'view'])->name('view_data');
Route::get('/new-data', [HomeController::class, 'add'])->name('new_data');
Route::get('/new-user', [HomeController::class, 'add_user'])->name('new_user');
Route::post('/add-data', [HomeController::class, 'add_data'])->name('add_data');
Route::post('/add-user', [HomeController::class, 'new_user'])->name('add_user');

Auth::routes();
