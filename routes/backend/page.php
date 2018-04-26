<?php


Route::group([
    'prefix'    =>  'page',
    'as'        =>  'page.',
    'namespace'  => 'Auth',
], function(){
    Route::group(['namespace' => 'Page'], function () {
        Route::get('/', 'PageController@index')->name('index');
        Route::get('create', 'PageController@create')->name('create');
        Route::get('page/{page}','PageController@show')->name('show');
        Route::patch('page/{page}','PageController@update')->name('update');
        Route::delete('page/{page}','PageController@destroy')->name('destroy');

        Route::resource('page' , 'PageController');
    });

});