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

Route::get('/courses',
[ 'as' => 'general-courses',
'uses' => '\Portal\Courses\Http\CoursesController@index'
]);

Route::get('/about',
[ 'as' => 'about',
'uses' => '\Portal\About\Http\AboutController@index'
]);

Route::get('/contact',
[ 'as' => 'contact',
'uses' => '\Portal\Contact\Http\ContactController@index'
]);
Route::post('/contact',
[ 'as' => 'send-contact-default',
'uses' => '\Portal\Contact\Http\ContactController@sendDefault'
]);

Route::get('/institute',
[ 'as' => 'institute',
'uses' => '\Portal\Institute\Http\InstituteController@index'
]);
