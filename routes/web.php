<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('auth')->group(function(){
    Route::controller(AdminController::class)->group(function (){
        Route::get('/admin/logout', 'destroy')->name('admin.logout');
        Route::get('/admin/profile', 'Profile')->name('admin.profile');
        Route::get('/admin/edit/profile', 'EditProfile')->name('edit.profile');
        Route::post('/admin/store/profile', 'StoreProfile')->name('store.profile');
        Route::get('/admin/change/password', 'ChangePassword')->name('change.password');
        Route::post('/admin/update/password', 'UpdatePassword')->name('update.password');
    });
});

Route::controller(FrontController::class)->group(function (){
    Route::get('/', 'Home')->name('home.page');
    Route::get('/about-us', 'About')->name('about.page');
});

Route::get('/dashboard', function () {
    return view('admin.pages.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
