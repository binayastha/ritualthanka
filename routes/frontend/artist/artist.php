<?php

Route::group([
    'prefix'    =>  'artist',
    'as'        =>  'artist.',
//    'namespace'  => 'Auth',
],function(){
    Route::group(['namespace' => 'Artist'], function () {
        Route::get('/', 'ArtistController@index')->name('index');
        Route::get('artist/{artist}','ArtistController@show')->name('show');

        Route::resource('artist' , 'ArtistController');
    });

});