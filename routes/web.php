<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\staffController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\oldageController;
use App\Http\Controllers\trusteeController;
use App\Http\Controllers\donationController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\BackendserviceController;
use App\Http\Controllers\Frontend\aboutController;
use App\Http\Controllers\Frontend\contactController;
use App\Http\Controllers\Frontend\serviceController;
use App\Http\Controllers\Frontend\testimonialController;
use App\Http\Controllers\Frontend\SslCommerzPaymentController;
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


Route::get('/search-donation',[FrontendHomeController::class,'search'])->name('donation.search');


Route::get('/registration',[FrontendUserController::class,'registration'])->name('User.registration');
Route::post('/registration',[FrontendUserController::class, 'store'])->name('User.store');

//Donation er jonno
Route::get('/donation/list',[donationController::class,'donationList'])->name('donation.list');
Route::get('/donationForm',[donationController::class,'donationForm'])->name('donationForm');
Route::post('/donation/store',[donationController::class,'store'])->name('Donation_Data_Store');


Route::get('/about',[aboutController::class,'about'])->name('about');
Route::get('/contact',[contactController::class,'contactlist'])->name('contact.list');

//Services:
Route::get('/PersonalCare',[serviceController::class,'PersonalCare'])->name('services.PersonalCare');

Route::get('/meals',[serviceController::class,'meals'])->name('services.meals');
Route::get('/mealsForm',[serviceController::class,'mealsForm'])->name('meals.Form');

Route::get('/housekeeping',[serviceController::class,'housekeeping'])->name('services.housekeeping');

Route::get('/testimonials',[testimonialController::class,'testimonial'])->name('testimonial');


Route::get('/login',[FrontendUserController::class,'login'])->name('User.login');
Route::post('/login',[FrontendUserController::class,'doLogin'])->name('User.do.login');

Route::group(['middleware'=>'auth'],function(){
Route::get('/logout',[FrontendUserController::class, 'logout'])->name('User.logout');

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END
});







// backend
Route::get('/pages/login',[UserController::class,'loginForm'])->name('pages.login');

Route::post('/login-form-post',[UserController::class,'loginPost'])->name('pages.login.post');

Route::group(['middleware'=>'auth'],function(){

Route::get('/',[MasterController::class,'master'])->name('master');

Route::get('/oldage',[oldageController::class,'oldage'])->name('Old.Age');
Route::get('/oldageForm',[oldageController::class,'oldageForm'])->name('oldageForm');
Route::post('/oldage/store',[oldageController::class,'store'])->name('Oldage_Data_Store');
Route::get('/oldage/view/{id}',[oldageController::class,'view'])->name('oldage.view');
Route::get('/oldage/edit/{id}',[oldageController::class,'edit'])->name('oldage.edit');
Route::put('/oldage/update/{id}',[oldageController::class,'update'])->name('oldage.update');
Route::get('/oldage/update/{id}',[oldageController::class,'delete'])->name('oldage.delete');

Route::get('/', [HomeController::class, 'home'])->name('dashboard');

Route::get('/admin',[adminController::class,'admin'])->name('admin');
Route::get('/adminForm',[admincontroller::class,'adminForm'])->name('adminForm');
Route::post('/admin/store',[adminController::class,'store'])->name('Admin_Data_Store');


Route::get('/staff',[staffController::class,'staff'])->name('staff');
Route::get('/staffForm',[staffController::class,'staffForm'])->name('staffForm');
Route::post('/staff/store',[staffController::class,'store'])->name('Staff_Data_Store');

//Service:
Route::get('/service',[BackendserviceController::class,'services'])->name('services');
//Route::get('/serviceForm',[BackendserviceController::class,'servicesForm'])->name('services.Form');

Route::get('/PersonalCares',[BackendserviceController::class,'PersonalCares'])->name('PersonalCare.Bend');
Route::get('/Transport',[BackendserviceController::class,'Transport'])->name('Transport.Bend');


Route::get('/meal',[BackendserviceController::class,'meal'])->name('meal.Bend');
Route::get('/mealForm',[BackendserviceController::class,'mealForm'])->name('meal.Form');
Route::post('/meals/store',[BackendserviceController::class,'store'])->name('Meals_Data_Store');


Route::get('/housekeepings',[BackendserviceController::class,'housekeepings'])->name('housekeeping.Bend');
Route::get('/housekeepingForm',[BackendserviceController::class,'housekeepingForm'])->name('housekeeping.Form');
Route::post('/housekeeping/store',[BackendserviceController::class,'storehk'])->name('housekeeping_Data_Store');


//Doctor
Route::get('/doctor', [staffController::class,'doctor'])->name('staff.doctor');
Route::get('/doctorForm',[staffController::class,'doctorForm'])->name('doctorForm');
Route::post('/doctor/store',[staffController::class,'store'])->name('Doctor_Data_Store');


Route::get('/dashboard',[dashboardController::class,'dashboard'])->name('dashboard');
Route::get('/dashboardForm',[dashboardController::class,'dashboardForm'])->name('dashboardForm');

Route::get('/donation',[donationController::class,'donation'])->name('donation');

Route::get('/trustee',[trusteeController::class,'trustee'])->name('trustee.Bend');

Route::get('/pages/logout',[UserController::class,'logoutForm'])->name('pages.logout');
});