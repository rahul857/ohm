<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\oldageController;
use App\Http\Controllers\staffController;
use App\Http\Controllers\dashboardController;
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


Route::get('/',[MasterController::class,'master']);
Route::get('/oldage',[oldageController::class,'oldage'])->name('Old.Age');


Route::get('/admin',[adminController::class,'admin'])->name('admin');
Route::get('/adminForm',[admincontroller::class,'adminForm'])->name('adminForm');
Route::post('/admin/store',[adminController::class,'store'])->name('Admin_Data_Store');


Route::get('/staff',[staffController::class,'staff'])->name('staff');
Route::get('/staffForm',[staffController::class,'staffForm'])->name('staffForm');
Route::post('/staff/store',[staffController::class,'store'])->name('Staff_Data_Store');


Route::get('/dashboard',[dashboardController::class,'dashboard'])->name('dashboard');
Route::get('/dashboardForm',[dashboardController::class,'dashboardForm'])->name('dashboardForm');

Route::get('/oldageForm',[oldageController::class,'oldageForm'])->name('oldageForm');
