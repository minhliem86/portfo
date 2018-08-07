<?php
Route::namespace('App\Modules\Frontend\Controllers')
    ->middleware('web')
    ->name('frontend.')
    ->group(function(){
        Route::get('/', 'HomeController@index')->name('index');
        Route::post('/lien-he','ContactController@postContact')->name('contact.post');
    });