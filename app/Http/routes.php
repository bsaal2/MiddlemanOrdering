<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    /*
 *Basic Pages routing
 * For home, about, instruction
 * */
    Route::get('/','Page\PageController@index');
    Route::get('instruction','Page\PageController@instruction');
    Route::get('about','Page\PageController@about');

    //Authentication Routes
    Route::get('login','Auth\AuthController@getLogin');
    Route::post('login','Auth\AuthController@postLogin');
    Route::get('logout','Auth\AuthController@getLogout');

    //Registration Routes
    Route::get('register','Auth\AuthController@getRegister');
    Route::post('register','Auth\AuthController@postRegister');

    //Dashboard Routes
    Route::get('dashboard','Dashboard\DashController@index');

});
