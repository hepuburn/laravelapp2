<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;

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
});


Route::get('/hello/other', 'HelloController@other');
Route::get('/hello/{id}', 'HelloController@index');


Route::get('/sample', 'Sample\SampleController@index')->name('sample');



Route::get('/hello/{person}', 'HelloController@index');
