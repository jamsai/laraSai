<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/createpromotion', function () {
    return view('createpromotion');
});

Route::get('/pointmanagement', function () {
    return view('pointmanage');
});

Route::get('/shopcontrol', function () {
    return view('shopcontrol');
});

Route::get('/userprofile', function () {
    return view('userprofile');
});

Route::get('submitpromotion', 'ShopController@createPromotion');

Route::get('addPointGET', 'ShopController@addPointGET');

Route::get('removePointGET', 'ShopController@removePointGET');

Route::get('generateRedeemCode', 'ShopController@generateRedeemCode');

Route::get('userRedeem', 'userController@userRedeem');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('addpoint/{id}/{point}',
'PointController@add')
->where(['id'=>'[0-9]+', 'point'=>'[0-9]+']);

Route::get('removepoint/{id}/{point}',
'PointController@remove')
->where(['id'=>'[0-9]+', 'point'=>'[0-9]+']);
