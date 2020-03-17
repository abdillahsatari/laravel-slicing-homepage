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

/* Public routes*/
Route::get('/', 'Publics\HomepageController@index')->name('public.contents.home');
Route::get('/about', 'Publics\AboutpageController@index')->name('public.contents.about');
Route::get('/contact', 'Publics\ContactpageController@index')->name('public.contents.contact');
Route::get('/courses', 'Publics\CoursespageController@index')->name('public.contents.courses');
