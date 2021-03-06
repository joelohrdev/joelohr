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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tournaments', 'TournamentController@index');

Route::middleware('auth')->group(function () {
    Route::get('/players', 'PlayerController@index');
    Route::get('/player/{id}', 'PlayerController@show');
    Route::livewire('/player/{player}/bat', 'bat');
});
