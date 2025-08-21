<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/checkout', [PaymentController::class, 'checkout']);
Route::post('/checkout/session', [PaymentController::class, 'createCheckoutSession'])->name('checkout.session');
Route::get('/success', [PaymentController::class, 'success']);
Route::get('/cancel', [PaymentController::class, 'cancel']);