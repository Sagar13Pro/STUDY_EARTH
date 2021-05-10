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
Route::get('/', [mainController::class, 'IndexView'])->name('index.view');
Route::get('/projects', [mainController::class, 'ProjectView'])->name('projects.view');
Route::get('/projects/free-project/type={type}/language={lang}/', [mainController::class, 'FreeProjectView'])->name('freeproject.view');
Route::get('/projects/paid-project/type={type}/language={lang}/', [mainController::class, 'PaidProjectView'])->name('paidproject.view');
Route::get('/paid-project/cart/', [mainController::class, 'CartView'])->name('cart.view');

Route::post('/paid-project/cart/add-product/', [mainController::class, 'AddToCart'])->name('cart.add.product');
Route::post('/paid-projects/cart/checkout/', [mainController::class, 'Checkout'])->name('cart.checkout');

Route::post('/paid-project/cart/remove-product/{id?}', [mainController::class, 'RemoveFromCart'])->name('cart.remove.product');

//Payment Callback
Route::post('payment-status/{cookie}', [mainController::class, 'PaymentCallback'])->name('payment.callback');
//===============================================================================