<?php
use App\Http\Controllers\PageController;

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
Route::get('/','PageController@welcome');
Route::get('/beranda','PageController@beranda');
Route::get('/tentang','PageController@tentang');
Route::get('/kontak/{id}','PageController@kontak');