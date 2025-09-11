<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'order', 'as' => 'order.', 'controller' => OrderController::class], function () {
    Route::get('/list',  'list')->name( 'list');
    Route::get('/index',  'index')->name( 'index');
    Route::get('/confirm',  'confirm')->name( 'confirm');
    Route::match(['get','post'],'/payment','payment')->name('payment');
    Route::post('/complete',  'complete')->name( 'complete');

    // Route::get('/{id}',  'confirmPayment')->name( 'confirmPayment');
});
