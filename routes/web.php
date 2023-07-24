<?php

use App\Http\Controllers\UserControl;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\InteractionController;


Route::get('/', function () {
    return view('home');
});

Route::post('/register', [UserControl::class, 'register']);
Route::post('/login', [UserControl::class, 'login']);
Route::post('/logout', [UserControl::class, 'logout']);

Route::view('/loginpage', 'loginpage');

Route::get('/set', function(){
    return view('set');
});
Route::get('/account', function(){
    return view('account');
});
Route::get('/contacts', function(){
    return view('contacts');
});

Route::get('/setpage/{set_id}', function($set_id){
    return view("setpage")->with("set_id", $set_id);
});


Route::get('/adminpost', function(){
    return view('adminpost');
});
Route::post('/set/add', [PhotoController::class, 'addSet']);
Route::get('/getsets', 'PhotoController@getsets');
Route::get('/getinfo', 'User@getUserInfo');

Route::post('/create_comment', [InteractionController::class, 'comment']);

Route::post('/like_photo', [InteractionController::class, 'like']);

Route::get('/get_comments', [InteractionController::class, 'get_comments']);
