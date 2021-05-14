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

Route::get('/',
[ 'as' => 'home',
'uses' => '\Portal\Home\Http\HomeController@index'
]);

Route::get('/presential-courses',
[ 'as' => 'presential-courses',
'uses' => '\Portal\Courses\Http\CoursesController@presentialCourses'
]);

Route::get('/online-courses',
[ 'as' => 'online-courses',
'uses' => '\Portal\Courses\Http\CoursesController@onlineCourses'
]);

Route::get('/attendance',
[ 'as' => 'attendance',
'uses' => '\Portal\Home\Http\HomeController@index'
]);

Route::get('/contact',
[ 'as' => 'contact',
'uses' => '\Portal\Contact\Http\ContactController@index'
]);
