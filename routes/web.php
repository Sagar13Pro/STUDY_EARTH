<?php

use App\Http\Controllers\mainController;
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

//==================================VIEW=========================================
Route::get('/', [mainController::class, 'Index'])->name('index.view');
Route::get('/projects', [mainController::class, 'Project'])->name('projects.view');
Route::get('/projects/free-project/type={type}/language={name}/', [mainController::class, 'FreeProjectView'])->name('freeproject.view');
Route::get('/projects/paid-project/', [mainController::class, 'PaidProjectView'])->name('paidproject.view');
Route::get('/cart', [mainController::class, 'Cart'])->name('cart.view');
//===============================================================================
