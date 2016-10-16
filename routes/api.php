<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', 'UserController@index')->middleware('auth:api');

Route::group(['namespace' => 'Forum', 'middleware' => 'auth:api'], function (){

    //SECTIONS
    Route::get('/sections', 'SectionController@index');

    //TOPICS
    Route::get('/topic', 'TopicController@index');
    Route::get('/topic/{topic}', 'TopicController@show');
    Route::post('/topic', 'TopicController@store');

    //POSTS
    Route::post('/topic/{topic}/post', 'PostController@store');

});

