<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix'=>'admin'],function(){
    Route::get('dashboard',[AdminController::class,'dashboard'])->name('admin#dashboard');
});
