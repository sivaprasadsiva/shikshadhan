<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\HomePageController;
use Illuminate\Support\Facades\Route;


Route::get('admin/login', [LoginController::class,'login']);
