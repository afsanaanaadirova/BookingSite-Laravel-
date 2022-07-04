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


Route::get('/', function () { return view('welcome');});
Route::get('/about_room', function () {return view('about_room');})->name('aboutRoomPage');
Route::get('/index', function () { return view('index');})->name('IndexPage');
Route::get('/calendar', function () {return view('calendar');})->name('CalendarPage');
Route::get('/add_room', function () {return view('add_room');})->name('AddRoomPage');
Route::get('/edit_room', function () {return view('edit_booking');})->name('EditRoomPage');
Route::get('/new_booking', function () {return view('new_booking');})->name('NewBookingPage');
Route::get('/view_booking', function () {return view('view_booking');})->name('ViewBookingPage');
