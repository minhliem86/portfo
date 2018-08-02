<?php
Route::namespace('App\Modules\Frontend\Controllers')
    ->middleware('web')
    ->group(function(){
        Route::get('/', 'HomeController@index')->name('front.index');
    });