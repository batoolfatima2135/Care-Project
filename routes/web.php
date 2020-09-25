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


Route::resource('/patient', 'patientController');
Route::resource('/doctor', 'doctorController');
Route::get('/', 'HomeController@Index')->name('index');
Route::get('/about', "HomeController@about")->name('about');
Route::get('/contact', "HomeController@contact")->name('contact');
Route::get('/doctor', "HomeController@doctor")->name('doctor');
Route::get('/department', "HomeController@department")->name('department');
