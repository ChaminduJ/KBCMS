<?php

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
  return view('auth.login');
});
Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/chat','ChatController@index')->middleware('auth')->name('chat.index');
Route::get('/chat/{id}','ChatController@show')->middleware('auth')->name('chat.show');
Route::post('/chat/getChat/{id}','ChatController@getChat')->middleware('auth');
Route::post('/chat/sendChat','ChatController@sendChat')->middleware('auth');

Route::get('/profile', 'ProfileController@profile')->middleware('auth');

Route::get('/picture', function () {
  return view('picture');
})->middleware('auth');
route::post('/picture',[
  'uses'=>'PictureController@uploadPicture',
  'as'=>'uploadPicture'
]);
Route::post('/profile/deleteAccount', [
  'uses'=>'DeleteController@destroy',
  'as'=>'confirm'
]);
// Route::delete('/profile/deleteAccount', 'DeleteController@destroy');

Route::get('/reset',function(){
  return view('auth.passwords.reset');
})->middleware('auth');

Route::post('/change',[
  'uses'=>'UpdateController@changePassword',
  'as'=>'change'
]);

Route::get('/update', function () {
  return view('update');
})->middleware('auth');

Route::get('/uploadPost', function () {
  return view('uploadPost');
})->middleware('auth');

route::post('/uploadPost',[
  'uses'=>'PostController@uploadPost',
  'as'=>'uploadPost'
]);
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
