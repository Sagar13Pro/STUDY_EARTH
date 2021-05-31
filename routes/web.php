<?php

use App\Http\Controllers\mainController;
use App\Http\Controllers\CourseController;
use App\Models\CourseMaterial;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

//==================================PROJECTS ROUTES=============================================
Route::get('/', [mainController::class, 'IndexView'])->name('index.view');
Route::get('/projects', [mainController::class, 'ProjectView'])->name('projects.view');
Route::get('/projects/free-project/type={type}/language={lang}/', [mainController::class, 'FreeProjectView'])->name('freeproject.view');
Route::get('/projects/paid-project/type={type}/language={lang}/', [mainController::class, 'PaidProjectView'])->name('paidproject.view');
Route::get('/paid-project/cart/', [mainController::class, 'CartView'])->name('cart.view');

Route::post('/paid-project/cart/add-product/', [mainController::class, 'AddToCart'])->name('cart.add.product');
Route::post('/paid-project/cart/remove-product/', [mainController::class, 'RemoveFromCart'])->name('cart.remove.product');
Route::post('/paid-projects/cart/checkout/', [mainController::class, 'Checkout'])->name('cart.checkout');

Route::post('/paid-project/cart/remove-product/{id?}', [mainController::class, 'RemoveFromCart'])->name('cart.remove.product');
//Payment Callback
Route::post('payment-status/{cookie}', [mainController::class, 'PaymentCallback'])->name('payment.callback');
//Free project download
Route::post('/free-projects/download/{id}', [mainController::class, 'FreeProjectsDownloadable'])->name('free.projects.download');
//Request modal data free projects
Route::get('/free-projects/modal/content/{id}', [mainController::class, 'ModalContent'])->name('free.projects.modal');
Route::get('/contact', [mainController::class, 'ContactView'])->name('contact.view');
//===================================COURSE ROUTES==============================================
//Route::get('/courses', [CourseController::class, 'CourseView'])->name('courses.view');
Route::get('/courses/courses/type={type}/language={lang}/', [CourseController::class, 'CoursesView'])->name('courses.view');
Route::post('/courses/cart/add-product/', [CourseController::class, 'AddToCart'])->name('course_cart.add.product');
Route::post('/courses/cart/remove-product/{id?}', [CourseController::class, 'RemoveFromCart'])->name('course_cart.remove.product');
//=======================================USER REALTED===========================================
Route::post('/user/login/', [mainController::class, 'Login'])->name('user.login');
Route::get('/user/logout/', [mainController::class, 'Logout'])->name('user.logout');
Route::get('/user/purchase/', [mainController::class, 'PurchaseView'])->middleware('LoginSession')->name('user.purchases');
Route::match(["POST", "GET"], '/user/course/{course}/{id}', [mainController::class, 'CourseReading'])->name('user.read.course')->middleware('LoginSession');
Route::match(['GET', 'POST'], '/user/course/{title}/{subtitle}/view', [CourseController::class, 'PDFViewer'])->name('pdf.viewer')->middleware('LoginSession');
//==============================================================================================
