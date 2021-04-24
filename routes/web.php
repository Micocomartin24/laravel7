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

// Route::get('/post/{id}', function ($id)  { //test Params
//     return "This is the parameter " . $id;
// });

// Route::get('/admin/post/example', array('as'=>'admin.home', function(){ //Generating URL
//     $url = route('admin.home');

//     //for example in the future
//     //<a href='route(admin.home)' style='button'>Click here</a>

//     return('This is the URL '. $url);
// }));

// //Calling the post controller created need to reference a function use "@"
// // Route::get('/post/{id}', 'PostController2@index'); 

// // Create multiple list in cmd to be used.
// // php artisan route:list  will show all post.index/create/store/show/edit/destroy/update
// Route::resource('posts', 'PostController2');