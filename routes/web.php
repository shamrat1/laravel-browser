<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Auth;

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
// Auth::routes();
Route::group(['prefix' => 'admin','middleware' => 'web'],function(){
    Route::get('/',[DashboardController::class,'index'])->name('backend.dashboard');

    Route::group(['prefix' => 'setting'],function(){
        Route::get('/',[SettingController::class,'index'])->name('admin.setting.index');
        Route::post('/store',[SettingController::class,'store'])->name('admin.setting.store');
    });

    Route::group(['prefix' => 'pages'],function(){
        Route::get('/',[PageController::class,'index'])->name('admin.page.index');
        Route::get('/create',[PageController::class,'create'])->name('admin.page.create');
        Route::post('/store',[PageController::class,'store'])->name('admin.page.store');
        Route::get('/edit/{page}',[PageController::class,'edit'])->name('admin.page.edit');
        Route::put('/update/{page}',[PageController::class,'update'])->name('admin.page.update');
        Route::delete('/delete/{page}',[PageController::class,'delete'])->name('admin.page.delete');
    });
});

Route::get('/',[FrontendController::class,'index'])->name('frontend.home');
Route::get('/pages/{slug}',[FrontendController::class,'getPage'])->name('frontend.page');
