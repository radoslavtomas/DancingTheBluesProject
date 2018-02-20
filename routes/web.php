<?php

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

Route::get('/', 'FrontEndController@home')->name('home');
Route::get('/project', 'FrontEndController@project')->name('project');
Route::get('/structure', 'FrontEndController@structure')->name('structure');
Route::get('/funding', 'FrontEndController@funding')->name('funding');
Route::get('/whoweare', 'FrontEndController@whoweare')->name('whoweare');
Route::get('/events', 'FrontEndController@events')->name('events');
Route::get('/event/{slug}', 'FrontEndController@event')->name('event');
Route::get('/blog', 'FrontEndController@blog')->name('blog');
Route::get('/post/{slug}', 'FrontEndController@post')->name('post');
Route::get('/gallery', 'FrontEndController@gallery')->name('gallery');
Route::get('/gallery/album/{slug}', 'FrontEndController@album')->name('album');
Route::get('/contact', 'FrontEndController@contact')->name('contact');
Route::post('contact', 'FrontEndController@postContact')->name('postContact');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
