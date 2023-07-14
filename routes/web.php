<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/receiving',[App\Http\Controllers\ReceivingController:: class,'form'])->name('receiving');
Route::get('/stocklist',[App\Http\Controllers\ReceivingController:: class,'list'])->name('stocklist');
Route::get('/productlist',[App\Http\Controllers\ProductlistController:: class,'list'])->name('productlist');
Route::get('/merchantlist',[App\Http\Controllers\merchantlistController:: class,'list'])->name('merchantlist');
Route::get('/binlist',[App\Http\Controllers\binlistController:: class,'list'])->name('binlist');
Route::get('/orderlist',[App\Http\Controllers\Orderlistcontroller:: class,'list'])->name('orderlist');
Route::get('/productdetails',[App\Http\Controllers\ProductlistController::class,'details'])->name('productdetails');
Route::get('/newmovement',[App\Http\Controllers\MovementController::class,'movement'])->name('newmovement');
Route::get('/movementlist',[App\Http\Controllers\MovementController::class,'list'])->name('movementlist');
Route::get('/newrecall',[App\Http\Controllers\RecallController::class,'recall'])->name('newrecall');
Route::get('/recalllist',[App\Http\Controllers\RecallController::class,'list'])->name('recalllist');
Route::get('/orderprocessing',[App\Http\Controllers\Orderlistcontroller:: class,'index'])->name('process');

