<?php
Route::namespace('App\Modules\Frontend\Controllers')
    ->middleware('web')
    ->name('frontend.')
    ->group(function(){
        Route::get('/', 'HomeController@index')->name('index');
        Route::post('/lien-he','RequestController@postContact')->name('contact.post');
    });

//Route::get('/react', function(){
//    return view('Api::layouts.layout');
//});
Route::prefix('react')->group(function(){
   Route::get('/{any?}', function(){
       return view('Api::layouts.layout');
   }) ;
});