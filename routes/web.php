<?php

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

//route airline
Route::get('/airline/list',[App\Http\Controllers\AirlineController::class,'index'])->name('route_airline_index');
Route::post('/airline/list',[App\Http\Controllers\AirlineController::class,'index']);
Route::match(['GET','POST'],'/airline/add',[App\Http\Controllers\AirlineController::class,'add'])->name('route_airline_add');
Route::match(['GET','POST'],'/airline/edit/{id}',[App\Http\Controllers\AirlineController::class,'edit'])->name('route_airline_edit');
Route::get('/airline/delete/{id}',[App\Http\Controllers\AirlineController::class,'delete'])->name('route_airline_delete');

//route user
Route::get('/user/list',[App\Http\Controllers\UserController::class,'index'])->name('route_user_index');
Route::post('/user/list',[App\Http\Controllers\UserController::class,'index']);
Route::match(['GET','POST'],'/user/add',[App\Http\Controllers\UserController::class,'add'])->name('route_user_add');
Route::match(['GET','POST'],'/user/edit/{id}',[App\Http\Controllers\UserController::class,'edit'])->name('route_user_edit');
Route::get('/user/delete/{id}',[App\Http\Controllers\UserController::class,'delete'])->name('route_user_delete');

//route flight
Route::get('/flight/list',[App\Http\Controllers\FlightController::class,'index'])->name('route_flight_index');
Route::post('/flight/list',[App\Http\Controllers\FlightController::class,'index']);
Route::match(['GET','POST'],'/flight/add',[App\Http\Controllers\FlightController::class,'add'])->name('route_flight_add');
Route::match(['GET','POST'],'/flight/edit/{id}',[App\Http\Controllers\FlightController::class,'edit'])->name('route_flight_edit');
Route::get('/flight/delete/{id}',[App\Http\Controllers\FlightController::class,'delete'])->name('route_flight_delete');

//route booking
Route::get('/booking/list',[App\Http\Controllers\BookingController::class,'index'])->name('route_booking_index');
Route::post('/booking/list',[App\Http\Controllers\BookingController::class,'index']);
Route::match(['GET','POST'],'/booking/add',[App\Http\Controllers\BookingController::class,'add'])->name('route_booking_add');
Route::match(['GET','POST'],'/booking/edit/{id}',[App\Http\Controllers\BookingController::class,'edit'])->name('route_booking_edit');
Route::get('/booking/delete/{id}',[App\Http\Controllers\BookingController::class,'delete'])->name('route_booking_delete');

//route ticket
Route::get('/ticket/list',[App\Http\Controllers\TicketController::class,'index'])->name('route_ticket_index');
Route::post('/ticket/list',[App\Http\Controllers\TicketController::class,'index']);
Route::match(['GET','POST'],'/ticket/add',[App\Http\Controllers\TicketController::class,'add'])->name('route_ticket_add');
Route::match(['GET','POST'],'/ticket/edit/{id}',[App\Http\Controllers\TicketController::class,'edit'])->name('route_ticket_edit');
Route::get('/ticket/delete/{id}',[App\Http\Controllers\TicketController::class,'delete'])->name('route_ticket_delete');

Route::get('/',[App\Http\Controllers\HomeController::class,'index'])->name('route_home');

//create account for client
Route::match(['GET','POST'],'/createAcc',[App\Http\Controllers\HomeController::class,'addAccount'])->name('route_createAccount');

//auth
Route::get('/login', [\App\Http\Controllers\Auth\AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [\App\Http\Controllers\Auth\AuthController::class, 'login']);
Route::get('/logout', [\App\Http\Controllers\Auth\AuthController::class,'logout'])->name('logout');

Route::match(['GET','POST'],'/findFLight/add',[App\Http\Controllers\FindFlightController::class,'add'])->name('findFlight');
Route::match(['GET','POST'],'/findFLight/edit/{id}',[App\Http\Controllers\FindFlightController::class,'edit'])->name('editFindFlight');
