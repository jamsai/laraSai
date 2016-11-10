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
use Illuminate\Support\Facades\Auth;
Route::auth();

Route::get('/', function () {
    return view('index');
});

Route::auth();

Route::get('/createpromotion', function () {
    return view('createpromotion');
});

// Route::auth();

// Route::get('/pointmanagement', function () {
//     return view('pointmanage');
// });

Route::auth();

Route::get('/shopcontrol', function () {
    return view('shopcontrol');
});

Route::auth();

Route::get('/userprofile', function () {
    return view('userprofile');
});

Route::auth();

Route::get('/redirectAfterLogin', function () {
    $id = Auth::id();
    $type = DB::table('users')->where('id', $id)->value('type');
    if($type == 1){
      return redirect("/");
    }
    else{
      return redirect("/shopcontrol");
    }
});

Route::get('submitpromotion', 'ShopController@createPromotion');

Route::auth();

Route::get('addPointGET', 'ShopController@addPointGET');

Route::auth();

Route::get('removePointGET', 'ShopController@removePointGET');

Route::auth();

Route::get('generateRedeemCode', 'ShopController@generateRedeemCode');

Route::auth();

Route::get('userRedeem', 'userController@userRedeem');

Route::auth();

Route::get('userExchageReward', 'userController@userExchageReward');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::resource('promotions', 'PromotionController');

Route::get('getreward/{id}', 'PromotionController@getReward');

// Route::get('addpoint/{id}/{point}',
// 'PointController@add')
// ->where(['id'=>'[0-9]+', 'point'=>'[0-9]+']);
//
// Route::auth();
//
// Route::get('removepoint/{id}/{point}',
// 'PointController@remove')
// ->where(['id'=>'[0-9]+', 'point'=>'[0-9]+']);
//
// Route::auth();
