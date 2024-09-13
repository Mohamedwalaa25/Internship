<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Dashboard\Categories\CategoryController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\Products\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::name('admin.')->group(function () {
    Route::get('login', [AdminController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AdminController::class, 'login'])->name('login.submit');
    Route::post('logout', [AdminController::class, 'logout'])->name('logout');

});

Route::group(
  [
        'middleware' => ['auth:admin'],
        'prefix'=>'/dashboard'
    ], function (){
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');
    Route::delete('/categories/{category}/force-delete',[CategoryController::class,'forceDelete'])->name('categories.force-delete');

    Route::resource('/categories',CategoryController::class);
    Route::resource('/products',ProductController::class);

    Route::get('profile',[ProfileController::class,'edit'])->name('profile.edit');
    Route::patch('profile',[ProfileController::class,'update'])->name('profile.update');


});
