<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CourtController;

Route::get('', [HomeController::class,'index'])->name('admin.home');

Route::resource('courts', CourtController::class)->names('admin.courts');