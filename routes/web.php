<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', 'App\Http\Controllers\FrontController@index');
Route::get('/abouts', 'App\Http\Controllers\FrontController@about');
Route::get('/courses', 'App\Http\Controllers\FrontController@course');
Route::get('/blogs', 'App\Http\Controllers\FrontController@blog');
Route::get('/events', 'App\Http\Controllers\FrontController@event');
Route::get('/standards', 'App\Http\Controllers\FrontController@standard');
Route::get('/contacts', 'App\Http\Controllers\FrontController@contact');
Route::get('reg', 'App\Http\Controllers\FrontController@registration');
Route::post('reg', 'App\Http\Controllers\FrontController@register_member');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('about', 'App\Http\Controllers\Admin\AboutsController');
Route::resource('class', 'App\Http\Controllers\Admin\ClassController');
Route::resource('course', 'App\Http\Controllers\Admin\CourseController');
Route::resource('blog', 'App\Http\Controllers\Admin\BlogController');
Route::resource('event', 'App\Http\Controllers\Admin\EventController');
Route::resource('member', 'App\Http\Controllers\Admin\MemberController');
