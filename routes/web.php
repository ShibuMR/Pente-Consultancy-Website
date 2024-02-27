<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::view('/','pages.home');
Route::view('service.html','pages.services');
Route::view('about.html','pages.about');
Route::view('contact.html','pages.contact');
Route::view('gallery.html','pages.gallery');

