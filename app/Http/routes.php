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
    return view('welcome');
});

//数据对接接口
Route::group(['prefix' => 'api'], function () {
    $actions = [
        'ask', #提交
        'append', #追加
        'comment', #评论
        'delete', #删除
        'quality', #优质
        'reply' #回复
    ];
    foreach ($actions as $m) {
        Route::post($m, [
            'as' => 'api.' . $m,
            'middleware' => 'api',
            'uses' => 'ApiController@post' . ucfirst($m)
        ]);
    }
});
