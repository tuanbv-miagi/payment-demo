<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'order', 'as' => 'order.', 'controller' => OrderController::class], function () {
    Route::get('/index',  'index')->name( 'index');
    Route::get('/confirm',  'confirm')->name( 'confirm');
    Route::post('/payment',  'payment')->name( 'payment');
    Route::get('/complete',  'complete')->name( 'complete');

    // Route::get('/{id}',  'confirmPayment')->name( 'confirmPayment');
});
