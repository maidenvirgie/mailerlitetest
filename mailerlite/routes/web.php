<?php

use App\Http\Controllers\SubscriberController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/subscribers', [SubscriberController::class, 'home'])->name('subscribers.home');
Route::get('/subscribers/{cursor}', [SubscriberController::class, 'index'])->name('subscribers.index');
Route::get('/subscriber/create', [SubscriberController::class, 'create'])->name('subscribers.create');
Route::post('/subscriber/create',[SubscriberController::class, 'store'])->name('subscribers.store');

Route::get('/subscriber/edit/{id}',[SubscriberController::class, 'edit'])->name('subscribers.edit');
Route::patch('/subscriber/update/{id}',[SubscriberController::class, 'update'])->name('subscribers.update');

Route::get('/subscriber/delete/{id}',[SubscriberController::class, 'destroy'])->name('subscribers.delete');