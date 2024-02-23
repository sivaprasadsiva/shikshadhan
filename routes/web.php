<?php

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\PurchaseController;
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

Route::get('/', [HomePageController::class,'home'])->name('home');

Route::get('packages', [HomePageController::class,'package'])->name('packages');


Route::get('add-ons',[HomePageController::class, 'addons']);


Route::get('/purchase/{id}/{package_name}', [PurchaseController::class, 'show'])->name('purchase');

Route::get('addon',[HomePageController::class, 'addonpage'])->name('addonlist');
