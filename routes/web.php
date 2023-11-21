<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\staffController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\oldageController;
use App\Http\Controllers\donationController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Frontend\HomeController as FrontendHomeController;
use App\Http\Controllers\Frontend\UserController as FrontendUserController;

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

//Frontend
Route::get('/master',[FrontendHomeController::class,'master'])->name('master');

Route::get('/registration',[FrontendUserController::class,'registration'])->name('User.registration');
Route::post('/registration',[FrontendUserController::class, 'store'])->name('User.store');


Route::get('/login',[FrontendUserController::class,'login'])->name('User.login');
Route::post('/login',[FrontendUserController::class,'doLogin'])->name('User.do.login');

Route::group(['middleware'=>'auth'],function(){
Route::get('/logout',[FrontendUserController::class, 'logout'])->name('User.logout');
});


// backend
Route::get('/pages/login',[UserController::class,'loginForm'])->name('pages.login');

Route::post('/login-form-post',[UserController::class,'loginPost'])->name('pages.login.post');

Route::group(['middleware'=>'auth'],function(){

Route::get('/',[MasterController::class,'master'])->name('master');

Route::get('/oldage',[oldageController::class,'oldage'])->name('Old.Age');
Route::get('/oldageForm',[oldageController::class,'oldageForm'])->name('oldageForm');

Route::get('/', [HomeController::class, 'home'])->name('dashboard');

Route::get('/admin',[adminController::class,'admin'])->name('admin');
Route::get('/adminForm',[admincontroller::class,'adminForm'])->name('adminForm');
Route::post('/admin/store',[adminController::class,'store'])->name('Admin_Data_Store');


Route::get('/staff',[staffController::class,'staff'])->name('staff');
Route::get('/staffForm',[staffController::class,'staffForm'])->name('staffForm');
Route::post('/staff/store',[staffController::class,'store'])->name('Staff_Data_Store');
//Doctor
Route::get('/doctor', [staffController::class,'doctor'])->name('staff.doctor');
Route::get('/doctorForm',[staffController::class,'doctorForm'])->name('doctorForm');
Route::post('/doctor/store',[staffController::class,'store'])->name('Doctor_Data_Store');


Route::get('/dashboard',[dashboardController::class,'dashboard'])->name('dashboard');
Route::get('/dashboardForm',[dashboardController::class,'dashboardForm'])->name('dashboardForm');

Route::get('/donation',[donationController::class,'donation'])->name('donation');
Route::get('/donationForm',[donationCxontroller::class,'donationForm'])->name('donationForm');

Route::get('/pages/logout',[UserController::class,'logoutForm'])->name('pages.logout');
});