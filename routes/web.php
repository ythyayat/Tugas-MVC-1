<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PertanyaansController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'HomeController@index' );
Route::get('/register', 'AuthController@register');
Route::post('/welcome', 'AuthController@welcome');
Route::get('/data-tables', 'AuthController@table');

//tugas 5


Route::resource('pertanyaan','PertanyaansController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
