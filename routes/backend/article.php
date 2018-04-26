<?php


Route::group([
    'prefix'    =>  'article',
    'as'        =>  'article.',
    'namespace'  => 'Auth',
], function(){
    Route::group(['namespace' => 'Article'], function () {
        Route::get('/', 'ArticleController@index')->name('index');
        Route::get('create', 'ArticleController@create')->name('create');
        Route::get('article/{article}','ArticleController@show')->name('show');
        Route::patch('article/{article}','ArticleController@update')->name('update');
        Route::delete('article/{article}','ArticleController@destroy')->name('destroy');

        Route::resource('article' , 'ArticleController');
    });



});