<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/service',[HomeController::class,'service'])->name('service');
Route::get('/department',[HomeController::class,'department'])->name('department');
Route::get('/department/single',[HomeController::class,'departmentSingle'])->name('department-single');
Route::get('/doctor',[HomeController::class,'doctor'])->name('doctor');
Route::get('/doctor/single',[HomeController::class,'doctorSingle'])->name('doctor-single');
Route::get('/appoinment',[HomeController::class,'appoinment'])->name('appoinment');
Route::get('/blog/sidebar',[HomeController::class,'blogSidebar'])->name('blog-sidebar');
Route::get('/blog/single',[HomeController::class,'blogSingle'])->name('blog-single');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
