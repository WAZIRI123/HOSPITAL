<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Add_doctors;
use App\Http\Controllers\newsController;
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
Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirects'])->middleware('auth','verified');

Route::post('/upload_doctors',[Add_doctors::class,'upload_doctors'])->name('upload_doctors');

Route::get('/delete_doctor/{id}',[Add_doctors::class,'delete_doctor']);

Route::get('/addDoctor',[Add_doctors::class,'addDoctor']);

Route::get('/update_doctor/{id}',[Add_doctors::class,'update_doctor']);

Route::post('/edit_doctor/{id}',[Add_doctors::class,'edit_doctor']);

Route::post('/add_news',[newsController::class,'add_news'])->name('add_news');

Route::get('/news',[newsController::class,'index']);

Route::get('/appointments',[HomeController::class,'appointments']);
Route::get('/showappointments',[HomeController::class,'showappointments']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/doctors',[HomeController::class,'doctors']);
Route::get('/User_Update_appointment/{id}',[HomeController::class,'User_Update_appointment']);

Route::post('/edit_myAppointment/{id}',[HomeController::class,'edit_myAppointment']);

Route::get('/Adminappointment',[HomeController::class,'Adminappointment']);

Route::get('/cancel_appoint/{id}',[HomeController::class,'cancel_appoint']);

Route::get('/approve_appoint/{id}',[HomeController::class,'approve_appoint']);

Route::get('/myAppointment',[HomeController::class,'myAppointment']);

Route::get('/cancel_appointment_user/{id}',[HomeController::class,'cancel_appointment_user']);

Route::get('/emailNote/{id}',[HomeController::class,'emailNote']);

Route::post('/sendemail/{id}',[HomeController::class,'sendemail']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
