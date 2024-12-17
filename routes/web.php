<?php

use App\Http\Controllers\AddressesController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::controller(AddressesController::class)->group( function (): void {

    Route::get(uri: 'addresses',            action: 'index');
    Route::post(uri: 'addresses',           action: 'create');
    Route::get(uri: 'addresses/{id}',       action: 'show');
    Route::put(uri: 'addresses/{id}',       action: 'update');
    Route::delete(uri: 'addresses/{id}',    action: 'destroy');

});

Route::controller(  ProductsController::class)->group(callback: function (): void {

    Route::get(uri: 'products',            action: 'index');
    Route::post(uri: 'products',           action: 'create');
    Route::get(uri: 'products/{id}',       action: 'show');
    Route::put(uri: 'products/{id}',       action: 'update');
    Route::delete(uri: 'products/{id}',    action: 'destroy');

});

Route::controller(  UsersController::class)->group(callback: function (): void {

    Route::get(uri: 'users',            action: 'index');
    Route::post(uri: 'users',           action: 'create');
    Route::get(uri: 'users/{id}',       action: 'show');
    Route::put(uri: 'users/{id}',       action: 'update');
    Route::delete(uri: 'users/{id}',    action: 'destroy');

});

Route::controller( OrdersController::class)->group(callback: function (): void {

    Route::get(uri: 'orders',            action: 'index');
    Route::post(uri: 'orders',           action: 'create');
    Route::get(uri: 'orders/{id}',       action: 'show');
    Route::put(uri: 'orders/{id}',       action: 'update');
    Route::delete(uri: 'orders/{id}',    action: 'destroy');

}); 