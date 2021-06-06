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


Route::post('/contact/student',
[ 'as' => 'send-contact-student',
'uses' => '\Portal\Contact\Http\ContactController@sendStudent'
]);

Route::post('/contact/teacher',
[ 'as' => 'send-contact-teacher',
'uses' => '\Portal\Contact\Http\ContactController@sendTeacher'
]);

Route::post('/contact/patient',
[ 'as' => 'send-contact-patient',
'uses' => '\Portal\Contact\Http\ContactController@sendPatient'
]);

Route::get('/institute',
[ 'as' => 'institute',
'uses' => '\Portal\Institute\Http\InstituteController@index'
]);
