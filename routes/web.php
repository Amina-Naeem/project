<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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
Route::get('/posts/{post}',[PostController::class,'show']);
//Route::get('/posts/{post}','PostController@show');
/*

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('welcome');
});
*/
/*Route::get('/', function () {

 //  return $name;// project.test/?name=amina
    // return view('test');
    //with the view return  name
    $name= request('name');
    return view('test',
    ['name' => $name
    ]);

});*/
/*Route::get('/posts/{post}', function ($post) {
  return $post;
    //  return view('post');
});*/
/*
Route::get('/posts/{post}', function ($post) {
   $posts = [
       'myfirstpost' => 'this my first post' ,
      'mysecondpost' => 'this my second post'
   ];
   if(! array_key_exists($post,$posts))
   {abort(404, 'sorry doesnot exists');}

   return view('post',['post' => $posts[$post] //?? 'nothing here yet

   ]);
});*/
///controller method

