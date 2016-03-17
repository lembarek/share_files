<?php
use Lembarek\ShareFiles\Controllers\FilesController;

Route::group(['as' => 'file::', 'middleware' => 'web'], function () {

    Route::get('/files', [
    'as' => 'index',
    'uses' => FilesController::class.'@index',
    ]);


    Route::get('/search', [
    'as' => 'search',
    'uses' => FilesController::class.'@search',
    ]);


    Route::get('/add', [
    'as' => 'add',
    'uses' => FilesController::class.'@add',
    ]);


    Route::post('/add', [
    'as' => 'add.post',
    'uses' => FilesController::class.'@postAdd',
    ]);


    Route::get('/file/{slug}', [
    'as' => 'show',
    'uses' => FilesController::class.'@show',
    ]);

});
