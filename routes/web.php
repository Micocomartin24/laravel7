<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    // return "hello";
}); 

Route::get('/post/{id}', function ($id)  { //test Params
    return "This is the parameter " . $id;
});

Route::get('/admin/post/example', array('as'=>'admin.home', function(){ //Generating URL
    $url = route('admin.home');

    //for example in the future
    //<a href='route(admin.home)' style='button'>Click here</a>

    return('This is the URL '. $url);
}));