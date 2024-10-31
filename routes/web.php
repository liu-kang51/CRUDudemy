<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', [CustomerController::class, 'index'])->name('home');

Route::get('customer/trash', [CustomerController::class,'trashIndex'])->name('customer.trash');

Route::resource('customers', CustomerController::class);



