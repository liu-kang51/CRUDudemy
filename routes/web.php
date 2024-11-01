<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', [CustomerController::class, 'index'])->name('home');

Route::get('customers/trash', [CustomerController::class,'trashIndex'])->name('customers.trash');

Route::get('customers/restore/{customer}', [CustomerController::class,'restore'])->name('customers.restore');

Route::delete('customers/trash/{customer}', [CustomerController::class,'forcedestory'])->name('customers.force.destory');

Route::resource('customers', CustomerController::class);



