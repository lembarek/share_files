<?php
use Lembarek\ShareFiles\Controllers\FilesController;

Route::group(['middleware' => 'web'], function () {

    Route::get('/files', [
    'as' => 'file:index',
    'uses' => FilesController::class.'@index',
    ]);


    Route::get('/search', [
    'as' => 'file:search',
    'uses' => FilesController::class.'@search',
    ]);


    Route::get('/add', [
    'as' => 'file:add',
    'uses' => FilesController::class.'@add',
    ]);


    Route::post('/add', [
    'as' => 'file:add:post',
    'uses' => FilesController::class.'@postAdd',
    ]);


    Route::get('/file/{slug}', [
    'as' => 'file:show',
    'uses' => FilesController::class.'@show',
    ]);

});
