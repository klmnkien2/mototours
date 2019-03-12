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

Route::post('/ajax/upload', 'Admin\MediaController@uploadFileAjax')->name('upload_file_ajax');

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'MainController@home')->name('main.home');
    Route::get('/tours', 'MainController@tourList')->name('main.tour_list');
    Route::get('/page/{pages}', 'MainController@pageStatic')->name('main.page_static');
    Route::get('/tour/{tours}', 'MainController@pageDestination')->name('main.page_destination');
    Route::post('/comment', 'MainController@comment')->name('main.post_comment');
    Route::get('/medias', 'MainController@medias')->name('main.medias');
    Route::view('/contact', 'main.contact')->name('main.contact');
});

