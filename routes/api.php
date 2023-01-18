<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Picture;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::get('/pictures',function(){
//     $picture = Picture::all();
//     return response()->json($picture);
// });

Route::get('/pictures','PictureController@index');
Route::get('/pictures/{id}','PictureController@show')->middleware('App\Http\Middleware\React');
Route::post('/pictures' , 'PictureController@store')->middleware('App\Http\Middleware\React');

Route::post('/register','AuthenticationController@register');
Route::post('/login','AuthenticationController@login');



