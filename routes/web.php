<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/hello',function(){
    return view('hello',['name' => "新用户，小扬"]);
});

Route::get('hello',[App\Http\Controllers\HelloController::class,'index']);
