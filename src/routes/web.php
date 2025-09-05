<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'order', 'as' => 'order.', 'controller' => OrderController::class], function () {
    Route::get('/{id}',  'confirmPayment')->name( 'confirmPayment');
    Route::post('/payment',  'payment')->name( 'payment');
});
