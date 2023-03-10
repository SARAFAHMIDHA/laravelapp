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

Route::get('/', 'PagesController@index');

Route::get('/about','PagesController@about');

Route::get('/users/{id}','PagesController@users');
Route::get('/parent','ParentController@index');
Route::get('/student','StudentController@index');
Route::get('/course','CourseController@index');
Route::get('/optedcourse','OptedCourseController@index');

