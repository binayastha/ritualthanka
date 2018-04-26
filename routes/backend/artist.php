<?php

//Route::get('artist', 'DashboardController@index')->name('dashboard');

//Route::get('artist', 'Auth\Artist\ArtistController@index')->name('artist.index');
//Route::get('artist/create', 'Auth\Artist\ArtistController@create')->name('artist.create');


Route::group([
    'prefix'    =>  'artist',
    'as'        =>  'artist.',
    'namespace'  => 'Auth',
], function(){
    Route::group(['namespace' => 'Artist'], function () {
        Route::get('/', 'ArtistController@index')->name('index');
        Route::get('create', 'ArtistController@create')->name('create');
        Route::get('artist/{artist}','ArtistController@show')->name('show');
        Route::patch('artist/{artist}','ArtistController@update')->name('update');
        Route::delete('artist/{artist}','ArtistController@destroy')->name('destroy');

        Route::resource('artist' , 'ArtistController');
    });



});