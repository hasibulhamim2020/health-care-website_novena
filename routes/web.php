<?php
///
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BlogController;
///
///
/////////////Front End Route start /////////////////
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
/////////////Front End Route end //////////////////////
///
///
///
///
//////////////////////////////////
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
///
/////////////Back End Route start ////////////////////
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::resources(['categories'=>CategoryController::class]);
    Route::resources(['blogs'=>BlogController::class]);
/////////////Back End Route end //////////////////////
///
///
///
});
