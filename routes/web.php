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

use App\Http\Controllers\ChatController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/chat', 'ChatController@chat');
Route::POST('/send', 'ChatController@send');
Auth::routes();
Broadcast::routes();
Broadcast::routes(['middleware' => ['auth:api']]);



Route::get('/home', 'HomeController@index')->name('home');
