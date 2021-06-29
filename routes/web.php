<?php

use App\Http\Controllers\mainController;
use App\Http\Controllers\CourseController;
use App\Mail\InvoiceMailable;
use App\Mail\ResetPasswordMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

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
Route::post('payment-status-interest/{id}', [mainController::class, 'PaymentCallbackinterest'])->name('payment.callbackinterest');
//Free project download
Route::post('/free-projects/download/{id}', [mainController::class, 'FreeProjectsDownloadable'])->name('free.projects.download');
//Request modal data free projects
Route::get('/free-projects/modal/content/{id}', [mainController::class, 'ModalContent'])->name('free.projects.modal');
Route::get('/contact', [mainController::class, 'ContactView'])->name('contact.view');
Route::get('/interest', [mainController::class, 'InterestView'])->name('interest.view');
Route::post('projects/custom-projects/form', [mainController::class, 'CustomProjectForm'])->name('custom-project-form');
//===================================COURSE ROUTES==============================================
//Route::get('/courses', [CourseController::class, 'CourseView'])->name('courses.view');
Route::get('/courses/courses/type={type}/language={lang}/', [CourseController::class, 'CoursesView'])->name('courses.view');
Route::post('/courses/cart/add-product/', [CourseController::class, 'AddToCart'])->name('course_cart.add.product');
Route::post('/courses/cart/remove-product/{id?}', [CourseController::class, 'RemoveFromCart'])->name('course_cart.remove.product');
//=======================================USER REALTED===========================================
Route::post('/user/login/', [mainController::class, 'Login'])->name('user.login');
Route::get('/user/logout/', [mainController::class, 'Logout'])->name('user.logout');
Route::post('/user/forget-password/', [mainController::class, 'ForgetPassword'])->name('user.forget_password');
Route::get('/user/purchase/', [mainController::class, 'PurchaseView'])->middleware('LoginSession')->name('user.purchases');
Route::match(["POST", "GET"], '/user/course/{course}/{id}', [mainController::class, 'CourseReading'])->name('user.read.course')->middleware('LoginSession');
Route::match(['GET', 'POST'], '{title}/{subtitle}', [CourseController::class, 'PDFViewer'])->name('pdf.viewer')->middleware('LoginSession');
Route::post('/contact/', [mainController::class, 'ContactDetails'])->name('contact.details');
Route::post('/interest/', [mainController::class, 'InterestDetails'])->name('interest.details');
//==============================================================================================
Route::get('/payment-{slug}', [mainController::class, 'PaymentStatusView'])->name('payment.status');
Route::post('/password-reset/update/password/{token?}', [mainController::class, 'UpdatePassword'])->name('update.password');
Route::get('password/resets/{token}', [mainController::class, 'ResetPasswordView'])->name('reset.password.view');
Route::get('privacy-policy', [mainController::class, 'PrivacyPolicyView'])->name('privacy_policy.view');

Route::get('/send', function () {
    $tomail = 'sagarvanesa@gmail.com';
    $data = ['order_id' => 1, 'amount' => 2, 'product' => 'hhd'];
    Mail::send('email.mail', $data, function ($message) use ($tomail) {
        $message->to($tomail)->subject('test');
    });
});
