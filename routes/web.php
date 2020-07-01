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
Route::get('/', 'PermitsController@index');
Route::get('permitRequest', 'PermitsController@index');
Route::get('formPermit', 'PermitsController@create');
Route::post('formPermit', 'PermitsController@store');
