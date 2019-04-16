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
    Route::get('/tour-{slug}', 'MainController@tourDetail')->name('main.tour_detail');
    Route::post('/comment', 'MainController@comment')->name('main.post_comment');
    Route::get('/medias', 'MainController@medias')->name('main.medias');
    Route::view('/contact', 'main.contact')->name('main.contact');
    Route::post('/contact/submit', 'MainController@contact')->name('main.contact_submit');
    Route::post('/newsletter/submit', 'MainController@newsletter')->name('main.newsletter');
    Route::post('/tour/search', 'MainController@searchTour')->name('main.search_tour');

    Route::get('/setLocale/{locale}', function ($locale) {
        if (in_array($locale, config('app.locales'))) {
            Session::put('locale', $locale);
        }
        return redirect()->back();
    })->name('web.change_language');
});

